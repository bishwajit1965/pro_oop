<?php

namespace Storage\StrategyPattern;

class SendEmail implements SendMsg
{
    public function message()
    {
        echo 'I am EMAIL to the user';
    }
}
