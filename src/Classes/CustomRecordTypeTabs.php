<?php namespace Fungku\NetSuite\Classes;

class CustomRecordTypeTabs {
	public $tabTitle;
	public $tabParent;
	public $tabTitleLanguageValueList;
	static $paramtypesmap = array(
		"tabTitle" => "string",
		"tabParent" => "RecordRef",
		"tabTitleLanguageValueList" => "LanguageValueList",
	);
}

