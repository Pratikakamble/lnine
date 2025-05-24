FROM gitpod/workspace-full:latest

# Install PHP extensions and MongoDB
RUN sudo apt-get update && \
    sudo apt-get install -y php-mongodb && \
    sudo pecl install mongodb && \
    echo "extension=mongodb.so" | sudo tee -a /etc/php/8.1/cli/php.ini

# Optional: Install MongoDB tools (not the server)
RUN sudo apt-get install -y mongodb-clients
