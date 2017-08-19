# myblog
A template of personal blog website based on ci framework for php.

## requirements
* LAMP environment (linux, apache2, mysql, php)

## installation
* cd /var/www/html
* git clone "https://github.com/zqzqz/myblog.git"
* setup basic configurations
	* /index.php set the route of directory 'system' and 'application'.
	* /application/config/database.php   set the database option.
	* /application/config/conf.php   set 'base_url' as the url of your website.
* create your database and necessary tables
	* refer to /application/models
* sudo /etc/init.d/apache2 restart  //to start your server

## other announcement
The css/js part is unfinished. The repo is just for studying.
