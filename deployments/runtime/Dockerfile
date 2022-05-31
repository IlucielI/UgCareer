FROM php:7.4-apache

# Define dependencies
ENV BUILD_PACKAGES="libpng-dev libwebp-dev libgmp-dev libjpeg62-turbo-dev libfreetype6-dev zlib1g-dev libzip-dev libpq-dev libicu-dev g++ libonig-dev"

# Install required app
RUN apt-get update \
  && apt-get install -y git unzip ${BUILD_PACKAGES}

# Install extensions
RUN docker-php-ext-configure gd --with-freetype --with-webp --with-jpeg \
	&& docker-php-ext-configure intl \
    && docker-php-ext-install pdo_pgsql mbstring opcache bcmath iconv exif zip gd pdo intl

# Enable mod_rewrite
RUN if command -v a2enmod >/dev/null 2>&1; then \
      a2enmod rewrite headers \
    ;fi

# Install nodejs
RUN curl -sL https://deb.nodesource.com/setup_12.x | bash
RUN apt-get install -y nodejs
RUN npm install -g yarn

# Set-up environment settings for composer
ENV COMPOSER_ALLOW_SUPERUSER=1 \
    PATH=$APP_PATH:$APP_PATH/vendor/bin:/root/.composer/vendor/bin:$PATH \
    PHP_USER_ID=33 \
    TERM=linux

# Get composer-setup file
RUN cd /tmp \
    && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer

# Copy virtual host file
COPY 000-default.conf /etc/apache2/sites-available/

# Copy fix permission script
COPY setup-permission.sh /usr/local/bin/setup-permission
RUN chmod +x /usr/local/bin/setup-permission

# Clean up
RUN apt-get remove --purge -y ${BUILD_PACKAGES} \
	&& rm -rf /var/lib/apt/lists/*

# Set workdir
WORKDIR /var/app
