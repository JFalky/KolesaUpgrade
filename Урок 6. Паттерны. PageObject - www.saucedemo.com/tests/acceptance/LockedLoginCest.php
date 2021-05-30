<?php

use Page\Acceptance\LockedLoginPage;

class LockedLoginCest
{
    /**
     * Проверить появление блока с ошибкой при попытке авторизации заблокированным пользователем
     */
    public function checkErrorFrame(AcceptanceTester $I)
    {
        $loginPage = new LockedLoginPage($I);
        
        $I -> amOnPage('');
        $loginPage -> fillLockedUsernameField()
            -> fillPasswordField()
            -> clickSubmit()
            -> errorBoxDetect()
            -> clickClose()
            -> closeErrorBoxDetect();
    }
}
