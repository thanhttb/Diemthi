<?php 
	include(app_path().'/xcrud/xcrud.php');
	include(app_path().'/xcrud/functions.php');
    echo Xcrud::load_css();
    echo Xcrud::load_js();

    $fd = Xcrud::get_instance();
    $fd->table('scoreboard');
    $fd->relation('class_id','class','id','name');

    $fd->label(['class_id'=>'Học phần','name'=>'Tên môn học','link'=>'Link Download']);
    $fd->change_type('link', 'file', '', array('not_rename'=>true,'path'=>'../../public/uploads'));
    echo $fd->render();
 ?>