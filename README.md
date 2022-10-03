# ZamboDaniel SyliusAbandonedCartPlugin

[![Latest Version][ico-version]][link-packagist]
[![Latest Unstable Version][ico-unstable-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Build Status][ico-github-actions]][link-github-actions]
[![Code Coverage][ico-code-coverage]][link-code-coverage]

[Setono](https://setono.com) have made a bunch of [plugins for Sylius](https://github.com/Setono), and we have some guidelines
which we try to follow when developing plugins. These guidelines are used in this repository, and it gives you a very
solid base when developing plugins.

Enjoy! 

## Quickstart

1. Run `composer create-project --prefer-source --no-install --remove-vcs zambo-daniel/sylius-abandoned-cart-plugin:dev-master ProjectName` or just click the `Use this template` button at the right corner of this repository.
2. Run `cd ProjectName && composer install`
3. From the plugin skeleton root directory, run the following commands:

    ```bash
    $ php init
    $ (cd tests/Application && yarn install)
    $ (cd tests/Application && yarn build)
    $ (cd tests/Application && bin/console assets:install)
    
    $ (cd tests/Application && bin/console doctrine:database:create)
    $ (cd tests/Application && bin/console doctrine:schema:create)
   
    $ (cd tests/Application && bin/console sylius:fixtures:load -n)
    ```
   
3. Start your local PHP server: `symfony serve` (see https://symfony.com/doc/current/setup/symfony_server.html for docs)

To be able to setup a plugin's database, remember to configure you database credentials in `tests/Application/.env` and `tests/Application/.env.test`.

[ico-version]: https://poser.pugx.org/zambo-daniel/sylius-abandoned-cart-plugin/v/stable
[ico-unstable-version]: https://poser.pugx.org/zambo-daniel/sylius-abandoned-cart-plugin/v/unstable
[ico-license]: https://poser.pugx.org/zambo-daniel/sylius-abandoned-cart-plugin/license
[ico-github-actions]: https://github.com/ZamboDaniel/SyliusAbandonedCartPlugin/workflows/build/badge.svg
[ico-code-coverage]: https://codecov.io/gh/ZamboDaniel/SyliusAbandonedCartPlugin/branch/master/graph/badge.svg

[link-packagist]: https://packagist.org/packages/zambo-daniel/sylius-abandoned-cart-plugin
[link-github-actions]: https://github.com/ZamboDaniel/SyliusAbandonedCartPlugin/actions
[link-code-coverage]: https://codecov.io/gh/ZamboDaniel/SyliusAbandonedCartPlugin