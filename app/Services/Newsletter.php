<?php

namespace App\Services;
use MailchimpMarketing\ApiClient;

class Newsletter
{
    public function subscribe(string $email, string $list = null)
    {

        $list ??= config('services.mailchimp.lists.subscribers'); //nullsafe operator: if $list is null then set to this new value. if its not null then keep that value.

        

        return $this->client()->lists->addListMember($list, [
            'email_address' => $email,
            'status' => 'subscribed',
        ]);
    }

    protected function client()
    {
        return (new ApiClient())->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us20'
        ]);
    }
}