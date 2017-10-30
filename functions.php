<?php
/**
 * Created by PhpStorm.
 * User: Pivz
 * Date: 29.10.2017
 * Time: 18:42
 */
include_once '/libs/Smarty.class.php';

const SIZE = 2000000;

function uploadsFiles(){
/*    $allowedExts = array(
        "pdf",
        "doc",
        "docx"
    );*/
/*    $arrAllTypes = array(
        'application/pdf',
        'image/gif',
        'image/jpeg',
        'image/png',
        'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        'application/msword'
    );*/

    if(isset($_FILES['upload'])){
        var_dump($_FILES['upload']);
    }

    if(isset($_FILES['upload']) && $_FILES['upload']['type'] == 'image/jpeg' && $_FILES["upload"]["size"] < SIZE) {
        move_uploaded_file($_FILES['upload']['tmp_name'], 'jpg/' . $_FILES['upload']['name']);
    }
    if(isset($_FILES['upload']) && $_FILES['upload']['type'] == 'application/pdf' && $_FILES["upload"]["size"] < SIZE){
        move_uploaded_file($_FILES['upload']['tmp_name'], 'pdf/' . $_FILES['upload']['name']);
    }
    if(isset($_FILES['upload']) && $_FILES['upload']['type'] == 'application/msword' && $_FILES["upload"]["size"] < SIZE){
        move_uploaded_file($_FILES['upload']['tmp_name'], 'doc/' . $_FILES['upload']['name']);
    }
    if(isset($_FILES['upload']) && $_FILES['upload']['type'] == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' && $_FILES["upload"]["size"] < SIZE){
        move_uploaded_file($_FILES['upload']['tmp_name'], 'doc/' . $_FILES['upload']['name']);
    }
}

function showGallery(){
    if(!file_exists('jpg')){
        mkdir('jpg/');
    } else if(!file_exists('pdf')){
        mkdir('pdf/');
    } else if(!file_exists('doc')){
        mkdir('doc/');
    }
    $arrGall = glob('jpg/*.*');
    $smarty = new Smarty();
    $smarty->setTemplateDir('template');
    $smarty->assign('arrGall', $arrGall);
    $arrNameFileInDirJpg = scandir('jpg/');
    $smarty->assign('arrNameFileInDirJpg', $arrNameFileInDirJpg);
    $arrNameFileInDirPdf = scandir('pdf/');
    $smarty->assign('arrNameFileInDirPdf', $arrNameFileInDirPdf);
    $arrNameFileInDirDoc = scandir('doc/');
    $smarty->assign('arrNameFileInDirDoc', $arrNameFileInDirDoc);
    $smarty->display('index.tpl');
}