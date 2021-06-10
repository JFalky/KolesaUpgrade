<?php
namespace Helper;

use Faker\Factory;

/**
 * Класс для работы с фэйкером
 */
class BaseHelper extends \Codeception\Module
{
    public function getFaker($locate = 'en_EN')
    {
        $faker = Factory::create($locate);
        return $faker;
    }
    
}