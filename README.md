# goranceko.com

Personal website project

## Getting Started

These instructions will get you a copy of the project up and running on your local machine.

### Prerequisites

```
php >= 7.2
composer
node.js
yarn
git
```

### Installing

* Pull source from origin
```
git clone https://github.com/garthlord/goranceko.com
```

* Copy .env.dist to .env and enter config for your environment.
```
cd goranceko.com/
cp .env.dist .env
nano .env
```

* Build php app
```
composer install
```

* Build node.js app
```
yarn install
yarn build
```

* Create DataBase, Migrate and fill DataFixtures
```
php bin/console doctrine:database:create
```

* Run server
```
php bin/console server:run
```

* Open browser and go to 127.0.0.1:8000

## Built With

* [PHP 7.2](http://php.net/) - PHP
* [Symfony 4.1](https://symfony.com/) - PHP Framework
* [Node.js 8.12](https://nodejs.org/) - Node.js
* [Composer 1.6](https://getcomposer.org/) - Dependency Management
* [Yarn 1.10](https://yarnpkg.com/) - Dependency Management

## Authors

* **Goran Čeko** - [GitHub](https://github.com/garthlord) - [LinkedIn](https://www.linkedin.com/in/goranceko11/)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
