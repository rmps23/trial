## Steps for the trial

- Create a db in phpmyadmin with xampp and connect with 
- DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=trial
DB_USERNAME=root
DB_PASSWORD=

- Then just run the migrations for the creation of the movies table and seed it.
- After is just testing it , if you want more records you can "php artisan db:seed" 2 or 3 times so it can give more dummy data.
