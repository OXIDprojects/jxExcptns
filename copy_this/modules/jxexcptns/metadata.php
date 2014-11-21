<?php

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';
 
/**
 * Module information
 */
$aModule = array(
    'id'           => 'jxexcptns',
    'title'        => 'jxExcptns - Display of exception_log.txt',
    'description'  => array(
                        'de'=>'Modul für die Anzeige der Datei exception_log.txt.',
                        'en'=>'Module for displaying of exception_log.txt.'
                        ),
    'thumbnail'    => 'jxexcptns.png',
    'version'      => '0.1.2',
    'author'       => 'Joachim Barthel',
    'url'          => 'https://github.com/job963/jxExcptns',
    'email'        => 'jobarthel@gmail.com',
    'extend'       => array(
                        ),
    'files'        => array(
        'jxexcptns' => 'jxexcptns/application/controllers/admin/jxexcptns.php'
                        ),
    'templates'    => array(
        'jxexcptns.tpl' => 'jxexcptns/application/views/admin/tpl/jxexcptns.tpl'
                        ),
    'settings' => array(
                        )
    );

?>
