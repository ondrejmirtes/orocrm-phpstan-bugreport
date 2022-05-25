Requirements
---
* PHP 8.1, extensions listed at https://doc.oroinc.com/backend/setup/system-requirements/
* NodeJS >= 16
* Docker, docker-compose
* Symfony binary

Installation
---
Based on this guide: https://doc.oroinc.com/backend/setup/dev-environment/docker-and-symfony/
```
$ docker-compose up -d
$ composer install -o
$ symfony console oro:install -vvv --sample-data=y --application-url=https://127.0.0.1:8000 --user-name=admin --user-email=admin@example.com --user-firstname=John --user-lastname=Doe --user-password=admin --organization-name=Oro --timeout=0 --symlink --env=prod -n
$ symfony console c:c --env=dev
```

Bug reproduction
---
In `src/TestPhpstan.php` there is a minimal case that reproduces the issue.\
The class `\Oro\Bundle\ScopeBundle\Entity\Scope()` doesn't have a `setOrganization()` method.\
That method is defined in `var/cache/dev/oro_entities/Extend/Entity/classes.php` in an auto-generated class that gets aliased to `\Oro\Bundle\ScopeBundle\Entity\Scope()`\
You can see that phpstan 1.7.1 fails:
```
 ------ ------------------------------------------------------------------------------------- 
  Line   TestPhpstan.php                                                                      
 ------ ------------------------------------------------------------------------------------- 
  9      Call to an undefined method Oro\Bundle\ScopeBundle\Entity\Scope::setOrganization().  
 ------ ------------------------------------------------------------------------------------- 
```
while 1.6.8 works correctly:
```
 [OK] No errors     
```
