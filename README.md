# User Data Sync Application
This project is an application that synchronizes user data from an external API and stores it in a database.

## Description 
This application utilizes an API to fetch a list of users, their addresses, and companies. The obtained data is synchronized with the database and displayed on a web page for viewing.



## Installation and Setup
### Step 1
Clone this repository to your local machine:
```console
git clone https://github.com/yourusername/user-data-sync.git
```
### Step 2
Install Laravel dependencies:

```console
cd user-data-sync
composer install
```

### Step 3
Create a copy of the `.env.example` file and name it `.env`. 
Change `APP_NAME` in `.env`.
Configure your database access and other configurations.

### Step 4
Build and start the Docker containers:
```console
docker-compose up --build
```

### Step 5
Access the PHP container (Use {APP_NAME} from `.env` file):
```console
 docker exec -i -t "php_${APP_NAME}" /bin/bash
```

### Step 6
Generate a key using the command:
```console
php artisan key:generate
```

### Step 7
Run migrations to create the necessary database tables:
```console
php artisan migrate
```

### Step 8
Open a web browser and navigate to http://localhost:8000 to view the list of users and their data.

## Troubleshooting
In case of encountering errors, you can try the following commands to clear cache and configuration:

```console
php artisan cache:clear
php artisan config:clear
php artisan view:clear

```
## Technologies Used
- Laravel
- PHP
- MySQL
- Docker

## Author
- Artem Pleskachov
