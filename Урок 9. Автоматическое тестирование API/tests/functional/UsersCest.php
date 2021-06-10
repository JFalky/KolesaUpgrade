<?php

use function PHPUnit\Framework\assertEquals;

/**
 * Класс работы с юзером
 */
class UsersCest
{
    public static $newName = 'Kolesa';

    /**
     * Тест на проверку различных операций с юзером
     */
    public function checkUserOperations(\FunctionalTester $I)
    {
        $defaultSchema = [
            "job"       => 'string',
            "_id"       => 'string',
            "email"     => 'string', 
            "superhero" => 'boolean',
            "name"      => 'string',
            "owner"     => 'string'
            ];

        /**
         * Генерация позьзователя фэйкером
         */
        $userData = [
            'name'      => $I -> getFaker() -> name,
            'email'     => $I -> getFaker() -> email,
            'owner'     => 'JFalky',
            'job'       => $I -> getFaker() -> company
            ];
        
        /**
         * Создание нового юзера
         */
        $I -> haveHttpHeader('Content-Type', 'application/json');
        $I -> sendPost('human', $userData);
        $I -> seeResponseCodeIsSuccessful();
        $I -> seeResponseContainsJson(['status' => 'ok']);
        $I -> sendGet('people', $userData);
        $I -> seeResponseMatchesJsonType($defaultSchema);
        
        $user_id = $I -> grabDataFromResponseByJsonPath('$.._id');
        
        /**
         * Изменение имени юзера
         */
        $I -> sendPut('human?_id='.$user_id[count($user_id) - 1],  ['name' => self::$newName]);
        $I -> seeResponseContainsJson(['nModified' => 1]);
        $I -> sendGet('people?owner='.$userData['owner']);
        $I -> seeResponseContainsJson(['name' => self::$newName]);

        /**
         * Удаление юзера
         */
        $I -> sendDelete('human?_id='.$user_id[count($user_id)-1]);
        $I -> seeResponseContainsJson(['deletedCount' => 1]);
        $I -> sendGet('people?owner='.$userData['owner']);
        $I -> dontSeeResponseContainsJson(['owner' => $userData['owner']]);
        
   }
}