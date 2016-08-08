E-Contract BVBA - Toolbox package
=============================================

This package offers the integration of the econtract Toolbox API. This API can be used by partners and affiliates of econtract to leverage various services and utility resources owned by econtract on their own websites.




## Installation

Pull this package in through Composer:

```js

    {
        "require": {
            "econtract/toolbox": "1.*"
        }
    }

```

Next, you will need to add several values to your `.env` file:

```

    TOOLBOX_URL=http://toolbox.econtract.be/        // Toolbox API key URL that is to be used
    TOOLBOX_KEY=your_toolbox_key                    // Toolbox API key that will authenticate you in our system.

```

In order to use the API (and thus this package), an API key is required. If you are in need of such a key, please get in touch with Aanbieders.be via [their website](https://www.aanbieders.be/contact).


### Laravel installation

Add the service provider to your `config/app.php` file:

```php

    'providers'             => array(

        //...
        \Econtract\Toolbox\ToolboxServiceProvider::class,

    )

```

Add the API as an alias to your `config/app.php` file

```php

    'facades'               => array(

        //...
        'Toolbox'               => \Econtract\Toolbox\Facades\Toolbox::class,

    ),

```





## Usage

### Laravel usage

You can access the API using the alias you have selected in your `config/app.php` file:

```php
    
    $cities = Toolbox::getCities(
        array(
            'query'     => 'Kort',
        )
    );

    $city = Toolbox::getCity( $id );

    $addresses = Toolbox::getAddresses(
        array(
            'street'        => 'markt',
            'postcode'      => '350',
            'city'          => 'ru',
        )
    );

```

For information regarding all possible parameters and their properties, we kindly refer you to [the API documentation](http://apihelp.econtract.be/).


### Non-laravel usage

```php

    include('vendor/autoload.php');

    use Econtract/Toolbox/ToolboxService;


    $dotenv = new Dotenv\Dotenv(__DIR__);
    $dotenv->load();


    $toolboxService = new ToolboxService();
    $toolboxService->getAddresses(
        array(
            'street'        => 'markt',
            'postcode'      => '350',
            'city'          => 'ru',
        )
    );

```




## License

This package is proprietary software and may not be copied or redistributed without explicit permission.




## Contact

Evert Engelen (owner)

- Email: evert@aanbieders.be


Jan Oris (developer)

- Email: jan.oris@ixudra.be
- Telephone: +32 496 94 20 57