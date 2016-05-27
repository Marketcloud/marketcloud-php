# marketcloud-php
Marketcloud API official php client library

## Installation through composer
```
composer require marketcloud/marketcloud-php
composer install
```

## Documentation
The official documentation will be available soon at http://www.marketcloud.it/documentation

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
