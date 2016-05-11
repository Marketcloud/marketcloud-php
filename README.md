# marketcloud-php
Marketcloud API official php client library

## Installation
```
composer install marketcloud
```

## Documentation
The official documentation is available at http://www.marketcloud.it/documentation/php

## API overview
You can interact with the api through a Marketcloud 
```php
Marketcloud\Marketcloud::setCredentials(array(
  'secret_key' => 'your-secret-key',
  'public_key' => 'your-public-key'
));
```
Every resource method, returns json data:
```php
$products = Marketcloud\Products::get();

echo json_encode( (array)$response->body )
```
