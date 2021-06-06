<?php
namespace Page\Acceptance;

/**
 * PageObject для страница профайла
 */
class ProfilePage
{
    /**
     * Селектор кнопки my wishlist
     */
    public static $wishListButton = '//*[@id="center_column"]//div[2]//span';

    /**
     * Количество товара в wishlist
     */
    public static $qty = '.bold.align_center';

    /**
     * Селектор кнопки очистки wishlist
     */
    public static $clearWishListButton = '//td[6]/a/i';

}
