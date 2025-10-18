# Usa imagem oficial do PHP com Composer
FROM php:8.2-cli

# Instala dependências do sistema e extensões PHP do Laravel (PostgreSQL incluso)
RUN apt-get update && apt-get install -y \
    unzip zip git curl libpng-dev libjpeg-dev libfreetype6-dev libpq-dev && \
    docker-php-ext-install pdo pdo_pgsql gd

# Instala o Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Define o diretório de trabalho
WORKDIR /var/www/html

# Copia arquivos do projeto
COPY . .

# Instala dependências do Laravel
RUN composer install --no-dev --optimize-autoloader

# Gera APP_KEY automaticamente se não existir
RUN php artisan key:generate --force || true

# Ajusta permissões
RUN chmod -R 775 storage bootstrap/cache

# Limpa cache de configuração, rota e view se .env existir
RUN if [ -f .env ]; then php artisan config:clear; fi
RUN if [ -f .env ]; then php artisan route:clear; fi
RUN if [ -f .env ]; then php artisan view:clear; fi

# Expõe a porta 8000
EXPOSE 8000

# CMD final: roda migrations e depois inicia o servidor Laravel
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=8000
