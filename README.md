# sym-mic-skeleton

This is a minimalistic symfony microservice project. 
includes:
1. dummy ApiController
2. phpunit 10
3. code coverage

excludes:
1. web
2. db


###setup project

1. change project name in .ddev
```
.ddev/comfig.yaml name: <sym-mic-some-name>
```

2. install composer packages
```
composer install
```

3. start ddev
```
ddev start
```

show links, ports and other settings
```
ddev desc
```


###Advanced

Any additional package can be installed via composer.
