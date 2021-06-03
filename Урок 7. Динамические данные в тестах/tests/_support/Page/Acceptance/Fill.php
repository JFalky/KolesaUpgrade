<?php
namespace Page\Acceptance;

/**
 * PageObject для страницы формы
 */
class Fill
{
   /**
    * Локатор поля имени
    */
   public static $firstName = "//*[@id = 'firstName']"; 

   /**
    * Локатор поля фамилии
    */
   public static $lastName = "//*[@id = 'lastName']";

   /**
    * Локатор поля e-mail
    */
   public static $email = "//*[@type = 'email']";

   /**
    * Локатор поля телефонного номера
    */
   public static $phoneNumber = "//*[@id = 'phoneNumber']";
   
   /**
    * Локатор поля адреса
    */
   public static $address = "//*[@id = 'address']";
   
   /**
    * Локатор поля города
    */
   public static $city = "//*[@id = 'city']";

   /**
    * Локатор поля региона
    */
   public static $state = "//*[@id = 'state']";

   /**
    * Локатор поля потового индекса
    */
   public static $postal = "//*[@id = 'postal']";

   /**
    * Локатор кнопки Регистрация
    */
   public static $registerButton = "//*[@type='submit']";

   /**
    * Локатор кнопки метода оплаты
    */
   public static $carPaymentButton = "//*[@id='input_32_paymentType_credit']";

    /**
    * Локатор поля имени на карте
    */
    public static $cardFirstName = "//input[@id='input_32_cc_firstName']";

    /**
    * Локатор поля фамилии на карте
    */
    public static $cardLastName = "//input[@id='input_32_cc_lastName']";

    /**
    * Локатор поля номера карты 
    */
    public static $cardNumber = "//input[@id='input_32_cc_number']";

    /**
    * Локатор поля секретного кода
    */
    public static $securityCode = "//input[@id='input_32_cc_ccv']";

    /**
    * Локатор поля срока действия карты - месяц
    */
    public static $expirationMonth = "//*[@id='input_32_cc_exp_month']/option[%d]";

    /**
    * Локатор поля срока действия карты - год
    */
    public static $expirationYear = "//*[@id='input_32_cc_exp_year']/option[%d]";
    
    /**
    * Локатор поля адреса владельца карты
    */
    public static $cardOwnerAddress = "//input[@id='input_32_addr_line1']";

    /**
    * Локатор поля города проживания владельца карты
    */
    public static $cardOwnerCity = "//input[@id='input_32_city']";

    /**
    * Локатор поля региона проживания владельца карты
    */
    public static $cardOwnerState = "//input[@id='input_32_state']";

    /**
    * Локатор поля почтового кода владельца карты
    */
    public static $cardOwnerPostal = "//input[@id='input_32_postal']";

    /**
    * Локатор поля страны проживания владельца карты
    */
    public static $cardOwnerCountry = "//*[@id='input_32_country']/option[%d]";

}
