# Use uma imagem base do PHP que suporta PHP 8.2
FROM php:8.2-fpm

# Defina o diretório de trabalho
WORKDIR /var/www

# Instale as dependências do sistema
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libicu-dev \
    libgmp-dev \
    zlib1g-dev \
    unzip \
    git \
    && rm -rf /var/lib/apt/lists/*

# Instale as extensões do PHP
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install intl \
    && docker-php-ext-install zip \
    && docker-php-ext-install bcmath \
    && docker-php-ext-install gmp

# Instale o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Crie um usuário não-root
RUN useradd -ms /bin/bash appuser
USER appuser

# Copie o código da aplicação
COPY --chown=appuser:appuser . /var/www

# Instale as dependências do Laravel
RUN composer install --no-dev --optimize-autoloader

# Copie o script customizado de inicialização
COPY --chown=appuser:appuser entrypoint.sh /usr/local/bin/entrypoint.sh
RUN chmod +x /usr/local/bin/entrypoint.sh

# Exponha a porta 9000
EXPOSE 9000

# Use o script customizado de inicialização
ENTRYPOINT ["entrypoint.sh"]

# Inicie o servidor PHP-FPM
CMD ["php-fpm"]
