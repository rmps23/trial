## Steps for the trial

- Create an .env file with this config:

<p>APP_NAME=Laravel</p>
<p>APP_ENV=local</p>
<p>APP_KEY=base64:DhJaejMLwXIAODCC+ratakhaakvXUAzDjA6tZ++V/GU=</p>
<p>APP_DEBUG=true</p>
<p>APP_URL=http://localhost</p>

<p>LOG_CHANNEL=stack</p>
<p>LOG_DEPRECATIONS_CHANNEL=null</p>
<p>LOG_LEVEL=debug</p>

<p>DB_CONNECTION=mysql</p>
<p>DB_HOST=localhost</p>
<p>DB_PORT=3306</p>
<p>DB_DATABASE=trial</p>
<p>DB_USERNAME=root</p>
<p>DB_PASSWORD=</p>

<p>BROADCAST_DRIVER=log</p>
<p>CACHE_DRIVER=file</p>
<p>FILESYSTEM_DRIVER=local</p>
<p>QUEUE_CONNECTION=sync</p>
<p>SESSION_DRIVER=file</p>
<p>SESSION_LIFETIME=120</p>

<p>MEMCACHED_HOST=127.0.0.1</p>

<p>REDIS_HOST=127.0.0.1</p>
<p>REDIS_PASSWORD=null</p>
<p>REDIS_PORT=6379</p>


<p>PUSHER_APP_ID=</p>
<p>PUSHER_APP_KEY=</p>
<p>PUSHER_APP_SECRET=</p>
<p>PUSHER_APP_CLUSTER=mt1</p>

<p>MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"</p>
<p>MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"</p>


- Then just run the migrations for the creation of the movies table and seed it.
- After is just testing it , if you want more records you can "php artisan db:seed" 2 or 3 times so it can give more dummy data.
