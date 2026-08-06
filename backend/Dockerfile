FROM webdevops/php-nginx:8.4-alpine

ENV WEB_DOCUMENT_ROOT=/app/public
ENV APP_ENV=production
ENV APP_DEBUG=false
ENV LOG_CHANNEL=stderr

WORKDIR /app
COPY . .

# Runs automatically every time the container starts:
# installs dependencies, caches config/routes, runs migrations.
COPY scripts/00-laravel-deploy.sh /opt/docker/provision/entrypoint.d/20-laravel-deploy.sh
RUN chmod +x /opt/docker/provision/entrypoint.d/20-laravel-deploy.sh
