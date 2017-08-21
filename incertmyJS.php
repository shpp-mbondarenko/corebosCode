<?php
	include_once('vtlib/Vtiger/Menu.php');
	include_once('vtlib/Vtiger/Module.php');
	$mod_acc = Vtiger_Module::getInstance('Contacts');
	$mod_acc->addLink('HEADERSCRIPT', 'myjsquery', 'modules/Contacts/myjsquery.js');
	// Add the basic module block
	$block = VTiger_Block::getInstance('LBL_CONTACT_INFORMATION', $mod_acc);
	

	$field = new Vtiger_Field();
	$field->name = 'getEurope';
	$field->label = 'Get EU Company';
	//$field->table = $mod_acc``->basetable;
	$field->column = $field->name;
	$field->columntype = 'VARCHAR(255)';
	$field->uitype = 10;
	$field->typeofdata = 'V~O';
	$block->addField($field); /** Creates the field and adds to block */
	$field->setRelatedModules(Array('Accounts')); 
	echo "All is ok!";
?>