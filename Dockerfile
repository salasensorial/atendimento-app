# Use a imagem base do PHP
FROM php:8.2-fpm-alpine

# Defina o diretório de trabalho dentro do container
WORKDIR /var/www/html

# Instale dependências do sistema necessárias para Laravel
RUN apk --no-cache add git curl \
    libpng-dev \
    libjpeg-turbo-dev \
    libwebp-dev \
    libxpm-dev \
    freetype-dev \
    libxml2-dev \
    zip \
    libzip-dev \
    unzip \
    bash \
    postgresql-dev \
    oniguruma-dev

# Instale extensões PHP necessárias
RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    pdo_pgsql \
    mbstring \
    zip \
    exif \
    pcntl \
    bcmath \
    gd

# Instale o Composer globalmente
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copie os arquivos do projeto para o container
COPY . .

# Dê as permissões adequadas
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/bootstrap/cache

# Instale as dependências do Laravel
RUN composer install --optimize-autoloader --no-dev --no-interaction --no-progress

# Copie o arquivo de script de inicialização
COPY docker-entrypoint.sh /usr/local/bin/

# Dê permissão de execução ao script
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Exponha a porta 9000 para comunicação com o Nginx
EXPOSE 9000

# Use o script como entrypoint
ENTRYPOINT ["docker-entrypoint.sh"]
