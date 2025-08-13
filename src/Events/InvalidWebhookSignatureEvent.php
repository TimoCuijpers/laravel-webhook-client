<?php

namespace TimoCuijpers\WebhookClient\Events;

use Illuminate\Http\Request;
use TimoCuijpers\WebhookClient\WebhookConfig;

class InvalidWebhookSignatureEvent
{
    public function __construct(
        public Request $request,
        public WebhookConfig $config
    ) {
    }
}
