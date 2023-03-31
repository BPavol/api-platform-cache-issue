# api-platform/core - minimal working example for issue 5506
https://github.com/api-platform/core/issues/5506

# Run
```shell
docker compose run php php ./composer.phar install
docker compose run php php bin/console cache:clear
docker compose run php php ./public/index.php
```
