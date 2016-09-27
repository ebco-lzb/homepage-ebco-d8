<?php
$config['system.site']['name'] = 'Drupal 8 DEVELOPMENT';
$config['system.logging']['error_level'] = 'all';               // hide|some|all|verbose
$config['system.performance']['cache']['page']['max_age'] = 0;  // Time in seconds, 0 = no caching
$config['dblog.settings']['row_limit'] = 1000;                  // Max. entries in log, 0 = all entries
$config['system.performance']['css']['preprocess'] = true;      // true|false
$config['system.performance']['js']['preprocess'] = true;       // true|false
$config['system.performance']['css']['gzip'] = true;            // true|false
$config['system.performance']['js']['gzip'] = true;             // true|false
$config['system.performance']['response']['gzip'] = true;       // true|false
$config['system.cron']['threshold']['autorun'] = 0;             // Time in seconds, 0 = never run
$settings['file_public_path'] = 'sites/default/files';
$settings['file_private_path'] = '';
$config['system.file']['path']['temporary'] = 'sites/default/tmp';
$config['system.file']['temporary_maximum_age'] = 21600;        // Time in seconds, 0 = never delete
?>
