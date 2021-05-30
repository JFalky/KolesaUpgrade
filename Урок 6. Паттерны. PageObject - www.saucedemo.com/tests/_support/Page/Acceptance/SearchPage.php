<?php
namespace Page\Acceptance;

class SearchPage
{
    /**
     * Страница каталога летней одежды
     */
    public static $URL = '/index.php?id_category=11&controller=category';

    /**
     * Определение того, что выбран режим Grid
     */
    public static $gridModeSelected = '#grid.selected > a > i';

    /**
     * Определение того, что карточки с товаром расположены в режиме таблицы
     */
    public static $itemGridMode = '#center_column > ul > li.col-sm-6';

    /**
     * Селектор кнопки List
     */
    public static $listButton = '#list i';

    /**
     * Определение того, что карточки отображаются в режиме List
     */
    public static $itemListMode = '#center_column > ul.list';

}
