Cause Pilot
=========================

1 Prerequisites
----------------
 - Install Docker
 - Make sure nothing is running on  ports 80
 - Make sure `make` is installed on your machine this should already be installed on Mac Os, and a lot of other *nix distros.


2 Getting Started
------------------

### A. Quickstart

To get stated quickly:
```sh
make init start 
```
This will build and start the containers.  NOTE: ensure that no other cli jobs/processes are running before running this command.


Run the docker-compose to launch containers
----------------------------------------------
Either `make start` or `docker-compose up -d`

This will launch all the containers need for running the application.

Getting started with Cause Pilot
-----------------------------------

You should be able to visit localhost:80

Node/Bower etc.
------------------------
Bower and npm run whenever the container run `make deploy` You can also run each one individually, see Makefile for more.

CSS
----------

For css Compilation we are using SASS (with scss) and Gulp. Just run: 
```sh 
make css
```

Cache and Permission Issues
-----------------------------

If you are getting errors about directories or permission issues, the following will recreate the app and log directories.
```sh
make clear-cache
```

Command Line
-------------
If you need to get to an internal container command line, to run other commands and such just:
```sh 
docker exec -it php-cli /bin/bash
```