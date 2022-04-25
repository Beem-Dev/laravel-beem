<?php

namespace Beem\Laravel\Http\Controllers;

use Beem\Laravel\Events\SmsDeliveryReportReceived;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SmsDeliveryReportController extends Controller
{
    /**
     * @param Request $request
     */
    public function __invoke(Request $request)
    {
        SmsDeliveryReportReceived::dispatch($request);
    }
}
