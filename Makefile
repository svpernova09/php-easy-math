.PHONY: setup_application
setup_application:
	composer install --prefer-dist --no-progress

.PHONY: test_application
 test_application:
	php vendor/bin/phpunit
