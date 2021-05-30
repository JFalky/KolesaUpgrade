<?php
namespace Page\Acceptance;

class DressesPage
{
     /**
     * URL главной страницы Dresses 
     */
    public static $URL = '/index.php?id_category=8&controller=category';

    /**
     * Селектор кнопки SUMMER DRESSES
     */
    public static $summerDressesButton = '//div[@id="subcategories"]/ul/li[3]/div[1]/a/img';
}
