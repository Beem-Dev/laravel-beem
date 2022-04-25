<?php

namespace Beem\Laravel\Http\Controllers;

use Beem\Laravel\Events\PaymentCheckoutCallbackReceived;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PaymentCheckoutCallbackController extends Controller
{
    /**
     * @param Request $request
     */
    public function __invoke(Request $request)
    {
        PaymentCheckoutCallbackReceived::dispatch($request);
    }
}
