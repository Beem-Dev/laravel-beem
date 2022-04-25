<?php

namespace Beem\Laravel\Traits\PaymentCollections;

use Beem\Laravel\Exceptions\ConfigurationUnavailableException;
use Beem\Laravel\Traits\MakesHttpRequests;
use Illuminate\Http\Client\Response;

trait HandlesPaymentCollections
{
    use MakesHttpRequests;

    /**
     * @return Response
     *
     * @throws ConfigurationUnavailableException
     */
    public function paymentCollectionBalance(): Response
    {
        return $this->callBalance('BPAY');
    }
}
