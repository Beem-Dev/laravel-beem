<?php

namespace Beem\Laravel\Traits\Ussd;

use Beem\Laravel\Exceptions\ConfigurationUnavailableException;
use Beem\Laravel\Traits\MakesHttpRequests;
use Illuminate\Http\Client\Response;

trait HandlesUssd
{
    use MakesHttpRequests;

    /**
     * @return Response
     *
     * @throws ConfigurationUnavailableException
     */
    public function ussdBalance(): Response
    {
        return $this->callBalance('USSD');
    }
}
