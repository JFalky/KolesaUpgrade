<?php
namespace Page\Acceptance;

class PageObject
{
    /**
     * Количество создавамых юзеров
     */
    public const NUMBER_OF_USER = 10;

    /**
     * URL для API
     */
    public static $apiUrl = 'http://api.izze.xyz/test/people';

    /**
     * URL коллекции
     */
    public static $collectionUrl = 'people';

    /**
     * URL owener'а
     */
    public static $ownerUrl = '?owner=JFalky';

    /**
     * URL для удаления юзера
     */
    public static $humanUrl = 'human?_id=';

    /**
     * Селектор последнего нового юзера
     */
    public static $lastUser = '//*[@id="app"]//li['.self::NUMBER_OF_USER.']';

    /**
     * Селектор кнопки Snap
     */
    public static $snapButton = '#snap';

    /**
     * Селектор для количества отображаемых юзеров
     */
    public static $countOfUsers = '.users > li';
}
