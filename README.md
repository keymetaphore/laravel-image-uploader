# This is an Imgur clone started since they began showing adverts on image upload
The project is not complete: 
- multiple image upload in a single batch is not supported yet
- API keys still have to be generated automatically
- No register option


## Adding a profile:
```
php artisan tinker
$user = new App\Models\User();
$user->name = "Name";
$user->password = Hash::make('PASSWORD');
$user->email = 'email@domain';
$user->api_key = 'random_set_of_characters_that_should_really_be_generated';
$user->save
```

## Installation

In your terminal:
```
git clone https://github.com/keymetaphore/laravel-image-uploader
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
```

# Warning
At this stage, this project is not ready for production use
