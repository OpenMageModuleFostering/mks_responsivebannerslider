<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT
create table mksresponsivebannerslider(id int not null auto_increment, title varchar(255),image varchar(255),description varchar(255),status varchar(255), primary key(id));

INSERT INTO `mksresponsivebannerslider` (`title`,`image`,`description`,`status`) VALUES ('Responsive Banner Slider 1','responsivebannerslider/bannerslider/banner-1.jpg','Responsive Banner Slider 1','0'),('Responsive Banner Slider 2','responsivebannerslider/bannerslider/banner-1.jpg','Responsive Banner Slider 2','0'),
('Responsive Banner Slider 3','responsivebannerslider/bannerslider/banner-1.jpg','Responsive Banner Slider 3','0');
		
SQLTEXT;

$installer->run($sql);
//demo 
Mage::getModel('core/url_rewrite')->setId(null);
//demo 
$installer->endSetup();
	 
