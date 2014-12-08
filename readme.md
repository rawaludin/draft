# Draft _(Laravel 4 Application Boilerplate)_
![Draft Poster](https://dl.dropboxusercontent.com/u/57978373/draft.png)

## Why
I love Laravel. But, starting a new project is always a paint for me as I do so much repetitive work. CMS is also not a solution for me. This repository stand for boilerplate when starting a fresh Laravel project. It will be filled with example (working) source code for basic app functionality.

Anyway, **its under development**. You have been warned.

### Configuration
 - Run `composer install` first.
 - I use homestead for development. You should too.
 - I use mandrill for email, if you want then get Mandrill API keys.
 - Copy `.env.example.php` to `.env.local.php` for local environment OR to `.env.php` for production environment.
 - Set your database in `app/config/database.php` or `app/config/local/database.php` for local environment.
 - Run migration.
 - Optional: setup virtual host

## Feature
- Bootstrap 3 based.
- [Zizaco/Confide](https://github.com/zizaco/confide) powered user authentication solution.
- [Zizaco/Entrust](https://github.com/zizaco/entrust) powered ACL.
- Gravatar Integration for profile image.

## Request
You may request feature [here](https://github.com/rahmatawaludin/draft/issues)
