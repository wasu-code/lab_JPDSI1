<?php
require_once dirname(__FILE__).'/../../init.php';
//require_once dirname(__FILE__).'/../../config.php';
//require_once $cfg->root_path.'/lib/smarty/Smarty.class.php';

include $cfg->root_path.'/app/security/log.php';

//$about = new Smarty();

//$about->assign('cfg',$cfg);

getSmarty()->assign('page_title','O nas');
getSmarty()->assign('page_desc','liczysz na cud? Użyj naszego kalkulatora.');
getSmarty()->assign('page_header','O nas');
getSmarty()->assign('current','about');
	

getSmarty()->display('about.tpl')
?>

