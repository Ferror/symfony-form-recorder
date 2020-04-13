ci:
	composer validate
	bin/console -n
	vendor/bin/ecs check src tests
	bin/phpunit
	vendor/bin/phpstan analyze src -l 7
	vendor/bin/phpmd src text cleancode
