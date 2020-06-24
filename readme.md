How to Use it


1 composer install
2 copy .env.example to .env if you are using window and for linux and mac use cp .env.example .env
3 In env file config it with your database
4 run command php artisan key:gen
5 run php artisan migrate --seed to migrate your database and also seed the data to database
6 Use the following credentials
  'name' => 'HR Manager',
  'email' => 'email@gmail.com',
  'password' => 123456,