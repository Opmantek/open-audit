## Container Installation

> Docker user? No problem - Substitute `podman-compose` with `docker-compose`

#### 1. Change directory

> All further steps are to be carried out within the `open-audit/tests` directory

```shell
cd tests
```

#### 2. Bring up the containers

```shell
podman-compose up -d
```

#### 3. Execute tests

```shell
podman exec -it open-audit-community-test-web sh -c "composer test"
```

#### 4. Bring down the containers

```shell
podman-compose down
```
