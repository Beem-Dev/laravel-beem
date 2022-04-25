<?php

namespace Beem\Laravel\Traits\Airtime;

use Beem\Laravel\Exceptions\ConfigurationUnavailableException;
use Beem\Laravel\Traits\MakesHttpRequests;
use Illuminate\Http\Client\Response;

trait HandlesAirtime
{
    use MakesHttpRequests;

    /**
     * @param string $dest_addr
     * @param float $amount
     * @param int $reference_id
     *
     * @return Response
     *
     * @throws ConfigurationUnavailableException
     */
    public function airtimeRecharge(string $dest_addr, float $amount, int $reference_id): Response
    {
        $amount = number_format($amount, 2, '.', '');

        return $this->call(
            'https://apiairtime.beem.africa/v1/transfer',
            'POST',
            compact('dest_addr', 'amount', 'reference_id')
        );
    }

    /**
     * @param string $transaction_id
     *
     * @return Response
     *
     * @throws ConfigurationUnavailableException
     */
    public function airtimeTransaction(string $transaction_id): Response
    {
        return $this->call(
            'https://apiairtime.beem.africa/v1/transaction-status',
            'POST',
            compact('transaction_id')
        );
    }

    /**
     * @return Response
     *
     * @throws ConfigurationUnavailableException
     */
    public function airtimeBalance(): Response
    {
        return $this->callBalance('AIRTIME');
    }
}
