<?php
namespace Storage\DependencyInjection;

class Master
{
    public $job;
    public function masterTeaches($task)
    {
        $this->job = $task;
        echo "The work of the master is ". $task;
    }
}
