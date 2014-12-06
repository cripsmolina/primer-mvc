<?php
/**
 * Created by PhpStorm.
 * User: Universidad
 * Date: 17/10/14
 * Time: 06:22 PM
 */

    $usuario = new Usuario();

    $titulo = 'Bienvenido a UserController';
    $contenido = 'contenido de la variable';

    $variables = array ('titulo'=>$titulo,'contenido'=>$contenido,'nombre'=>$usuario->setUsuario());

    view('userController',$variables);
