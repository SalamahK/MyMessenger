# My Messenger
My Messenger is an emailing system emulator -- a basic chat system betwwen two or more users. Users can log in after registering , to check their inox, send new messages and reply existing received messages. Messages are displayed with the sender's username and email address. Read receipts are available, messages can be deleted from user's inbox and recovered after deletion.

## Features

Basic features of My Messenger include:

* Authentication:  This enables parties to register their details and login without much hassle. 
* Inbox/Chatbox: All sent and received messages will be stored and viewed here. Here, users can and will be able to communicate with each other.
* Deleted messages:  This shows all messages that had been deleted by the user within a time frame.



## Getting Started
These instructions will get you a copy of the project running up on your local machine for development and testing purposes.

## Prerequisites
The following must be installed on your computer( with Ubuntu OS or Linux Emulator running ) for this project to run properly

* Apache
* PHP v7.3
* MySQL
* Laravel v8.x



## Installations 
Make sure your Ubuntu server is having the latest packages by running the following commands.
```
$ sudo apt update  # this will prompt a password.
$ sudo apt upgrade
``` 


### Install Apache  
```
$ sudo apt install apache2
$ sudo ufw allow 'Apache'
```
Check your web server
```
$ sudo systemctl status apache2 # This should show "Active: active (running)..." in the output
``` 


When you have your server’s IP address, enter it into your browser’s address bar:
```
http://your_server_ip
```
### Install MySQL
```
$ sudo apt install mysql-server
$ sudo mysql_secure_installation
```
### Install PHP 

```
$ sudo apt install php7.3
```

### Download the Laravel installer using Composer:

```
$ composer global require laravel/installer
```

## Deployment
The following steps show how to deploy this project on a live system:

1. Sudo account users have already been created which should be used to access the test server

2. ssh to the server. E.g. ssh username@server-ip
	This would prompt a password

3. Navigate to the www directory 
	```
	$ cd /var/www
	```

	Create a directory using the mkdir command:
```
	$ mkdir {your_name(preferably CamelCase)}
	
	$ mkdir {your_project_name}
```
		
4. Navigate to your project directory

	```
	$ cd your_project_directory
	```
	
5. Effect a git clone of your repo in the directory.

	- Log in to your github account (via browser); open your project source code
	
	- The command with the url pattern appears thus : 
	
		```
		$ git clone [protocol]/[git domain]/[your git username/team name]/[repository name].git
		```
		
		
	* Run the git clone command -->
	
		```
		$ git clone [protocol]/[git domain]/[your git username/team name]/[repository name].git
		```
		
		
6. View all directories that have been created using ->

	```
	$ ls  #(ls -a: to view all hidden directories/files)
	```
	

7. Copy your .env.example file into a .env file using the command -->

	```
	$ cp .env.example .env
	```
	
	
8. Follow the procedures required to install a standard laravel project


* Run 
		```
		$ composer install 
		```
	(If an error occurs, jump to STEP E)
	
	

* MySql is installed on the server. Create your database and database users required for the application. -->
		
```
		mysql> CREATE DATABASE;
		mysql> SHOW DATABASES;  # to check the databases.
		mysql> exit;  # to exit the MySQL console
```
		
	
	
 * Update your db configuration in your .env file-->
		
```
		dbname = name_of_database_you_created
		db-user = your_database_username
		db-pass = your_database_password
```
		
* Generate new keys using -->
	
```
		$ php artisan key:generate
		
```
		
		
* Migrate your tables using -->
	
```
		$ php artisan migrate
```
		
9. Apache is already running on the server. Create and install a new virtual host for your application. The following URL could assist in your setup process as highlighted below:
	
```
	https://www.techomoro.com/how-to-run-a-php-application-on-ubuntu-18-04-2-lts/
	http://www.allaboutlinux.eu/how-to-run-php-on-ubuntu/
```
	
10. Once all is configured, it is advisable to restart the apache2 service just to confirm the new virtual host configuration takes effect


11. Your application should be accessible via the IP-address/app-name on the web depending on how it was configured


##### STEP E:
Errors from running composer install are usually as a result of an older version of the composer.

Solution: install and update properties

* First remove the composer using -->
	```
	$ sudo apt-get remove composer
	```
	
* Get composer setup -->
	```
	$ curl -sS https://getcomposer.org/installer -o composer-setup.php
	```
	
* Run the following commands -->

```
	$ sudo apt-get php-mbstring git unzip
	$ cd ~
	$ sudo php composer.setup.php --install-dir=/usr/local/bin --filename=composer
	$ sudo apt-get install php7.3-mbstring php7.3-common
	$ sudo apt-get install php7.3-xml
```

###### Go back to step 9
 
## Built With
* PHP
* Laravel
* MySQL

## Authors
* Khadijah Abiola
