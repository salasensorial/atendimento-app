# Usar uma imagem base do PHP
FROM php:8.1-fpm

# Instalar dependências do sistema
RUN apt-get update && apt-get upgrade -y \
    && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    locales \
    zip \
    git \
    curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql zip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Definir diretório de trabalho
WORKDIR /var/www

# Copiar os arquivos do projeto para o container
COPY . .

# Limpar o cache do Composer
RUN composer clear-cache

# Instalar dependências do Laravel
RUN composer install --no-scripts --no-autoloader --verbose

# Definir permissões
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage

# Expor a porta
EXPOSE 80

# Iniciar o servidor
CMD ["php-fpm"]
