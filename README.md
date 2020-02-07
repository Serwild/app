# Serwild app
[![Build Status](https://travis-ci.org/Serwild/app.svg?branch=master)](https://travis-ci.org/Serwild/app)
[![codecov](https://codecov.io/gh/Serwild/app/branch/master/graph/badge.svg)](https://codecov.io/gh/Serwild/app)
[![License: MIT](https://img.shields.io/apm/l/vim-mode.svg)](https://opensource.org/licenses/MIT)

# Development
## Requirements
* Docker
* docker-compose

## Setup
1. git clone ```repository url```
2. docker-compose up -d
3. cp ```.env .env.local```
4. docker-compose exec php-fpm
5. composer install
6. profit

## Test
* ```composer phpunut```
* ```composer phpcs```
* ```composer phpstan```
* ```composer phpmd```
