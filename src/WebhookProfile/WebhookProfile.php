<?php

namespace TimoCuijpers\WebhookClient\WebhookProfile;

use Illuminate\Http\Request;

interface WebhookProfile
{
    public function shouldProcess(Request $request): bool;
}
