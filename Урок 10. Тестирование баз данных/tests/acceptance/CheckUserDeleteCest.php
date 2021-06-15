<?php

use Page\Acceptance\PageObject;

/**
 * Класс для работы с юзером
 */
class CheckUserDeleteCest
{ 
    protected $data;

    /**
     * Создание рандомных пользователей
     */
    protected function generateRandomUser(AcceptanceTester $I)
    {
        for($n = 1; $n <= PageObject::NUMBER_OF_USER; $n++)
        {
          $faker = $I -> getFaker();

          $this -> data = [
            "job"               => $faker -> company,
            "superhero"         => $faker -> boolean,
            "skill"             => $faker -> word,
            "email"             => $faker -> email,
            "name"              => $faker -> name,
            "DOB"               => $faker -> date("Y-m-d"),
            "avatar"            => $faker -> imageUrl(),
            "canBeKilledBySnap" => $faker -> boolean,
            "created_at"        => $faker -> date("Y-m-d"),
            "owner"             => "JFalky",
          ];

          $I -> haveInCollection(PageObject::$collectionUrl, $this -> data);      
        }   
    }

    /**
     * Чиста оставшихся после нажатия на Snap пользователей
     */
    protected function clearUsers(\AcceptanceTester $I)
    {
      $I -> sendGet(PageObject::$apiUrl, $this -> data);
      $user_id = $I -> grabDataFromResponseByJsonPath('$.._id');
      
      for ($i = 0; $i < count($user_id); $i++)
      {
        $I -> sendDelete(PageObject::$humanUrl.$user_id[$i]);
      }
    }
        
    /**
     * Удаление пользователей с canBeKilledBySnap = true
     * @group test1
     * @before generateRandomUser
     * @after clearUsers
     */
    public function deleteBySnap(AcceptanceTester $I)
    {
      $I -> amOnPage(PageObject::$ownerUrl);
      $I -> waitForElement(PageObject::$lastUser);
      $I -> seeNumberOfElements(PageObject::$countOfUsers, PageObject::NUMBER_OF_USER);
      $I -> click(PageObject::$snapButton);
      $I -> dontSeeInCollection(PageObject::$collectionUrl, ['canBeKilledBySnap' => true, 'owner' => $this -> data['owner']]);
    }
}