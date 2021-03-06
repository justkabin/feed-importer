<?php
/*
Plugin Name: Feed importer
Description: Import post from RSS or Atom feed.
Plugin URI: https://github.com/bfolliot/feed-importer
Version: 0.6.2
Author: Bryan Folliot
Author URI: https://bryanfolliot.fr
License: BSD-3-Clause
*/

if (!class_exists('BFolliot\FeedImporter\Importer')) {
    if (file_exists(__DIR__ . '/vendor/autoload.php')) {
        include __DIR__ . '/vendor/autoload.php';
    } else {
        $message = _e('Unable to load Autoloader. Run `php composer.phar install`.');
        if (isset($_GET['action']) && $_GET['action'] == 'error_scrape') {
            echo '<strong>' . $message . '</strong>';
            exit;
        } else {
            trigger_error($message, E_USER_ERROR);
        }
    }
}
