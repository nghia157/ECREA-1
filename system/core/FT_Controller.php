<?php
/**
 * Created by PhpStorm.
 * User: NGHIA DV
 * Date: 11/26/2017
 * Time: 11:31 PM
 */
if (!defined('PATH_SYSTEM')) die('Bad request');
class FT_Controller
{
    protected $view;

    protected $model;

    protected $library;

    protected $helper;

    protected $config;

    public function __construct()
    {
        // Loader for config
        require_once PATH_SYSTEM . '/core/loader/FT_Config_Loader.php';
        $this->config   = new FT_Config_Loader();
        $this->config->loadConfigHelper('config');
    }
}