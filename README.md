# Equipment API

## Table of Contents   

- [Getting started (docker)](#getting-started)
- [Install project (short)](#install-project-short)
- [Install project](#install-project)
- [Project resources](#project-resources)

---
## Getting started (docker)

<a name="getting-started" />

All about installing a docker environment can be find in /docker/README.md

---

## Install project (short)

<a name="install-project-short" />

1.  Execute (in website directory):
    ```shell script
    $ ./install_project.sh

---

## Install project

<a name="install-project" />

1.  Execute (in website directory):
    ```shell script
    $ php composer.phar install
1.  ```shell script
    $ php artisan migrate
1.  ```shell script
    $ php artisan db:seed --force
---

## Project resources

<a name="project-resources" />

###List of all endpoints:

1.  List all bags:
    ```
    HTTP GET /api/v1/bags
    ```
1.  Get a specific bag:
    ```
    HTTP GET /api/v1/bags/{id}
    ```
1.  List all items:
    ```
    HTTP GET /api/v1/items
    ```
1.  List items by type:
    ```
    HTTP GET /api/v1/items?type=CHEST
    HTTP GET /api/v1/items?type=RUNE
    HTTP GET /api/v1/items?type=AWARD
    ```
1.  Buy item:
    ```
    HTTP POST /api/v1/buy?bag_id={id}&item_id={id}
    ```    
---

