# marketcloud-php
Marketcloud API official PHP client library

## Installation with Composer
```
composer require marketcloud/marketcloud-php
composer install
```
Then you can use the Composer's autoload
```php
require_once('vendor/autoload.php');
```
## Manual installation
You can download the latest release from GitHub and then include the init.php file
```php
require_once('/path/to/marketcloud-php/init.php');
```
## Documentation
The official documentation can be found at http://www.marketcloud.it/documentation

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
$response = Marketcloud\Products::get();

echo json_encode( (array)$response->body )
```
