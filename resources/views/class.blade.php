<?php 
	include(app_path().'/xcrud/xcrud.php');
	include(app_path().'/xcrud/functions.php');
    echo Xcrud::load_css();
    echo Xcrud::load_js();

    $fd = Xcrud::get_instance();
    $fd->table('class');
    $fd->fields('id,name');
    echo $fd->render();
 ?>	