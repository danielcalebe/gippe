# Usa imagem oficial do PHP com Composer
FROM php:8.2-cli

# Instala dependências do sistema e extensões do Laravel
RUN apt-get update && apt-get install -y \
    unzip zip git curl libpng-dev libjpeg-dev libfreetype6-dev && \
    docker-php-ext-install pdo pdo_mysql gd

# Instala o Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Define o diretório de trabalho
WORKDIR /var/www/html

# Copia os arquivos do projeto
COPY . .

# Instala as dependências do Laravel
RUN composer install --no-dev --optimize-autoloader

# Gera a APP_KEY automaticamente se não existir
RUN php artisan key:generate --force || true

# Ajusta permissões
RUN chmod -R 775 storage bootstrap/cache

# Expõe a porta 8000
EXPOSE 8000

# Inicia o servidor Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
