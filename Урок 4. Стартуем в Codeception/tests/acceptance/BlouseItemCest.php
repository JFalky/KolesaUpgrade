<?php

class BlouseItemCest
{
    /**
     * Проверить наличие товара Blouse и открытие модального окна с этим товаром
     */
  
    // tests
    public function Blouse(AcceptanceTester $I)
    {
        $I->amOnPage('');
        $I->seeElement('#homefeatured > li:nth-child(2) > div > div.right-block > h5 > a');
        $I->moveMouseOver('#homefeatured > li:nth-child(2) > div > div.right-block > h5 > a');
        $I->waitForElementVisible('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view > span');
        $I->click('#homefeatured > li:nth-child(2) > div > div.left-block > div > a.quick-view > span');
        $I->switchToIFrame(".fancybox-iframe");
        $I->waitForElementVisible('#product > div > div > div.pb-center-column.col-xs-12.col-sm-4');
    }
}
