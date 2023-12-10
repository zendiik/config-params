.DEFAULT_GOAL := cc

cc:
	composer dump-autoload -o

cs:
	php vendor/bin/phpcs
	php vendor/bin/phpstan analyze
	php vendor/bin/phpunit tests/ --coverage-text

csf:
	php vendor/bin/phpcbf || true

phpstan:
	vendor/bin/phpstan analyze

phpunit:
	php vendor/bin/phpunit tests/ --coverage-text

install:
	composer install -o

update:
	composer update -o
