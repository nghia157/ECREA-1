<?php
/**
 * Created by PhpStorm.
 * User: NGHIA DV
 * Date: 11/27/2017
 * Time: 12:29 AM
 */
class FT_Config_Loader
{
    // list configs
    protected $config = array();

    public function loadConfigHelper($config)
    {
        if (file_exists(PATH_APPLICATION . '/config/' . $config . '.php')) {
            $config = include_once PATH_APPLICATION . '/config/' . $config . '.php';
            if (!empty($config)) {
                foreach ($config as $key => $item) {
                    $this->config[$key] = $item;
                }
            }
            return true;
        }
        return FALSE;
    }

    public function getItemConfig($key, $default_value = '')
    {
        return isset($this->config[$key]) ? $this->config[$key] : $default_value;
    }

    public function setItem($key, $value)
    {
        $this->config[$key] = $value;
    }
}
