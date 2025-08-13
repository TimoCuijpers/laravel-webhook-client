<?php

namespace TimoCuijpers\WebhookClient\WebhookResponse;

use Illuminate\Http\Request;
use TimoCuijpers\WebhookClient\WebhookConfig;
use Symfony\Component\HttpFoundation\Response;

class DefaultRespondsTo implements RespondsToWebhook
{
    public function respondToValidWebhook(Request $request, WebhookConfig $config): Response
    {
        return response()->json(['message' => 'ok']);
    }
}
