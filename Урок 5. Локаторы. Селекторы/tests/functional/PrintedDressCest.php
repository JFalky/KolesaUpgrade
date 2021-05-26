<?php

class PrintedDressCest
{
    /**
     * Проверить, что по запросу 'Printed dress' выводится 5 товаров
     */
  
    // tests
    public function PrintedDress(AcceptanceTester $I)
    {
        $SearchFieldCSS = '#searchbox';
        $SearchFieldXPath = '//input[@id="search_query_top"]';
        $SearchButtonCSS = '#searchbox > button';
        $SearchButtonXPath = '//button[contains(@class, "button-search")]';
        $NumberOfItemCSS = 'ul.grid > li';
        $NumberOfItemXPath = '//ul[@class="product_list grid row"]/li';


        $I->amOnPage('');
        $I->seeElement('#search_query_top');
        $I->fillField('#search_query_top', 'Printed dress');
        $I->seeElement('#searchbox > button');
        $I->click('#searchbox > button');
        $I->seeNumberOfElements('li.ajax_block_product', 5);
    }
}