## Container Installation

> Docker user? No problem - Substitute `podman-compose` with `docker-compose`

#### 1. Clone project

```shell
git clone git@github.com/Opmantek/open-audit.git open-audit
```

#### 2. Change directory

> All further steps are to be carried out within the `open-audit` directory

```shell
cd open-audit
```

#### 3. Ensure local folder permissions are correct

```shell
chmod 0777 ./app/Attachments
chmod 0777 ./other/scripts
chmod 0777 ./public/custom_images
chmod 0777 ./writable
find ./writable -type d -exec chmod 0777 {} \;
```

#### 4. Create custom PHP INI file (optional)

```shell
cat > ./.compose/web/php/ini/development.ini<< EOF
# Set reporting level
error_reporting=E_ALL & ~E_DEPRECATED

# Enable Xdebug
zend_extension=xdebug.so
xdebug.mode=debug,coverage
xdebug.client_host=host.containers.internal
xdebug.client_port=9003
xdebug.idekey=PHPSTORM
EOF
```

#### 5. Build the containers

```shell
podman-compose build
```

#### 6. Bring up the containers

```shell
podman-compose up -d
```

#### 7. Install composer dependencies

```shell
podman exec -it open-audit-community-web sh -c "composer install"
```

#### 8. Setup database

```shell
podman exec -i open-audit-community-database mariadb -u root -popenauditrootuserpassword openaudit < ./other/open-audit.sql
```

#### 9. Test running application

> Login: http://localhost:8087/index.php

#### 10. Bring down the containers

```shell
podman-compose down
```
