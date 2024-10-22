# Usar uma imagem base do PHP com as extensões mais comuns já instaladas
FROM php:8.1-fpm

# Instalar dependências do sistema e extensões PHP necessárias
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Instalar o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Definir diretório de trabalho
WORKDIR /var/www

# Copiar o projeto Laravel para dentro do container
COPY . .

# Instalar dependências do Laravel via Composer
RUN composer install --optimize-autoloader --no-dev

# Definir permissões corretas para o diretório de storage e cache
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage \
    && chmod -R 755 /var/www/bootstrap/cache

# Expor a porta 9000 (padrão do PHP-FPM)
EXPOSE 9000

# Comando para iniciar o PHP-FPM
CMD ["php-fpm"]
