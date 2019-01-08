# E-Cell GD Goenka University

This repository contains the source code of the official GD Goenka University E-Cell website. The website may be reached through [ecellgdgu.org](https://ecellgdgu.org).

[![Telegram Chat](https://patrolavia.github.io/telegram-badge/chat.svg)](https://t.me/joinchat/KZMgcRCeXtux-MVuJ_gJ3A) [![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy)

![Frontpage Screenshot](https://i.imgur.com/9O6pYlj.png)

The website have been written using PHP for the server side. It uses HTML, JavaScript and CSS ([Bootstrap](https://getbootstrap.com) in some parts) for the frontend counterpart.

An SQL database is required for storing data. The website is hosted on [Heroku](https://heroku.com) platform which provides a [Postgres database](https://www.heroku.com/postgres), used internally using [PDO](http://php.net/manual/en/book.pdo.php).

The following environment variables must be set in order to run the website locally or at production:

| Variable Name | Description |
| --- | --- |
| DATABASE_URL | Fully qualified URL of the database connection inclusive of username, password, hostname, port number, database name. eg `postgres://user:passwd@postgres.host:5432/mydatabase` |
| EMAIL_CLOUD_FUNCTION_URL | HTTP URL of a service / cloud function / micro service which can send emails by POSTing JSON with necessary email contents. |

The database as aforementioned must mandatorily contain the tables cited in [schema.sql](./schema.sql).

The site uses an external micro service / cloud function to send email on behalf of the web application. The same is reachable at an URL, POSTing JSON to which sends an email. The json may be as follows.
```json
{
    "to": "contoso@example.com",
    "subject": "Subject Line for Email",
    "message": "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo rem repudiandae architecto accusantium ad veritatis consectetur quibusdam assumenda, qui officia soluta!"
}
```
Refer to [emailsendingcloudfunction.py](./emailsendingcloudfunction.py) for more information.

Since the website is deployed to Heroku, one can run the website locally by supplying the environmental variables and using 
```bash
heroku local web
```

Please refer to [Heroku Dev Center](https://devcenter.heroku.com/) articles for related information.
- https://devcenter.heroku.com/categories/php-support
- https://devcenter.heroku.com/categories/data-management
- https://devcenter.heroku.com/articles/heroku-local
- https://devcenter.heroku.com/categories/command-line
