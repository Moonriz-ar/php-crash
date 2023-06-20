start:
	php -S localhost:8080

mysql:
	docker run  --name mysql -p 3306:3306 -e MYSQL_ROOT_PASSWORD=password -d mysql
createdb:
	docker exec -it mysql mysql -u root -ppassword -e "CREATE DATABASE notes;"
dropdb:
	docker exec -it mysql mysql -u root -ppassword -e "DROP DATABASE notes;"
accessdb:
	docker exec -it mysql mysql -u root -ppassword

.PHONY: start mysql createdb dropdb accessdb