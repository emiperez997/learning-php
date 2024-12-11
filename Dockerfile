# Usar una imagen base con soporte PHP
FROM php:8.1-cli

# Copiar todos los archivos al directorio de trabajo en el contenedor
WORKDIR /var/www/html
COPY . .

# Exponer el puerto 80 para el servidor integrado de PHP
EXPOSE 80

# Comando para iniciar el servidor integrado de PHP
CMD ["php", "-S", "0.0.0.0:80", "-t", "."]