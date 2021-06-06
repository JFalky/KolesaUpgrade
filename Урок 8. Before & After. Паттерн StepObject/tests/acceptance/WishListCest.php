<?php

use Page\Acceptance\LoginPage;
use Page\Acceptance\MainPage;
use Page\Acceptance\ProfilePage;
use Step\Acceptance\AddToWishList;

/**
 * Класс для проверки добавления товаров в wishlist
 */
class WishListCest
{
    /**
     * Метод для авторизации пользователя
     */
    protected function Login(\AcceptanceTester $I)
    {
        $I -> amOnPage(MainPage::$url);
        $I -> waitForElementVisible(MainPage::$singInButton);
        $I -> click(MainPage::$singInButton);
        $I -> waitForElementVisible(LoginPage::$emailField);
        $I -> fillField(LoginPage::$emailField, LoginPage::$userEmail);
        $I -> waitForElementVisible(LoginPage::$passwordField);
        $I -> fillField(LoginPage::$passwordField, LoginPage::$userPassword);
        $I -> waitForElementVisible(LoginPage::$singInButton);
        $I -> click(LoginPage::$singInButton);
    }

     /**
     * Метод для отмены авторизации пользователя
     */
    protected function Logout(\AcceptanceTester $I)
    {
        $I -> amOnPage(MainPage::$profileUrl);
        $I -> waitForElementVisible(ProfilePage::$clearWishListButton);
        $I -> click(ProfilePage::$clearWishListButton);
        $I -> acceptPopup();
        $I -> click(MainPage::$singOutButton);
    }
    
    /**
     * Функция, проверяющая что весь выбранный товар действительно добавился в wishlist
     * @before Login
     * @after Logout
     */
    public function checkWishList(\Step\Acceptance\AddToWishList $I)
    {
        $I -> amOnPage(MainPage::$url);
        $I -> addProductToWishList();
        $I -> click(MainPage::$profileButton);
        $I -> seeInCurrentUrl('my-account');
        $I -> waitForElementVisible(ProfilePage::$wishListButton);
        $I -> click(ProfilePage::$wishListButton);
        $I -> assertEquals(AddToWishList::PRODUCTS_NMB, $I -> grabTextFrom(ProfilePage::$qty), "quantity of item in wishlist");
    }
}
