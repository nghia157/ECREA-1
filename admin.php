<?php
/**
 * Created by PhpStorm.
 * User: NGHIA DV
 * Date: 11/26/2017
 * Time: 9:51 PM
 */

// SYSTEM_PATH
define('PATH_SYSTEM', __DIR__ .'/system');
define('PATH_APPLICATION', __DIR__ . '/admin');

// CONFIG PATH
require (PATH_SYSTEM . '/config/config.php');

// Open file FT_Common.php has FT_Load() method to run system
include_once PATH_SYSTEM . '/core/FT_Common.php';

// System Program
FT_load();



