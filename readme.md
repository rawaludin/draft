# Draft _(Laravel 4 Application Boilerplate)_
![Draft Poster](https://dl.dropboxusercontent.com/u/57978373/draft.png)

## Why
I love Laravel. But, starting a new project is always a pain for me as I do so much repetitive work. CMS is also not a solution for me. This repository stand for boilerplate when starting a fresh Laravel project. It will be filled with example (working) source code for basic app functionality.

Anyway, **its under development**. You have been warned.

### Configuration
 - Run `composer install` first.
 - I use homestead for development. You should too.
 - I use mandrill for email. If you want, then get [Mandrill API keys](http://mandrillapp.com).
 - I use [bower](http://bower.io) for frontend dependencies. If you haven't please install it. To install frontend dependencies, go to `public` folder then run `bower install`.
 - Copy `.env.example.php` to `.env.local.php` for local environment OR to `.env.php` for production environment.
 - Set your database in `app/config/database.php` or `app/config/local/database.php` for local environment.
 - Run migration.
 - Optional: setup virtual host

## Feature
- Bootstrap 3 based.
- Bower powered frontend dependencies management.
- [Zizaco/Confide](https://github.com/zizaco/confide) powered user authentication solution.
- [Zizaco/Entrust](https://github.com/zizaco/entrust) powered ACL. Not everybody need it. Sometimes its overkill, feel free to roll out your own solution.
- Gravatar Integration for profile image.

## Request
You may request feature [here](https://github.com/rahmatawaludin/draft/issues)

## Contribute
You can contribute to this repository in several ways:

- Post an idea [here](https://github.com/rahmatawaludin/draft/issues)
- Design frontend frontend (UI stuff)
- Other ways, coming soon..
