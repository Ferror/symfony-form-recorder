ci:
	composer validate
	bin/console
	vendor/bin/ecs check src tests
	bin/phpunit
	vendor/bin/phpstan analyze src -l 7
