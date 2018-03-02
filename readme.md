# Members CRUD for Laravel 5.6

Simple Laravel CRUD operation for manage users / members with MySQL

## Installation

Clone the repo
```
git clone https://github.com/fardhanardhi/members.git
```

Move to the newly created folder and install all dependencies:
```
cd members
composer install
```

Create a new database, for example with phpMyAdmin. Then open the .env.example file, edit it to match your database name, username and password and save it as .env file. 


Check your MySQL Version, if MySQL version < v5.7.7 follow [this instructions](https://gist.github.com/fardhanardhi/75294a0830d9601c20057a9463b5936d#file-laravel-specified-key-was-too-long-error-txt)



Once done, build tables with the following command:
```
php artisan migrate
```

Now fill the tables:
```
php artisan db:seed
```

Finally, generate the application key 
```
php artisan key:generate
```

Open your favorite browser and visit the newly created app.
```
php artisan serve
```

## Features
1. Create a new member
2. Show a member
3. Edit a member

4. Delete a member

## Screenshots

![homepage](https://github.com/fardhanardhi/members/blob/master/public/welcome-page.png "Homepage")

![table](https://github.com/fardhanardhi/members/blob/master/public/members-page.png "table")

## Licence

Please refer to the [Laravel licence](https://opensource.org/licenses/MIT)
