<?php
namespace Helper;

use Faker\Factory;

/**
 * 
 */
class Acceptance extends \Codeception\Module
{
    public function getFaker($locate = 'ru_RU')
    {
        $faker = Factory::create($locate);
        return $faker;
    }
}
