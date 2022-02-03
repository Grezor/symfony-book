```sh
// lancer le serveur
symfony server:start -d
```

```php
- composer install
- (npm install)
- create file **.env.local** 
- **DATABASE_URL=mysql://User:Password@127.0.0.1:3306/namedatabase?serverVersion=5.7**
- symfony console doctrine:database:create # create Database
- symfony console doctrine:migration:migrate # add tables
- symfony console doctrine:fixtures:load # fixtures
```