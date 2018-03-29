<?php

// site cbhsq8 - local environment.
$aliases['d8_sandbox.local'] = array(
    'root' => '/var/www/docroot',
    // docksal_hostname.
    'uri' => 'd8_sandbox.docksal',
    'path-aliases' => array(
      '%dump-dir' => '/var/www/database_dumps/',
      '%files' => '/var/www/docroot/sites/default/files'
    ),
);
