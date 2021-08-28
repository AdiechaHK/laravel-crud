# Laravel CRUD

This is just a crud operation in laravel as backend and mysql as database.

### Pre-requisite
* php (I have used 7.4)
* composer
* node (I've used 12)
* npm
* mysql server / docker

### start database server using docker
```
docker run --name docker-mysql-tmp -v /dockermysqldata:/var/lib/mysql -p 3306:3306/tcp -c 900 -e MYSQL_ALLOW_EMPTY_PASSWORD=yes -d mysql:5.7.9
```

This will start you mongo server in detached mode, and to get it's IP address for connection you can run the follwing command

```
docker inspect mongoserver | grep IPAddress
```
This will give you ip address to be set in environment variable to set it up for local connect. 

### Steps to run the project.

**Clone reppo**
```
git clone git@github.com:AdiechaHK/laravel-crud.git
```

**Install dependancies**
```
cd laravel-crud # navigate to project folder
composer install # Install laravel dependancies
npm install # install node dependancies
```

**Configure `.env` file.**
```
cp .env.example .env # to copy the .env file
```
Now you need to modify `.env` file as needed.
Mostly you need to update database configuration, as there is nothing else we used (in terms of external service)


**Migrate database**
```
php artisan migrate
```

**Start node server**
```
npm run dev # to build frontend 
php artisan serve # to start server
```

Now you can visit [http://localhost:8000](http://localhost:8000) see the running project.

### Todos

Due to less time, I could not achive the following.
* Testcases
* Dockerize app