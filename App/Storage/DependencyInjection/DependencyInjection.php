<?php
namespace Storage\DependencyInjection;

class DependencyInjection
{
    public function __construct(Master $master)
    {
        $this->master = $master;
    }

    public function teach()
    {
        $this->master->masterTeaches(" to teach his students.");
        return $this;
    }
    public function instruct()
    {
        $this->master->masterTeaches(" to instruct his students.");
         return $this;
    }
    public function guide()
    {
        $this->master->masterTeaches(" to guide his students as well.");
         return $this;
    }
}
