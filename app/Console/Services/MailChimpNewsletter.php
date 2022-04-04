<?php

namespace App\Console\Services;

use MailchimpMarketing\ApiClient;

class MailChimpNewsletter implements Newsletter
{
    protected ApiClient $client;

    public function __construct(ApiClient $client)
    {
        $this->client = $client;
    }

    public function subscribe(string $email, string $list = null)
    {
        $list ??= config('services.mailchimp.lists.subscriber');

        return $this->client->lists->addListMember($list, [
            'email_address' => $email,
            'status'        => 'subscribed',
        ]);
    }
}