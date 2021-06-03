<?php

namespace Tests\Aceeptance;

use Codeception\Example;
use Page\Acceptance\Chapter;

/**
     * Класс перехода в рандомный раздел сайта
     * @group test
     */
class ChooseChapterCest
{
    /**
     * @param Example $data
     * @dataProvider getRandomChapter 
     */
    public function chooseChapter(\AcceptanceTester $I, Example $data)
    {
        $I -> amOnPage('');
        $I -> waitForElementClickable(Chapter::$science);
        $I -> click(sprintf(Chapter::$chapterSelector, $data['selector']));
        $I -> seeInCurrentUrl($data['url']);
        $I -> see($data['title'], Chapter::$titleSelector);
        $I -> wait(5);
    }


    /**
     * Функция рандомного выбора двух разделов без повторения
     */
    protected function getRandomChapter()
    {
        $ArrayOfChapters = [
            ['selector' => '#navbar-links > li:nth-child(2) > a', 'title' => 'Разработка', 'url' => 'develop'],
            ['selector' => '#navbar-links > li:nth-child(3) > a', 'title' => 'Администрирование', 'url' => 'admin'],
            ['selector' => '#navbar-links > li:nth-child(4) > a', 'title' => 'Дизайн', 'url' => 'design'],
            ['selector' => '#navbar-links > li:nth-child(5) > a', 'title' => 'Менеджмент', 'url' => 'management'],
            ['selector' => '#navbar-links > li:nth-child(6) > a', 'title' => 'Маркетинг', 'url' => 'marketing'],
            ['selector' => '#navbar-links > li:nth-child(7) > a', 'title' => 'Научпоп', 'url' => 'popsci']            
        ];
    
        $amount_to_return = 2;
        $already_added_selectors = [];
        $result = [];
        for ($i = 0; $i < $amount_to_return; ++$i) {
            $index_to_add = rand(0, count($ArrayOfChapters) - 1);
            while (in_array($index_to_add, $already_added_selectors)) {
                $index_to_add = rand(0, count($ArrayOfChapters) - 1);
            }
            $already_added_selectors[] = $index_to_add;
            $result[] = $ArrayOfChapters[$index_to_add];
        }

        return $result;      
    }
}
