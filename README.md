NelmioApiDocBundle 4.0 with Symfony 5.2 private properties exposure
===================================================================

How to reproduce:
-----------------

* Clone project: fresh Symfony 5.2 install + composer require nelmio/api-doc-bundle + sample DTO and Controller

* Install
```sh
composer install -o
cd public
php -S 127.0.0.1:9002 index.php 
```

* Open http://127.0.0.1:9002/ to see actual response:
```json
{"publicProperty": "publicValue"}
```

* Open http://127.0.0.1:9002/api/doc and see private properties in ResponseDTO
```
ResponseDTO {
    publicProperty    string
    privateProperty   string
}
```

* Expected response (that's how it works in Symfony <=5.1 or NelmioApiDocBundle <3.7)
```
ResponseDTO {
    publicProperty    string
}
```

Issue related to these PRs
--------------------------

* https://github.com/symfony/symfony/pull/37040/files
* https://github.com/nelmio/NelmioApiDocBundle/pull/1665/files
