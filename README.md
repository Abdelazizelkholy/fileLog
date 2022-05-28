# Steps to run Vitaimmun project

### Environment Requirements:
    Requirements
    - GIT
    - PHP >= 7.4 (8.0 is recommended)
    - Composer
    - PHP Extensions:
        * OpenSSL PHP Extension
        * PDO PHP Extension
        * Mbstring PHP Extension
        * Tokenizer PHP Extension
        * BCMath PHP Extension (required when the Hash ID feature is enabled)
        * Intl Extension (required when you use the Localization Container)


## How to run API

* *Clone the repository.*


* *Copy `.env.example` file to `.env` file.*

* *Run `composer install`.*

* *Create empty database and set it's name and connection to `.env`.*

* *Run `php artisan migrate`.*

* Api should be running in 
    * *http://localhost:8000/*

* *Run `php artisan scribe:generate`.*

* Api should be running in 
    * *http://localhost:8000/docs*



#


