<?php
/**
 * Created by PhpStorm.
 * User: NGHIA DV
 * Date: 11/26/2017
 * Time: 11:30 PM
 */
if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
/**
 * Method run program
 */
function FT_load()
{
    // get begin config
    $config = include_once PATH_APPLICATION . '/config/init.php';

    // get controller
    $controller = empty($_GET['c']) ? $config['default_controller'] : $_GET['c'];

    // get action
    $action = empty($_GET['a']) ? $config['default_action'] : $_GET['a'];

    // change Controller name
    $controller = ucfirst(strtolower($controller)) . '_Controller';

    // change Action name
    $action = strtolower($action) . 'Action';

    // check Controller exist
    if (!file_exists(PATH_APPLICATION . '/controller/' . $controller . '.php')){
        die ('Controller not found');
    }

    // Include Base Controller
    include_once PATH_SYSTEM . '/core/FT_Controller.php';

    // call Controller
    require_once PATH_APPLICATION . '/controller/' . $controller . '.php';

    // check Controller class
    if (!class_exists($controller)){
        die ('Controller not found');
    }

    // construct Controller
    $controllerObject = new $controller();

    // check action exist
    if ( !method_exists($controllerObject, $action)){
        die ('Action not found');
    }

    // run program
    $controllerObject->{$action}();
}