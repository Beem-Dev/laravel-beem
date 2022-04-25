<?php

namespace Beem\Laravel;

use Beem\Laravel\Traits\Airtime\HandlesAirtime;
use Beem\Laravel\Traits\Contacts\HandlesContacts;
use Beem\Laravel\Traits\Disbursements\HandlesDisbursements;
use Beem\Laravel\Traits\Otp\HandlesOtp;
use Beem\Laravel\Traits\PaymentCollections\HandlesPaymentCollections;
use Beem\Laravel\Traits\Sms\HandlesSms;
use Beem\Laravel\Traits\Ussd\HandlesUssd;
use Illuminate\Config\Repository;
use Illuminate\Contracts\Foundation\Application;

class Beem
{
    use HandlesAirtime;
    use HandlesContacts;
    use HandlesDisbursements;
    use HandlesOtp;
    use HandlesPaymentCollections;
    use HandlesSms;
    use HandlesUssd;

    /**
     * Fetch the prefix name for all routes
     *
     * @return Repository|Application|mixed
     */
    public static function pathPrefix()
    {
        return config('beem.path');
    }
}
