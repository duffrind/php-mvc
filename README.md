# php-mvc
Practice to apply for Bright Cellars' Full Stack Internship

Written in MAMP on MacOS based off of [A Most Simple PHP MVC Beginners Tutorial](http://requiremind.com/a-most-simple-php-mvc-beginners-tutorial/) by [Neil Rosenstech](https://github.com/Raindal).

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

## License

MIT License (MIT)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
