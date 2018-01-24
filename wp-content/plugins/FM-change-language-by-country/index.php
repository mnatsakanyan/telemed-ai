<?php /*
Plugin Name: FM Change Language By Country
Plugin URI: fidem.am
Author: Fidem.am
Author URI: fidem.am
*/

require_once __DIR__ . '/MaxMind-DB-Reader-php-master/autoload.php';

use MaxMind\Db\Reader;


add_action('plugins_loaded', 'load_fm_plugin_for_all');

function load_fm_plugin_for_all()
{
    if (function_exists('is_admin') && !is_admin()) {

        $countries_filter = array('AM', 'UZ', 'TJ', 'RU', 'MD', 'KG', 'KZ', 'BY', 'AZ'); 

        $databaseFile = __DIR__ . '/geo_data/GeoLite2-Country.mmdb';
        if (is_file($databaseFile)) {
            $reader = new Reader($databaseFile);

            $cc_data = $reader->get($_SERVER['REMOTE_ADDR']);

            $reader->close();
            if (isset($cc_data['country']) && isset($cc_data['country']['iso_code'])) {

                if (!isset($_COOKIE['automatically_set']) && in_array($cc_data['country']['iso_code'], $countries_filter) && isset($_COOKIE['qtrans_front_language']) && $_COOKIE['qtrans_front_language'] != "ru") {
                    setcookie('automatically_set', 'true', strtotime("+1 day"),"/");
                    wp_redirect('/ru');
                    exit;
                } else if (!isset($_COOKIE['automatically_set']) && !in_array($cc_data['country']['iso_code'], $countries_filter) && isset($_COOKIE['qtrans_front_language']) && $_COOKIE['qtrans_front_language'] != "en") {
                    setcookie('automatically_set', 'true', strtotime("+1 day"));
                    wp_redirect('/en');
                    exit;
                }
            }
        }

    }
}