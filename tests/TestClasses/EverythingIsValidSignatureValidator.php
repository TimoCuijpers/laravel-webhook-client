<?php

namespace TimoCuijpers\WebhookClient\Tests\TestClasses;

use Illuminate\Http\Request;
use TimoCuijpers\WebhookClient\SignatureValidator\SignatureValidator;
use TimoCuijpers\WebhookClient\WebhookConfig;

class EverythingIsValidSignatureValidator implements SignatureValidator
{
    public function isValid(Request $request, WebhookConfig $config): bool
    {
        return true;
    }
}
