<?php

namespace TimoCuijpers\WebhookClient\Tests\TestClasses;

use Illuminate\Http\Request;
use TimoCuijpers\WebhookClient\Models\WebhookCall;
use TimoCuijpers\WebhookClient\WebhookConfig;

class WebhookModelWithoutPayloadSaved extends WebhookCall
{
    public static function storeWebhook(WebhookConfig $config, Request $request): WebhookCall
    {
        return WebhookCall::create([
            'name' => $config->name,
            'url' => 'https://example.com',
            'payload' => [],
        ]);
    }
}
