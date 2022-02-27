Dev Tools
=========

An opiniated set of development packages and tools. 

### Included packages

  - [`captainhook/captainhook`](http://captainhook.info/)
  - [`captainhook/plugin-composer`](https://github.com/captainhookphp/plugin-composer)
  - [`friendsofphp/php-cs-fixer`](https://cs.symfony.com/)
  - [`phlak/coding-standards`](https://github.com/PHLAK/CodingStandards)
  - [`phpstan/phpstan`](https://phpstan.org/)
  - [`phpstan/phpstan-phpunit`](https://github.com/phpstan/phpstan-phpunit)
  - [`phpunit/phpunit`](https://phpunit.de/)
  - [`psy/psysh`](https://psysh.org/)

## Requirements

  - [PHP](https://www.php.net/) >= 8.0
  - [Composer](https://getcomposer.org/)

## Usage

Scaffold (all) project development files.

    composer exec toolbox scaffold

Or scaffold individual componenets.

    composer exec toolbox scaffold:coding-standards
    composer exec toolbox scaffold:static-analysis
