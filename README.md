## Steps for the trial

- Create an .env file with this config:

<p>APP_NAME=Laravel</p>
-APP_ENV=local
-APP_KEY=base64:DhJaejMLwXIAODCC+ratakhaakvXUAzDjA6tZ++V/GU=
-APP_DEBUG=true
-APP_URL=http://localhost

-LOG_CHANNEL=stack
-LOG_DEPRECATIONS_CHANNEL=null
-LOG_LEVEL=debug

-DB_CONNECTION=mysql
-DB_HOST=localhost
-DB_PORT=3306
-DB_DATABASE=trial
-DB_USERNAME=root
-DB_PASSWORD=

-BROADCAST_DRIVER=log
-CACHE_DRIVER=file
-FILESYSTEM_DRIVER=local
-QUEUE_CONNECTION=sync
-SESSION_DRIVER=file
-SESSION_LIFETIME=120

-MEMCACHED_HOST=127.0.0.1

-REDIS_HOST=127.0.0.1
-REDIS_PASSWORD=null
-REDIS_PORT=6379


-PUSHER_APP_ID=
-PUSHER_APP_KEY=
-PUSHER_APP_SECRET=
-PUSHER_APP_CLUSTER=mt1

-MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
-MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"


- Then just run the migrations for the creation of the movies table and seed it.
- After is just testing it , if you want more records you can "php artisan db:seed" 2 or 3 times so it can give more dummy data.
