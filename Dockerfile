FROM php:8.1-cli

WORKDIR /app

COPY . /app

EXPOSE 80

CMD [ "php", "-S", "0.0.0.0:80", "index.php" ]
