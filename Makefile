ci:
	composer validate
	bin/console
	bin/phpunit
