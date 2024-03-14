<div align="center">
  <h1>CRUD PRODUCTS</h1>

  <img src="https://skills.thijs.gg/icons?i=laravel,docker,mysql,vscode,github,markdown" />

  <p>A simple products panel to manage using Laravel and Filament</p>
</div>

**Author:** Gabriel Santos Cardoso

**Created:** 14/03/2024

## Summary

This project were, in a primary moment, a simple repository made with the purpose to learn more about the Repository Pattern in Laravel. Later on I refactored to use the [Filament](https://filamentphp.com/) to accelerate and also learn more about this admin panel.

## Motivation

The motivation behind save this project is serve as a "snapshot" of my mind in case I need to review something about the topics covered in this application.

## Specification

This application uses, in summary:

- Laravel (powered by Sail)
- FilamentPHP
- Docker and Docker Compose
- MySQL
- Any IDE or Text Editor

## Implementation

To contribute or just use this app you must follow the steps as below:

1. Clone this repository using whatever manager you want
2. Using Docker run the command `docker run --rm -u "$(id -u):$(id -g)" -v "$(pwd):/var/www/html" -w /var/www/html laravelsail/php83-composer:latest composer install --ignore-platform-reqs`
3. After, you will have a fresh install of Laravel Sail application in your local
4. Clone the `.env.example` as `.env` and update the variables to your case
5. Up the containers using `./vendor/bin/sail up -d`
6. Generate a new application key using `./vendor/bin/sail artisan key:generate`
7. Run the migrations and seed database using `./vendor/bin/sail artisan migrate --seed`
8. Create a new Filament user to access the admin panel using `./vendor/bin/sail artisan make:filament-user`
9. Stop to read and start to develop 🤡

## Copyright

This project is licenced under the [MIT Licence](LICENSE).
