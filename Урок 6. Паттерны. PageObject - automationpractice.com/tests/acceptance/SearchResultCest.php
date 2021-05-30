<?php

use Page\Acceptance\DressesPage;
use Page\Acceptance\MainPage;
use Page\Acceptance\SearchPage;

/**
 * Класс смены раскладки карточек товаров
 */
class SearchResultCest
{
    /**
     * Проверяем смену раскладки результатов поиска
     */
    public function changeItemGrid(AcceptanceTester $I)
    {
        $I->amOnPage(MainPage::$URL);
        $I->seeElement(MainPage::$dressesButton);
        $I->click(MainPage::$dressesButton);
        $I->seeInCurrentUrl(DressesPage::$URL);
        $I->click(DressesPage::$summerDressesButton);
        $I->seeInCurrentUrl(SearchPage::$URL);
        $I->seeElement(SearchPage::$gridModeSelected);
        $I->seeElement(SearchPage::$itemGridMode);
        $I->click(SearchPage::$listButton);
        $I->seeElement(SearchPage::$itemListMode);

    }
}
