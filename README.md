# create_a_docker_lemp_https_evn
docker compose files to create a basic LEMP environment with https

# How to use
in the directory of file named docker-compose.yml, run
$ docker compose up -d --build

after the servers were started,
observing (waiting) the log of database for binding the port 3306.

then we can test them by typing

https://localhost/db_test.php

in the browser.
