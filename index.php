<?php
/**
 * Created by PhpStorm.
 * User: Universidad
 * Date: 16/10/14
 * Time: 05:46 PM
 */

require 'helpers.php';
require 'template/header.php';
require 'clases/Usuario.php';
require 'bd/db.php';

	if(empty($_GET['url']))
        $_GET['url']='home';

	controller($_GET['url']);

require 'template/footer.php';