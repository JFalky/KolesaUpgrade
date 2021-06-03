<?php
namespace Helper;

use Faker\Factory;


class BaseHelper extends \Codeception\Module
{
    public function getFaker($locate = 'ru_RU')
    {
        $faker = Factory::create($locate);
        $faker->addProvider(new CustomFakerProvider($faker));

        return $faker;
    }
    
}
