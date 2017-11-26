<?php
/**
 * Created by PhpStorm.
 * User: NGHIA DV
 * Date: 11/27/2017
 * Time: 12:09 AM
 */

if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

class User_Controller extends FT_Controller
{
    public function indexAction()
    {
        echo '<pre>';
        print_r($this);
        echo '<h1>Index Action</h1>';
    }
}