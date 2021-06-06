<?php
namespace Page\Acceptance;

/**
 * PageObject для страницы авторизации
 */
class LoginPage
{
   /**
    * Селектор поля ввода email
    */
    public static $emailField = '#email';

    /**
     * Мой email
     */
    public static $userEmail = "mr.su90@gmail.com";

    /**
     * Мой пароль
     */
    public static $userPassword = "909066";

    /**
    * Селектор поля ввода пароля
    */
    public static $passwordField = '#passwd';

    /**
     * Кнопка SingIn
     */
    public static $singInButton = '#SubmitLogin > span';
}
