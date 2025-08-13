<?php

namespace TimoCuijpers\WebhookClient\SignatureValidator;

use Illuminate\Http\Request;
use TimoCuijpers\WebhookClient\Exceptions\InvalidConfig;
use TimoCuijpers\WebhookClient\WebhookConfig;

class DefaultSignatureValidator implements SignatureValidator
{
    public function isValid(Request $request, WebhookConfig $config): bool
    {
        $signature = $request->header($config->signatureHeaderName);

        if (! $signature) {
            return false;
        }

        $signingSecret = $config->signingSecret;

        if (empty($signingSecret)) {
            throw InvalidConfig::signingSecretNotSet();
        }

        $computedSignature = hash_hmac('sha256', $request->getContent(), $signingSecret);

        return hash_equals($computedSignature, $signature);
    }
}
