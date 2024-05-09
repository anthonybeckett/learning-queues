# Learning Queues

Just a small repo to get a better understanding of queues in Laravel and using Horizon to manage Redis.

Uses Laravel Sail with a Redis container.

### Setup Notes

Pull package and run

```
./vendor/bin/sail up -d
```

XDebug

Guide to get XDebug running in PHP Storm

Set env variable
```
SAIL_XDEBUG_MODE=develop,debug
```

Rebuild the containers and start them up again
```
./vendor/bin/sail build --no-cache
```

In PHP Storm go to settings > PHP > CLI Interpreter.  
Create a new instance and point it to docker compose choosing the web container.  
Change the setting to connect to an existing connection and not start a new one each time.  

Next go into the PHP > Servers and create a new server.
```
server: 0.0.0.0
port: 80

Enable symlink mappings option
Map the project directory to /var/www/html on the docker container
```


