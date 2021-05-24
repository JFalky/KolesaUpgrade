<?php

class PrintedDressCest
{
    /**
     * Проверить, что по запросу 'Printed dress' выводится 5 товаров
     */
  
    // tests
    public function PrintedDress(AcceptanceTester $I)
    {
        $I->amOnPage('');
        $I->seeElement('#search_query_top');
        $I->fillField('#search_query_top', 'Printed dress');
        $I->seeElement('#searchbox > button');
        $I->click('#searchbox > button');
        $I->seeNumberOfElements('li.ajax_block_product', 5);
    }
}