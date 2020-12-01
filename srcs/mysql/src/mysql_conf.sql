CREATE DATABASE wordpress;
CREATE USER 'pmelinda'@'%' IDENTIFIED BY 'root';
GRANT ALL PRIVILEGES ON wordpress.* TO 'pmelinda'@'%';
FLUSH PRIVILEGES;