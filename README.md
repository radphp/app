# RadPHP application skeleton
A skeleton for creating applications based on [RadPHP framework](https://github.com/Radly/radphp).

## Requirements

1. Web Server (Nginx/Apache/...) (pre-installed when running with [method #2](#with-vagrant-and-docker))
2. PHP >= 5.5.21 (pre-installed when running with [method #2](#with-vagrant-and-docker))
3. [Composer](http://getcomposer.org/doc/00-intro.m)

## Installation

1. Run `php composer.phar create-project --prefer-dist radly/radphp-app [app_name]`.
2. Or run `git pull git@github.com:Radly/radphp-app.git [app-name]`

If Composer is installed globally, run
```bash
composer create-project --prefer-dist radly/radphp-app [app_name]
```

## Running

### With your own installation of web server and PHP:
1. Put `radphp-app` directory somewhere in your web root directory
2. Create a virtual host config file in your web server and point it's root directory to `web` directory of `radphp-app`
3. Add your defined server name in front of 127.0.0.1 line in your /etc/hosts
4. Then open http://SERVERNAME/ in your browser

### With [Vagrant](http://docs.vagrantup.com/v2/installation/) and [Docker](https://docs.docker.com/installation/):
1. Make sure you don't have web server running
2. Just run `vagrant up`
3. Then open http://127.0.0.1/ in your browser
