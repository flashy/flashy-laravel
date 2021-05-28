<?php

namespace Flashy\FlashyLaravel\Tests;

use Flashy\Exceptions\FlashyException;
use Flashy\FlashyLaravel\Facades\Flashy;

class WrapperTest extends TestCase
{

    /**
     * @test
     * @throws FlashyException
     */
    public function get_flashy_contacts()
    {
        $api = new \Flashy\Flashy(['api_key' => 'FLASHY_API_KEY']);

        $contacts = Flashy::contacts();

        $this->assertEquals($contacts, $api->contacts);
    }

    /**
     * @test
     * @throws FlashyException
     */
    public function get_flashy_account()
    {
        $api = new \Flashy\Flashy(['api_key' => 'FLASHY_API_KEY']);

        $contacts = Flashy::account();

        $this->assertEquals($contacts, $api->account);
    }

}
