# php-mvc
Practice to apply for Bright Cellars' Full Stack Internship

Written in MAMP on MacOS based off of http://requiremind.com/a-most-simple-php-mvc-beginners-tutorial/

## MySQL Database:

Create database named `php-mvc`

### Schema:

| Name | Type |
|------|-----|
| author | varchar(15) |
| content | varchar(25) |
| id | int(11) |

### SQL:

```
CREATE DATABASE php-mvc;

USE php-mvc;

CREATE TABLE posts(
  id INT PRIMARY KEY AUTO_INCREMENT,
  author varchar(15),
  content varchar(25)
);
```

