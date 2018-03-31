DOCKER_COMPOSE=docker-compose
DOCKER_EXEC=$(DOCKER_COMPOSE) exec vikingsna-php
DOCKER_EXEC_NODE=$(DOCKER_COMPOSE) exec vikingsna-node

.PHONY: help
help:
	@sh -c "echo ; echo 'usage: make <target> ' ; cat Makefile | grep ^[a-z] | sed -e 's/^/            /' -e 's/://' -e 's/help/help (this message)/'; echo"

docker-up:
	$(DOCKER_COMPOSE) up -d

docker-sync-up:
	docker-sync-stack start

docker-down:
	$(DOCKER_COMPOSE) stop

docker-rm:
	$(DOCKER_COMPOSE) rm -v

docker-ps:
	$(DOCKER_COMPOSE) ps

docker-logs:
	$(DOCKER_COMPOSE) logs

docker-console:
	$(DOCKER_EXEC) bash

migrate:
	$(DOCKER_EXEC) sh -c "php artisan migrate"

migrate-testing:
	$(DOCKER_EXEC) sh -c "php artisan migrate --database=testing"

migrate-rollback:
	$(DOCKER_EXEC) sh -c "php artisan migrate:rollback"

migrate-rollback-testing:
	$(DOCKER_EXEC) sh -c "php artisan migrate:rollback --database=testing"

migrate-refresh-testing:
	$(DOCKER_EXEC) sh -c "php artisan migrate:refresh --database=testing"

recreate-testing-database:
	$(DOCKER_EXEC) sh -c 'mysql -h conv-api-mysql -u root -pconvo -e "drop database conversations_testing; create database conversations_testing;"'
	make migrate-refresh-testing

artisan-cache-clear:
	$(DOCKER_EXEC) sh -c "php artisan cache:clear"

artisan-config-clear:
	$(DOCKER_EXEC) sh -c "php artisan config:clear"

artisan-config-cache:
	$(DOCKER_EXEC) sh -c "php artisan config:cache"

artisan-tinker:
	$(DOCKER_EXEC) sh -c "php artisan tinker"

artisan-optimize:
	$(DOCKER_EXEC) sh -c "php artisan optimize"

composer-install:
	$(DOCKER_EXEC) sh -c "./composer.phar install"

composer-update:
	$(DOCKER_EXEC) sh -c "./composer.phar update"

composer-self-update:
	$(DOCKER_EXEC) sh -c "./composer.phar self-update"

test-php:
	$(DOCKER_EXEC) sh -c "vendor/bin/phpunit"

test-php-filter:
	$(DOCKER_EXEC) sh -c "vendor/bin/phpunit --filter=$(filter)"

chmod:
	$(DOCKER_EXEC) sh -c "/run.sh"
