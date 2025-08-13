<?php

namespace TimoCuijpers\WebhookClient\SignatureValidator;

use Illuminate\Http\Request;
use TimoCuijpers\WebhookClient\WebhookConfig;

interface SignatureValidator
{
    public function isValid(Request $request, WebhookConfig $config): bool;
}
