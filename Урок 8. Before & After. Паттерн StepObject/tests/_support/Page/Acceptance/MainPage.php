<?php
namespace Page\Acceptance;

/**
 * PageObject для главной страницы
 */
class MainPage
{
    /**
     * URL сайта
     */
    public static $url = '';

    /**
     * URL профайла
     */
    public static $profileUrl = '/index.php?fc=module&module=blockwishlist&controller=mywishlist';

    /**
     * Кнопка авторизации
     */
    public static $singInButton = '//*[@class="login"]';

    /**
     * Кнопка отмены авторизации
     */
    public static $singOutButton = '//*[@id="header"]/div[2]//div[2]';

    /**
     * Селектор карточки первого товара
     */
    public static $ItemCard = '//*[@id="homefeatured"]/li[%d]/div';

    /**
     * Селектор QuickView для первого товара
     */
    public static $QuickViewButton = '//ul[@id="homefeatured"]/li[%d]//a[@class="quick-view"]/span';

    /**
     * Селектор модального окна товара
     */
    public static $itemFrame = '.fancybox-wrap';

    /**
     * iframe 
     */
    public static $iframe = '.fancybox-iframe';

    /**
     * Селетор кнопкт добавления в избранное
     */
    public static $addToWishListButton = '#wishlist_button';

    /**
     * Селектор кнопки профайла
     */
    public static $profileButton = '#header nav > div:nth-child(1) span';

    /**
     * Селектор кнопки закрытия окна успешного добавления в wishlist
     */
    public static $closeAddButton = '//*[@id="product"]/div[2]/div/div/a';

    /**
     * Селектор кнопки закрытия модального окна
     */
    public static $closeFrameButton = '//*[@id="index"]/div[2]/div/div/a';
}

