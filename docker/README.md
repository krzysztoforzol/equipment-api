# Docker configuration for Equipment API

Installation short
------------

1.  Execute:
    ```shell script
    cd docker
    make install
    make up
    ```
1.  Add to `/etc/hosts`:
    ```shell script
    172.30.0.1 <NAME>
    ```
    where `<NAME>` is `PROJECT_HOST` from `.env`.

Installation
------------

1.  Copy docker `.env.dist`:
    ```
    cp .env.dist .env
    ```

1.  Create docker network if not exists:
    ```
    docker network create equipment --subnet=172.30.0.0/16 --gateway=172.30.0.1
    ```

1.  Build containers:
    ```bash
    docker-compose build --pull
    ```

1.  Start containers:
    ```bash
    docker-compose up -d
    ```
Shell
------------

Enter shell in project (for loading fixtures and clearing cache)
```
docker exec -it equipment-php bash
```