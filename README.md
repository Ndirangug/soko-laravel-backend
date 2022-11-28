# Soko Laravel Backend

_Soko_ is the swahili word for 'market'. This repository hosts the backend for a for an ecommerce platform i'm building. It is a multivendor marketplace and the ecommerce module is part of a larger system that allows customers to discover interior design items, visualize them in a virtual 3d space and make a purchase. 
The frontend for the ecommerce app is a vue-storefront instance at([https://github.com/Ndirangug/soko-vue-storefront]([https://github.com/ndirangug/dandora-frontend](https://github.com/Ndirangug/soko-vue-storefront)))
  
The app persists data to a mariadb instance


## Run on localhost
### Prerequisites
- composer
- mysql

```bash
# install dependancie
$ composer install

# initial setup
$ php artisan migrate
$ php artisan db:seed

# start server
$ php artisan serve

# make a request to the server
$ curl localhost:8000/api/houses
```

