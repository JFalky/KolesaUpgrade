<?php
namespace Step\Acceptance;

use Page\Acceptance\MainPage;

/**
 * Метод добавления товара в wishlist
 */
class AddToWishList extends \AcceptanceTester
{
    /**
     * Какое количество товара необходимо добавить
     */
    public const PRODUCTS_NMB = 2;

    /**
     * Функция добавления в избранное
     */
    public function addProductToWishList()
    {
        $I = $this;

        for($i = 1; $i <= self::PRODUCTS_NMB; $i++) {
            $I -> waitForElementVisible(sprintf(MainPage::$ItemCard, $i));
            $I -> moveMouseOver(sprintf(MainPage::$ItemCard, $i));
            $I -> click(sprintf(MainPage::$QuickViewButton, $i));
            $I -> waitForElement(MainPage::$itemFrame);
            $I -> switchToIFrame(MainPage::$iframe);
            $I -> click(MainPage::$addToWishListButton);
            $I -> waitForElementVisible(MainPage::$closeAddButton);
            $I -> click(MainPage::$closeAddButton);
            $I -> switchToIFrame();
            $I -> click(MainPage::$closeFrameButton);
            $I -> wait(1);
        }
    }  
}