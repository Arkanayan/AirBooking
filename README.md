## Introduction
    Demo app for airline ticket booking system written in PHP
###Features
   * Single Page application
    * Backend written in PHP
    * Frontend written in Javascript
   * All operations are asynchronous (Using AJAX)
   * Frontend communicates with backend via REST APIs

## Installation

### Creating the MySQL Database

Create database using the **schema.sql** file:

### Setup the `login/dbconf.php` file
```php
<?php
    //DATABASE CONNECTION VARIABLES
    $host = "localhost"; // Host name
    $username = "user"; // Mysql username
    $password = "password"; // Mysql password
    $db_name = "login"; // Database name

```

### Setup the `login/config.php` file
<i>Read code comments for a description of each variable</i>

```php
<?php
    //Set this for global site use
    $site_name = 'Test Site';

```
### Credits
    The login system is taken from [PHP-Login](https://github.com/fethica/PHP-Login)