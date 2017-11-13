FROM dockage/alpine-openrc:latest as radphp-base
MAINTAINER Mohammad Abdoli Rad <m.abdolirad@gmail.com>

ENV RADPHP_USER='radphp' \
    RADPHP_GROUP='radphp' \
    RADPHP_HOME='/var/lib/radphp' \
    RADPHP_ETC_DIR='/etc/radphp'

ENV RADPHP_INSTALL_DIR="$RADPHP_HOME/app" \
    RADPHP_RUNTIME_DIR="$RADPHP_ETC_DIR/runtime" \
    RADPHP_BUILDTIME_DIR="$RADPHP_ETC_DIR/buildtime" \
    RADPHP_DATA_DIR="$RADPHP_HOME/data" \
    RADPHP_LOG_DIR="/var/log/radphp"

RUN apk --no-cache --update add \
        git \
        nginx \
        openssl \
        php7-ctype \
        php7-curl \
        php7-dom \
        php7-fpm \
        php7-gd \
        php7-gettext \
        php7-iconv \
        php7-intl \
        php7-json \
        php7-mbstring \
        php7-mcrypt \
        php7-mysqli \
        php7-pdo_mysql \
        php7-pdo_pgsql \
        php7-pgsql \
        php7-phar \
        php7-session \
        php7-tokenizer \
        php7-xml \
        php7-xmlwriter \
        php7-zip \
        php7-zlib \
        shadow \
    && rc-update add php-fpm7 \
    && rc-update add nginx

ADD ./docker/assets ${RADPHP_ETC_DIR}
RUN ${RADPHP_BUILDTIME_DIR}/install \
    && rm -rf ${RADPHP_BUILDTIME_DIR}

VOLUME ["$RADPHP_DATA_DIR", "$RADPHP_LOG_DIR"]

EXPOSE 80


FROM radphp-base as radphp-app

ARG RADPHP_VERSION
ENV RADPHP_VERSION=${RADPHP_VERSION}

RUN su-exec ${RADPHP_USER} composer create-project --keep-vcs radphp/app ${RADPHP_INSTALL_DIR} ${RADPHP_VERSION}

WORKDIR ${RADPHP_INSTALL_DIR}