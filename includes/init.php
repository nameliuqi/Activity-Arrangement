<?php
session_start();
define("ROOTPATH",'./');
define("PUBLICPATH",ROOTPATH.'public/');
define("TPLPATH",ROOTPATH.'template/'); 

require_once(ROOTPATH . 'db/DAOClass.php');
require_once(ROOTPATH.'includes/lib_common.php');
require_once(ROOTPATH.'includes/lib_template.php');