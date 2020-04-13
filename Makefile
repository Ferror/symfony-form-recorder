ci:
	composer validate
	bin/console -q
	vendor/bin/ecs check src tests
	bin/phpunit --coverage-clover=coverage.xml
	vendor/bin/phpstan analyze src -l 7
	vendor/bin/phpmd src text cleancode
