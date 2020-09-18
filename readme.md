# Setup project for the amazing Sushi Universe, Yeah!
Welcome to this amazing tutorial about doing some OOP to manage the inventory (fish, rice, wasabi etc.) for a sushi restaurant.

## To start working on it
### Clone the project (without forking)
- git clone https://github.com/xonatis-academy/sushi-inventory.git

## Install dependencies
- composer install

### Prepare the database
- php bin/console make:migration
- php bin/console make:fixtures
- php bin/console doctrine:migrations:migrate
- php bin/console doctrine:fixtures:load

### Start web server
- php bin/console server:start



