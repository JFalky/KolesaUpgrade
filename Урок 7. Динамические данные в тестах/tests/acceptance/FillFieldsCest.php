<?php

namespace Tests\Aceeptance;

use Codeception\Example;
use Page\Acceptance\Fill;
use Faker\Factory;
use Helper\CustomFakerProvider;

/**
 * Класс для тестирования формы
 * @group test2
 */
class fillFieldsCest
{
    /**
     * Тест на проверку использования полей с помощью фейкера
     * @group test2
     */
    public function checkFillField(\AcceptanceTester $I)
    {
        $faker = Factory::create('ru_RU');
        $faker->addProvider(new CustomFakerProvider($faker));

        $name = $faker->firstName;
        $lastName = $faker->lastName;
        $email = $faker->email;
        $phoneNumber = $I -> getFaker() -> getPhoneKZ();
        $address = $faker->address;
        $city = $faker->city;
        $state = $faker->region;
        $postal = $faker->postcode;
        $cardFirstName = $faker->firstName;
        $cardLastName = $faker->lastName;
        $cardNumber = $I -> getFaker() -> getCardNumber();
        $securityCode = $I-> getFaker() -> getSecurityCode();
        $month = $I -> getFaker() -> getRandomMonth();
        $year = $I -> getFaker() -> getRandomYear();
        $cardOwnerCity = $faker->city;
        $cardOwnerState = $faker->region;
        $cardOwnerPostal = $faker->postcode;
        $country = $I -> getFaker() -> getRandomCountry();
        $cardOwnerAddress = $faker->address;


        $I -> amOnPage('');
        $I -> fillField(Fill::$firstName, $name);
        $I -> fillField(Fill::$lastName, $lastName);
        $I -> fillField(Fill::$email, $email);
        $I -> fillField(Fill::$phoneNumber, $phoneNumber);
        $I -> fillField(Fill::$address, $address);
        $I -> fillField(Fill::$city, $city);
        $I -> fillField(Fill::$state, $state);
        $I -> fillField(Fill::$postal, $postal);
        $I -> click(Fill::$carPaymentButton);
        $I -> fillField(Fill::$cardFirstName, $cardFirstName);
        $I -> fillField(Fill::$cardLastName, $cardLastName);
        $I -> fillField(Fill::$cardNumber, $cardNumber);
        $I -> fillField(Fill::$securityCode, $securityCode);
        $I -> click(sprintf(Fill::$expirationMonth, $month));
        $I -> click(sprintf(Fill::$expirationYear, $year));
        $I -> fillField(Fill::$cardOwnerAddress, $cardOwnerAddress);
        $I -> fillField(Fill::$cardOwnerCity, $cardOwnerCity);
        $I -> fillField(Fill::$cardOwnerState, $cardOwnerState);
        $I -> fillField(Fill::$cardOwnerPostal, $cardOwnerPostal);
        $I -> click(sprintf(Fill::$cardOwnerCountry, $country));;
        $I -> wait(10);
        $I -> click(Fill::$registerButton);
        $I -> waitForText('Good job');

    }


}