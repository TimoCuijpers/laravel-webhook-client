<?php

namespace TimoCuijpers\WebhookClient\Tests\TestClasses;

use Illuminate\Http\Request;
use TimoCuijpers\WebhookClient\WebhookProfile\WebhookProfile;

class ProcessNothingWebhookProfile implements WebhookProfile
{
    public function shouldProcess(Request $request): bool
    {
        return false;
    }
}
