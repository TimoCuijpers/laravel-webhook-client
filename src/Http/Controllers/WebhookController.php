<?php

namespace TimoCuijpers\WebhookClient\Http\Controllers;

use Illuminate\Http\Request;
use TimoCuijpers\WebhookClient\WebhookConfig;
use TimoCuijpers\WebhookClient\WebhookProcessor;

class WebhookController
{
    public function __invoke(Request $request, WebhookConfig $config)
    {
        return (new WebhookProcessor($request, $config))->process();
    }
}
