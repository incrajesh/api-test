## About Api-test

Api test is basically a test application representation usage of coin api. It fetch assets records from Coin Api and display it in tabular form.

- [Coin Api Doc](https://docs.coinapi.io/)

### Setup

Clone the api-test repository
```
https://github.com/incrajesh/api-test.git
```
Go to project directory

```
cd api-test
```
Install dependencies
```
composer install
```
Create .env file and set the configurations for below parameters
```
COIN_API_URL=
COIN_API_VERSION=
COIN_API_KEY=
```
Generate an application key,

```
php artisan key:generate
```
Serve the project
```
php artisan serve
```

For assets listing page, visit route `/assets`
