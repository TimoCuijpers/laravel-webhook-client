<?php

namespace TimoCuijpers\WebhookClient\Tests\TestClasses;

use Illuminate\Http\Request;
use TimoCuijpers\WebhookClient\WebhookConfig;
use TimoCuijpers\WebhookClient\WebhookResponse\RespondsToWebhook;
use Symfony\Component\HttpFoundation\Response;

class CustomRespondsToWebhook implements RespondsToWebhook
{
    public function respondToValidWebhook(Request $request, WebhookConfig $config): Response
    {
        return response()->json(['foo' => 'bar']);
    }
}
