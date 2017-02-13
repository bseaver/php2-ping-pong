# Ping Pong with PHPUnit, Silex and Twig

#### Epicodus PHP Week 2 Lab, 2/13/2017

#### By Sarah Leahy , Benjamin T. Seaver

## Description

This project demonstrates building an app using PHPUnit, Silex and Twig frameworks.

## Setup/Installation Requirements
* See https://secure.php.net/ for details on installing _PHP_.  Note: PHP is typically already installed on Mac.
* See https://getcomposer.org for details on installing _composer_.
* Clone project
* From project root, run > `composer install --prefer-source --no-interaction`
* From web folder in project, Start PHP > `php -S localhost:8000`
* In web browser open `localhost:8000`

## Known Bugs
* No known bugs

## Support and contact details
* No support

## Technologies Used
* PHP
* Composer
* Silex
* Twig
* HTML
* CSS
* Bootstrap
* Git

## Copyright (c)
* 2017 Sarah Leahy, Benjamin T. Seaver

## License
* MIT

## Specifications
* Phase 1 - Dependencies and .gitignore. 
* Phase 2 - PingPong class: exceptions property and empty constructor, setter and calculateException() methods.
* Phase 3 - Build Test cases and implement PingPong methods
* Assumption: Exception list is [[3,"Ping"], [5,"Pong"], [15, Ping-pong]]

| Behavior - What does calculateException() return? | Input    | Output     |
|---------------------------------------------------|----------|------------|
| A number                                            | 1     |  1    |
| A number divisible by 3                             | 3     | Ping  |
| A number divisible by 5                             | 5     | Pong  |
| A number divisible by 3 and 5                       | 15    | Ping-pong |

* Phase 4 - Initial Silex framework with "Hello" on home page
* Phase 5- Output twig template with a a form that accepts a number.
* Phase 6- Output a list showing the numbers and exceptions.
* Phase 7 - Allow user to change the exception list.

* End specifications
