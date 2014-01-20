<?php

define('DRUPAL_ROOT', realpath ('../../../..'));
require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_DATABASE);
//drupal_bootstrap(DRUPAL_BOOTSTRAP_SESSION);


$query = db_select('users', 'u')
  ->condition('u.uid', 0, '<>')
  ->fields('u', array('name'));
$result = $query->execute()->fetchAll(PDO::FETCH_ASSOC);
print_r($result);
