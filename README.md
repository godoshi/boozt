# Application Dashboard to Show SQL/PHP/JS Skills

## [http://boozt.godoshian.com]

### Requirements
`sudo yum -y update`
Install PHP 7 and Update Apache [https://stackoverflow.com/questions/34873685/how-to-install-php-7-on-ec2-t2-micro-instance-running-amazon-linux-distro#answer-40581436]
`sudo curl -sS https://getcomposer.org/installer | php`
`mv composer.phar /usr/local/bin/composer`
`curl -o- https://raw.githubusercontent.com/creationix/nvm/v0.33.6/install.sh | bash`
`nvm install node`
`nvm use node`
`npm update -g npm`

### Deployment
1. update config.php
2. `composer install`
3. `composer dump-autoload -o`
4. `npm install`

### TODO
- [ ] Create an abstract class, maybe for a Database connection singleton?
- [ ] Visualize data from database using Highcharts
- [ ] Figure out how to get data into my views from controllers (can't define $data?)
- [ ] Use .env for environment config
- [ ] Use Webpack or Rollup
