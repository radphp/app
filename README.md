# RadPHP application skeleton
A skeleton for creating applications based on [RadPHP framework](https://github.com/radphp/radphp).


## Installation

### With [Docker](https://docs.docker.com/installation/) (Recommended):
1. First make sure you have [Docker](https://docs.docker.com/engine/installation/) and [Docker Compose](https://docs.docker.com/compose/install/)
2. Run `composer create-project --ignore-platform-reqs -s dev --prefer-dist radphp/app [app_name]`
3. Change directory to `[app-name]`
4. Run `docker-compose up -d` to run web container
5. Go to you container with `docker-compose exec --user=radphp web ash`
6. Execute `composer update`
7. Then open http://127.0.0.1/ in your browser

### With your own installation of web server and PHP:
1. First make sure you have [Composer](http://getcomposer.org/doc/00-intro.m)
2. Run `composer create-project -s dev --prefer-dist radphp/radphp-app [app_name]`
3. Put `[app_name]` directory somewhere in your web root directory
4. Create a virtual host config file in your web server and point it's root directory to `web` directory of `[app_name]`
5. Add your defined SERVERNAME in front of 127.0.0.1 line in your /etc/hosts
6. Then open http://SERVERNAME/ in your browser
