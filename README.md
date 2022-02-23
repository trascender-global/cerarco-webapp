Instalar [docker](https://desktop.docker.com/win/stable/Docker%20Desktop%20Installer.exe "docker")

Hacer una copia del archivo .env.example y llamarla .env


    docker-compose build
    docker-compose up -d
    docker-compose exec app composer install
    docker-compose exec app php artisan migrate
    docker-compose exec app php artisan db:seed

El proyecto debe quedar en http://localhost:8089/