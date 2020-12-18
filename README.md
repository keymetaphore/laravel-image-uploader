# This is an Imgur clone started since they began showing adverts on image upload
The project is not complete: 
- multiple image upload in a single batch is not supported yet
- No register option


## Adding a profile:
```
php artisan tinker
$user = new App\Models\User();
$user->name = "Name";
$user->password = Hash::make('PASSWORD');
$user->email = 'email@domain';
$user->save();
```

## Installation

- Create a database

- Execute:
```
git clone https://github.com/keymetaphore/laravel-image-uploader
composer install
cp .env.example .env
```
- Configure .env file with the correct database credentials
- Execute:
```
php artisan key:generate
php artisan migrate
```

# Warning
At this stage, this project is not ready for production use
