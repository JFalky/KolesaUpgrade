<?php
namespace Page\Acceptance;

/**
 * Страница для авторизации
 */
class LockedLoginPage
{
    /**
     * Заблокированный юзернэйм
     */
    public const USERNAME = 'locked_out_user';

    /**
     * Стандартный юзернэйм для успешной авторизации
     */
    public const PASSWORD = 'secret_sauce';

    /**
     * URL страницы авторизации
     */
    public static $URL = '';

    /**
     * Селектор поля ввода для логина
     */
    public static $loginInput = '//input[@id="user-name"]';

     /**
     * Селектор поля ввода для пароля
     */
    public static $passwordInput = '//input[@id="password"]';

    /**
     * Селектор кнопки авторизации
     */
    public static $loginButton = '//input[@id="login-button"]';

    /**
     * Селектор блока с ошибкой авторизации
     */
    public static $errorMessageBox = '#login_button_container .error';

    /**
     * Селектор кнопки закрытия блока с ошибкой авторизации
     */
    public static $closeButton = '#login_button_container button path';

    /**
     * Объект тестера
     * 
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    /**
     * Метод-конструктор
     */
    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

    /**
     * Заполняет поля ввода логином
     */
    public function fillLockedUsernameField()
    {
        $this -> acceptanceTester -> fillField(self::$loginInput, self::USERNAME);

        return $this;
    }

    /**
     * Заполняет поля ввода пароля
     */
    public function fillPasswordField()
    {
        $this -> acceptanceTester -> fillField(self::$passwordInput, self::PASSWORD);
        
        return $this;
    }

    /**
     * Кликает на кнопку логина
     */
    public function clickSubmit()
    {
        $this -> acceptanceTester -> click(self::$loginButton);

        return $this;
    }

    /**
     * Проверяет наличие блока с ошибкой
     */
    public function errorBoxDetect()
    {
        $this -> acceptanceTester -> seeElement(self::$errorMessageBox);

        return $this;
    }

    /**
     * Кликает на кнопку закрытия блока с ошибкой
     */
    public function clickClose()
    {
        $this -> acceptanceTester -> click(self::$closeButton);

        return $this;
    }

     /**
     * Проверяет закрытие блока с ошибкой
     */
    public function closeErrorBoxDetect()
    {
        $this -> acceptanceTester -> seeNumberOfElements(self::$errorMessageBox, 0);

        return $this;
    }

}
