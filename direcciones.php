<?php
$name = 'pizarra-web';
$dirRoot = $_SERVER['DOCUMENT_ROOT'].'/'.$name.'/';

define('root', $dirRoot);
define('dao', root.'dao/');
define('domain_model', root.'domain.model/');
define('layout_ui', root.'layout.ui/');
define('services', root.'services/');