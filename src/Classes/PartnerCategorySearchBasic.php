<?php namespace Fungku\NetSuite\Classes;

class PartnerCategorySearchBasic extends SearchRecordBasic {
	public $externalId;
	public $externalIdString;
	public $internalId;
	public $internalIdNumber;
	public $isInactive;
	public $name;
	public $parent;
	static $paramtypesmap = array(
		"externalId" => "SearchMultiSelectField",
		"externalIdString" => "SearchStringField",
		"internalId" => "SearchMultiSelectField",
		"internalIdNumber" => "SearchLongField",
		"isInactive" => "SearchBooleanField",
		"name" => "SearchStringField",
		"parent" => "SearchMultiSelectField",
	);
}

