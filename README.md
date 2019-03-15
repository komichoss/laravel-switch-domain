# komicho\laravel-switch-domain
Switch between all domains of your project on development mode

## Install via composer
```bash
$ composer require komicho/laravel-switch-domain dev-master
```
---
## `set_domain` method
```php
set_domain('<domain.dev>');
```
## add `KOMICHO_SWITCH_DOMAIN_TO` to .env file
```env
KOMICHO_SWITCH_DOMAIN_TO=<domain.dev>
```
> If the value is empty, the domains will work in their default form

## How to use
use `set_domain` method on `domain` method .. such as the following example
```php
...
->domain(set_domain('<domain.dev>'))
...
```

## Full example
Go to file `app/Providers/RouteServiceProvider.php`.

### web routes
```php
protected function mapWebRoutes()
{
    Route::middleware('web')
            ->namespace($this->namespace)
            ->domain(set_domain('domain.dev'))
            ->group(base_path('routes/web.php'));
}
```

### app routes
```php
protected function mapAppRoutes()
{
    Route::middleware('web')
            ->namespace($this->namespace)
            ->domain(set_domain('app.domain.dev')))
            ->group(base_path('routes/app.php'));
}
```

According to rules [MPL](https://medium.com/@komicho/micro-package-logic-mpl-10f22ccc50c1) :)

THX.