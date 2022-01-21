<?php

namespace Flashy\FlashyLaravel;

use Flashy\Exceptions\FlashyException;
use Flashy\Flashy;

class FlashyLaravel
{

    /**
     * @var Flashy
     */
    public $api;

    /**
     * FlashyLaravel constructor.
     * @throws FlashyException
     */
    public function __construct()
    {
        $this->api = new Flashy(config("flashy"));
    }

    /**
     * @param $args
     * @param $name
     * @return mixed
     */
    public function __call($name, $args)
    {
        return $this->api->$name;
    }

}
