#!/bin/bash
# Setup Symlinks
/bin/ln -s /srv /var/www/html/wp-content/themes/abunai
/bin/ln -s /srv/genesis /var/www/html/wp-content/themes/genesis
# Prepare WP CLI
WP='/srv/wp --allow-root'
cd /var/www/html
# Wait for a bit for the docker fs to catch up
sleep 2
# Do base
$WP core install --url=127.0.0.1:8080 --title=devbox --admin_user=admin --admin_password=admin --admin_email="root@local.nl"
$WP plugin install --activate wp-example-content


