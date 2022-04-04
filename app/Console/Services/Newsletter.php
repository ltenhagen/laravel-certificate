<?php

namespace App\Console\Services;

interface Newsletter
{
    public function subscribe(string $email, string $list = null);
}