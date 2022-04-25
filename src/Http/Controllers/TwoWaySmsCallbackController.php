<?php

namespace Beem\Laravel\Http\Controllers;

use Beem\Laravel\Events\TwoWaySmsCallbackReceived;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TwoWaySmsCallbackController extends Controller
{
    /**
     * @param Request $request
     */
    public function __invoke(Request $request)
    {
        TwoWaySmsCallbackReceived::dispatch($request);
    }
}
