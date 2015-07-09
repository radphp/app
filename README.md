# RadPHP application skeleton
A skeleton for creating applications based on [RadPHP framework](https://github.com/Radly/radphp).


## Installation

### With [Vagrant](http://docs.vagrantup.com/v2/installation/) and [Docker](https://docs.docker.com/installation/) (Recommended):
1. First make sure you have [Vagrant](http://docs.vagrantup.com/v2/installation/) and [Docker](https://docs.docker.com/installation/)
2. Execute `git pull git@github.com:Radly/radphp-app.git [app-name]`
3. Change directory to `[app-name]`
3. Make sure you don't have web server running ([If you need help!](http://unix.stackexchange.com/a/139019/7099))
4. Just run `vagrant up`
5. Go to you container with `vagrant ssh`
6. Change directory to you virtual gost root directory with `cd /srv/www`
7. Execute `composer update`
8. Then open http://127.0.0.1/ in your browser

### With your own installation of web server and PHP:
1. First make sure you have [Composer](http://getcomposer.org/doc/00-intro.m)
2. Run `composer create-project -s dev --prefer-dist radly/radphp-app [app_name]`
3. Put `[app_name]` directory somewhere in your web root directory
4. Create a virtual host config file in your web server and point it's root directory to `web` directory of `[app_name]`
5. Add your defined SERVERNAME in front of 127.0.0.1 line in your /etc/hosts
6. Then open http://SERVERNAME/ in your browser
