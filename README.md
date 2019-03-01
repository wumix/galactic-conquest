# [WIP] Galactic-Conquest

## Install

# Composer
1.  Execute following commands.
```
cd /var/www/dev.galactic-conquest.com
composer update
 ```

# Database
1. Login to dev.phpmyadmin.com with username: dev and password: dev
2. Create database "gc" with "utf8_unicode_ci".
3. Execute following commands.
```
vendor/bin/inferno orm:schema-tool:create
vendor/bin/inferno app:doctrine:fixtures
 ```