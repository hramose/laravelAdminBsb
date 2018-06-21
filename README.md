# Admin BSB - Laravel 5.6 

Clone this repository to start using Laravel 5.6 with Admin BSB.

#### Table of contents
- [About](#about)
- [Installation Instructions](#installation-instructions)

#### About

[AdminBSB](https://github.com/gurayyarar/AdminBSBMaterialDesign) is a free admin panel that is based on Bootstrap 3.x with Material Design. 

The purpose of this project is to have a clean installation of the latest Laravel with this theme. It isn't yet fully adapted, but at the moment you can work with it.

#### Installation Instructions

1. Run `git clone https://github.com/eleazarbr/laravelAdminBsb`
2. Create a MySQL database for the project
    * ```mysql -u root -p```, 
    * ```create database adminbsb;```
    * ```\q```
3. Run `composer update` from the projects root folder
4. From the projects root run `cp .env.example .env`
5. Configure your `.env` file
6. From the projects root folder run `php artisan key:generate`
7. From the projects root folder run `php artisan migrate`
8. From the projects root folder run `php artisan make:auth`
9. Set up a virtual host or run `php artisan serve` 

## License

This project is open-sourced software licensed under the MIT license.
