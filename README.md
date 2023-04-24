# Prerequisites of Docker setup

1. Make sure your operating system is supported by Docker.
2. Install Docker engine by following the official Docker documentation for your operating system.
3. Install Docker CLI.
4. Install Docker Compose by following the official Docker Compose documentation.
5. Familiarize yourself with Docker concepts by reading the official Docker documentation.

# Steps to setup application with docker

1. Run docker application in your mechine.
2. Open terminals from application directory 
3. Pull latest code from the repo 
4. Make sure stop all existing running containers on your docker 
5. Run `docker-compose up --build` command from terminals
6. From next time simply run `docker-compose up` command to start all container 
7. Run `docker-compose down` to stop/remove all containers 

# Here are some basic Docker commands:

1. docker-compose up --build (Re-create and UP the docker containers)
2. docker-compose up (starts all services defined in a Docker Compose file.)
3. docker-compose down - stops all services defined in a Docker Compose file and removes their containers.
4. docker-compose ps - lists all containers for services defined in a Docker Compose file.

