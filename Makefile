cs:
	php vendor/bin/phpcs
	php vendor/bin/phpstan analyze
	php vendor/bin/phpunit tests/

csf:
	php vendor/bin/phpcbf || true

phpstan:
	vendor/bin/phpstan analyze

phpunit:
	php vendor/bin/phpunit tests/

install:
	composer install -o

update:
	composer update -o
