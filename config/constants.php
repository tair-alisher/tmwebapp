<?php

return [
  'http' => isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https://' : 'http://',

  'server' => $_SERVER['SERVER_NAME'],

  'port' => $_SERVER['SERVER_PORT'],
];