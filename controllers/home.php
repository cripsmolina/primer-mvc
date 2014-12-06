<?php
/**
 * Created by PhpStorm.
 * User: Universidad
 * Date: 16/10/14
 * Time: 05:50 PM
 */

$titulo = 'Bienvenidos al home';
$contenido = '....';

$variables = array('titulo'=>$titulo,'contenido'=>$contenido);
	view('home',$variables);