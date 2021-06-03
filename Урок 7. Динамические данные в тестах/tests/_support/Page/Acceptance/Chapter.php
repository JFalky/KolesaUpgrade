<?php
namespace Page\Acceptance;

/**
 * PageObject для страницы сайта habr.com
 */
class Chapter
{
    /**
     * Селектор раздела Научпоп
     */
    public static $science = '#navbar-links > li:nth-child(7) > a';

    /**
     * Селектор раздела 
     */
    public static $chapterSelector = '%s';

    /**
     * Селектор заголовка раздела
     */
    public static $titleSelector = '.page-header.page-header_110';

}
