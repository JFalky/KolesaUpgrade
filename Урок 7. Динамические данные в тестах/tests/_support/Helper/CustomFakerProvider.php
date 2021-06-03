<?php
namespace Helper;

use Faker\Provider\Base;

/**
 * Класс кастомного Фейкера
 */
class CustomFakerProvider extends Base
{
    /**
     * Массив кодов сотовых операторов КЗ
     */
    protected $phoneCodes = [
        '701',
        '702',
        '775',
        '778'
    ];

    /**
     * Возвращает рандомный казахстанский номер
     */
    public function getPhoneKZ()
    {
        return sprintf(
            '+7 (%d) %d-%d-%d',
            $this -> phoneCodes[array_rand($this -> phoneCodes)],
            random_int(100, 999),
            random_int(10, 99),
            random_int(10, 99)
        );
    }

    /**
     * Возвращает рандомный код CV2
     */
    public function getSecurityCode()
    {
        return random_int(0, 999);
    }

    /**
     * Массив номеров карт
     */
    protected $cardNumbers = [
        '4576787934133214',
        '5176354278992002',
        '3451790035797035'
    ];

    /**
     * Возвращает рандомный номер банковской карты
     */
    public function getCardNumber()
    {
        return sprintf('%d', $this -> cardNumbers[array_rand($this -> cardNumbers)]);
    }

    /**
     * Возвращает рандомный срок действия карты - месяц
     */
    public function getRandomMonth()
    {
        return random_int(2, 13);
    }

    /**
     * Возвращает рандомный срок действия карты - год
     */
    public function getRandomYear()
    {
        return random_int(2, 11);
    }

    /**
     * Возвращает рандомную страну
     */
    public function getRandomCountry()
    {
        return random_int(2, 237);
    }

}
