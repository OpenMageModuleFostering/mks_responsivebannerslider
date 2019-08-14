<?php
	
class Mks_Responsivebannerslider_Block_Adminhtml_Bannerslider_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
		public function __construct()
		{

				parent::__construct();
				$this->_objectId = "id";
				$this->_blockGroup = "responsivebannerslider";
				$this->_controller = "adminhtml_bannerslider";
				$this->_updateButton("save", "label", Mage::helper("responsivebannerslider")->__("Save Item"));
				$this->_updateButton("delete", "label", Mage::helper("responsivebannerslider")->__("Delete Item"));

				$this->_addButton("saveandcontinue", array(
					"label"     => Mage::helper("responsivebannerslider")->__("Save And Continue Edit"),
					"onclick"   => "saveAndContinueEdit()",
					"class"     => "save",
				), -100);



				$this->_formScripts[] = "

							function saveAndContinueEdit(){
								editForm.submit($('edit_form').action+'back/edit/');
							}
						";
		}

		public function getHeaderText()
		{
				if( Mage::registry("bannerslider_data") && Mage::registry("bannerslider_data")->getId() ){

				    return Mage::helper("responsivebannerslider")->__("Edit Item '%s'", $this->htmlEscape(Mage::registry("bannerslider_data")->getId()));

				} 
				else{

				     return Mage::helper("responsivebannerslider")->__("Add Item");

				}
		}
}