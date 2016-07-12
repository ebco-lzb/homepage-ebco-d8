#!/bin/bash

rm -rf /var/www/public_html/sites/default/settings.php
ln -s /var/www/config/dev.settings.php /var/www/public_html/sites/default/settings.php
