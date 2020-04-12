ci:
	composer validate
	bin/console
	bin/phpunit
	vendor/bin/ecs check src tests
