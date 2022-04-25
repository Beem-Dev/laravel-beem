<?php

namespace Beem\Laravel\Traits\Disbursements;

use Beem\Laravel\Exceptions\ConfigurationUnavailableException;
use Beem\Laravel\Traits\MakesHttpRequests;
use Illuminate\Http\Client\Response;

trait HandlesDisbursements
{
    use MakesHttpRequests;

    /**
     * @param string $amount
     * @param string $clientReferenceId
     * @param string $accountNumber
     * @param string $walletNumber
     * @param string $walletCode
     * @param string $currency
     *
     * @return Response
     *
     * @throws ConfigurationUnavailableException
     */
    public function disburse(
        string $amount,
        string $clientReferenceId,
        string $accountNumber,
        string $walletNumber,
        string $walletCode,
        string $currency = 'TZS'
    ): Response {
        $data = [
            'amount' => $amount,
            'client_reference_id' => $clientReferenceId,
            'source' => [
                'account_no' => $accountNumber,
                'currency' => $currency,
            ],
            'destination' => [
                'wallet_number' => $walletNumber,
                'wallet_code' => $walletCode,
                'currency' => $currency,
            ],
        ];

        return $this->call(
            'https://apipay.beem.africa/webservices/disbursement/transfer',
            'POST',
            $data
        );
    }
}
