<?php

namespace Storage\StrategyPattern;

class SendSms implements SendMsg
{
    public function message()
    {
        echo 'I am sending SMS to the user';
    }
}
