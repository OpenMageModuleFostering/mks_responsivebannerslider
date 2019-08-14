<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT
create table mksresponsivebannerslider(id int not null auto_increment, title varchar(255),image varchar(255),description varchar(255),status varchar(255), primary key(id));
		
SQLTEXT;

$installer->run($sql);
//demo 
Mage::getModel('core/url_rewrite')->setId(null);
//demo 
$installer->endSetup();
	 