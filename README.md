# Application Dashboard to Show SQL/PHP/JS Skills

```
- PHP application should be based on MVC structure
- Have at least one abstract class and one interface
- Use namespaces
- PSR-4 standard (http://www.php-fig.org/psr/psr-4/)
- No PHP framework should be used
- Use Bootstrap as layout framework
- Use any JS library/framework if needed (e.g. JQuery, AngularJS)

Create a database structure
- Order - purchase date, country, device
- Order items - EAN, quantity, price
- Customer - first name, last name, email
- Customer has 1 to many connection with Order
- Order has 1 to many connection with Order items

Create a simple dashboard that shows statistics for
- Total number of orders
- Total number of revenue
- Total number of customers
- Statistics by default should be based on last month, with an option to change to any time period (to & from).
- Create 1 month timeframe chart with customers and orders (something like this - (high charts can be used)
```

### Demo: [http://boozt.godoshian.com]

### Environment
- PHP
  - Install PHP 7 and Update Apache [https://stackoverflow.com/questions/34873685/how-to-install-php-7-on-ec2-t2-micro-instance-running-amazon-linux-distro#answer-40581436]
- Composer
  - `sudo curl -sS https://getcomposer.org/installer | php`
  - `mv composer.phar /usr/local/bin/composer`
- Node & npm
  - `curl -o- https://raw.githubusercontent.com/creationix/nvm/v0.33.6/install.sh | bash`
  - `nvm install node`
  - `nvm use node`
  - `npm update -g npm`	

### Deployment
1. update database credentials in `config.php`
2. `composer install`
3. `composer dump-autoload -o`
4. `npm install`
5. `gulp`
