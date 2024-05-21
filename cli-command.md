# Symfony Basic Testing Kyberna

This project demonstrates setting up a basic Symfony application with various functionalities including a basic controller, service injection, Doctrine ORM, CRUD operations, authentication, console commands, and unit tests.

## Installation

1. Create a new Symfony web application:
    ```bash
    symfony new --webapp symfony-basic-testing-kyberna
    cd symfony-basic-testing-kyberna
    ```

2. Initialize Git repository:
    ```bash
    git add README.md
    git commit -m "Init symfony"
    git branch -M main
    git remote add origin git@github.com:nsaloski/kyberna-testing-tasks.git
    ```

## Basic Controller and Route

1. Create a simple controller with a route returning "Hello World":
    ```bash
    php bin/console make:controller HelloWorldController
    ```

2. Commit the changes:
    ```bash
    git add .
    git commit -m "Set up basic controller and route to display 'Hello World'"
    ```

## Service and Dependency Injection

1. Create a service and inject it into a controller.

2. Commit the changes:
    ```bash
    git add .
    git commit -m "Create a service and inject it into a controller"
    ```

## Doctrine ORM and CRUD Operations

1. Require ORM pack and Maker bundle:
    ```bash
    composer require symfony/orm-pack
    composer require --dev symfony/maker-bundle
    ```

2. Create an entity and CRUD operations:
    ```bash
    php bin/console make:entity User
    php bin/console make:crud User
    ```

3. Create and migrate the database:
    ```bash
    php bin/console doctrine:database:create
    php bin/console make:migration
    php bin/console doctrine:migrations:migrate
    ```

4. Commit the changes:
    ```bash
    git add .
    git commit -m "Set up Doctrine ORM and define an entity with basic CRUD operations"
    ```

## Basic Authentication

1. Require the Security bundle:
    ```bash
    composer require symfony/security-bundle
    ```

2. Implement authentication:
    ```bash
    php bin/console make:auth
    ```

3. Commit the changes:
    ```bash
    git add .
    git commit -m "Implement basic authentication using Symfony's security component"
    ```

## Console Command

1. Write a simple Symfony console command:
    ```bash
    php bin/console make:command app:say-hello
    ```

2. Commit the changes:
    ```bash
    git add .
    git commit -m "Write a simple Symfony console command to perform a specific task"
    ```

## Unit Tests

1. Create and run unit tests:
    ```bash
    php bin/console make:test
    php bin/phpunit
    ```

2. Commit the changes:
    ```bash
    git add .
    git commit -m "Write a simple Symfony console command to perform a specific task"
    ```

## Conclusion

This project covers the basics of setting up a Symfony application with essential functionalities. Follow the above steps to replicate the setup and customize it as per your requirements.
