<?php namespace Fungku\NetSuite\Classes;

class EmployeeSearchRowBasic extends SearchRowBasic {
	public $accountNumber;
	public $address;
	public $address1;
	public $address2;
	public $address3;
	public $addressee;
	public $addressInternalId;
	public $addressLabel;
	public $addressPhone;
	public $alienNumber;
	public $altEmail;
	public $altName;
	public $altPhone;
	public $approvalLimit;
	public $approver;
	public $attention;
	public $authWorkDate;
	public $billAddress;
	public $billAddress1;
	public $billAddress2;
	public $billAddress3;
	public $billAddressee;
	public $billAttention;
	public $billCity;
	public $billCountry;
	public $billCountryCode;
	public $billingClass;
	public $billPhone;
	public $billState;
	public $billZipCode;
	public $birthDate;
	public $birthDay;
	public $city;
	public $class;
	public $comments;
	public $concurrentWebServicesUser;
	public $country;
	public $countryCode;
	public $dateCreated;
	public $department;
	public $eligibleForCommission;
	public $email;
	public $employeeStatus;
	public $employeeType;
	public $entityId;
	public $entityNumber;
	public $ethnicity;
	public $expenseLimit;
	public $externalId;
	public $fax;
	public $firstName;
	public $gender;
	public $giveAccess;
	public $globalSubscriptionStatus;
	public $hireDate;
	public $homePhone;
	public $i9Verified;
	public $image;
	public $internalId;
	public $isDefaultBilling;
	public $isDefaultShipping;
	public $isInactive;
	public $isJobResource;
	public $isSalesRep;
	public $isSupportRep;
	public $isTemplate;
	public $laborCost;
	public $language;
	public $lastModifiedDate;
	public $lastName;
	public $lastPaidDate;
	public $lastReviewDate;
	public $level;
	public $location;
	public $maritalStatus;
	public $middleName;
	public $mobilePhone;
	public $nextReviewDate;
	public $offlineAccess;
	public $payFrequency;
	public $permChangeDate;
	public $permChangeLevel;
	public $permission;
	public $permissionChange;
	public $phone;
	public $phoneticName;
	public $primaryEarningAmount;
	public $primaryEarningItem;
	public $primaryEarningType;
	public $purchaseOrderApprovalLimit;
	public $purchaseOrderApprover;
	public $purchaseOrderLimit;
	public $releaseDate;
	public $residentStatus;
	public $role;
	public $roleChange;
	public $roleChangeAction;
	public $roleChangeDate;
	public $salesRole;
	public $salutation;
	public $shipAddress1;
	public $shipAddress2;
	public $shipAddress3;
	public $shipAddressee;
	public $shipAttention;
	public $shipCity;
	public $shipCountry;
	public $shipCountryCode;
	public $shipPhone;
	public $shipState;
	public $shipZip;
	public $socialSecurityNumber;
	public $state;
	public $subscription;
	public $subscriptionDate;
	public $subscriptionStatus;
	public $subsidiary;
	public $supervisor;
	public $timeApprover;
	public $title;
	public $usePerquest;
	public $useTimeData;
	public $visaExpDate;
	public $visaType;
	public $workCalendar;
	public $workplace;
	public $zipCode;
	public $customFieldList;
	static $paramtypesmap = array(
		"accountNumber" => "SearchColumnStringField[]",
		"address" => "SearchColumnStringField[]",
		"address1" => "SearchColumnStringField[]",
		"address2" => "SearchColumnStringField[]",
		"address3" => "SearchColumnStringField[]",
		"addressee" => "SearchColumnStringField[]",
		"addressInternalId" => "SearchColumnStringField[]",
		"addressLabel" => "SearchColumnStringField[]",
		"addressPhone" => "SearchColumnStringField[]",
		"alienNumber" => "SearchColumnStringField[]",
		"altEmail" => "SearchColumnStringField[]",
		"altName" => "SearchColumnStringField[]",
		"altPhone" => "SearchColumnStringField[]",
		"approvalLimit" => "SearchColumnDoubleField[]",
		"approver" => "SearchColumnSelectField[]",
		"attention" => "SearchColumnStringField[]",
		"authWorkDate" => "SearchColumnDateField[]",
		"billAddress" => "SearchColumnStringField[]",
		"billAddress1" => "SearchColumnStringField[]",
		"billAddress2" => "SearchColumnStringField[]",
		"billAddress3" => "SearchColumnStringField[]",
		"billAddressee" => "SearchColumnStringField[]",
		"billAttention" => "SearchColumnStringField[]",
		"billCity" => "SearchColumnStringField[]",
		"billCountry" => "SearchColumnEnumSelectField[]",
		"billCountryCode" => "SearchColumnStringField[]",
		"billingClass" => "SearchColumnSelectField[]",
		"billPhone" => "SearchColumnStringField[]",
		"billState" => "SearchColumnStringField[]",
		"billZipCode" => "SearchColumnStringField[]",
		"birthDate" => "SearchColumnDateField[]",
		"birthDay" => "SearchColumnDateField[]",
		"city" => "SearchColumnStringField[]",
		"class" => "SearchColumnSelectField[]",
		"comments" => "SearchColumnStringField[]",
		"concurrentWebServicesUser" => "SearchColumnBooleanField[]",
		"country" => "SearchColumnEnumSelectField[]",
		"countryCode" => "SearchColumnStringField[]",
		"dateCreated" => "SearchColumnDateField[]",
		"department" => "SearchColumnSelectField[]",
		"eligibleForCommission" => "SearchColumnBooleanField[]",
		"email" => "SearchColumnStringField[]",
		"employeeStatus" => "SearchColumnSelectField[]",
		"employeeType" => "SearchColumnSelectField[]",
		"entityId" => "SearchColumnStringField[]",
		"entityNumber" => "SearchColumnLongField[]",
		"ethnicity" => "SearchColumnSelectField[]",
		"expenseLimit" => "SearchColumnDoubleField[]",
		"externalId" => "SearchColumnSelectField[]",
		"fax" => "SearchColumnStringField[]",
		"firstName" => "SearchColumnStringField[]",
		"gender" => "SearchColumnEnumSelectField[]",
		"giveAccess" => "SearchColumnBooleanField[]",
		"globalSubscriptionStatus" => "SearchColumnEnumSelectField[]",
		"hireDate" => "SearchColumnDateField[]",
		"homePhone" => "SearchColumnStringField[]",
		"i9Verified" => "SearchColumnBooleanField[]",
		"image" => "SearchColumnSelectField[]",
		"internalId" => "SearchColumnSelectField[]",
		"isDefaultBilling" => "SearchColumnBooleanField[]",
		"isDefaultShipping" => "SearchColumnBooleanField[]",
		"isInactive" => "SearchColumnBooleanField[]",
		"isJobResource" => "SearchColumnBooleanField[]",
		"isSalesRep" => "SearchColumnBooleanField[]",
		"isSupportRep" => "SearchColumnBooleanField[]",
		"isTemplate" => "SearchColumnBooleanField[]",
		"laborCost" => "SearchColumnDoubleField[]",
		"language" => "SearchColumnEnumSelectField[]",
		"lastModifiedDate" => "SearchColumnDateField[]",
		"lastName" => "SearchColumnStringField[]",
		"lastPaidDate" => "SearchColumnDateField[]",
		"lastReviewDate" => "SearchColumnDateField[]",
		"level" => "SearchColumnEnumSelectField[]",
		"location" => "SearchColumnSelectField[]",
		"maritalStatus" => "SearchColumnSelectField[]",
		"middleName" => "SearchColumnStringField[]",
		"mobilePhone" => "SearchColumnStringField[]",
		"nextReviewDate" => "SearchColumnDateField[]",
		"offlineAccess" => "SearchColumnBooleanField[]",
		"payFrequency" => "SearchColumnEnumSelectField[]",
		"permChangeDate" => "SearchColumnDateField[]",
		"permChangeLevel" => "SearchColumnStringField[]",
		"permission" => "SearchColumnEnumSelectField[]",
		"permissionChange" => "SearchColumnEnumSelectField[]",
		"phone" => "SearchColumnStringField[]",
		"phoneticName" => "SearchColumnStringField[]",
		"primaryEarningAmount" => "SearchColumnDoubleField[]",
		"primaryEarningItem" => "SearchColumnStringField[]",
		"primaryEarningType" => "SearchColumnStringField[]",
		"purchaseOrderApprovalLimit" => "SearchColumnDoubleField[]",
		"purchaseOrderApprover" => "SearchColumnSelectField[]",
		"purchaseOrderLimit" => "SearchColumnDoubleField[]",
		"releaseDate" => "SearchColumnDateField[]",
		"residentStatus" => "SearchColumnSelectField[]",
		"role" => "SearchColumnSelectField[]",
		"roleChange" => "SearchColumnStringField[]",
		"roleChangeAction" => "SearchColumnStringField[]",
		"roleChangeDate" => "SearchColumnDateField[]",
		"salesRole" => "SearchColumnSelectField[]",
		"salutation" => "SearchColumnStringField[]",
		"shipAddress1" => "SearchColumnStringField[]",
		"shipAddress2" => "SearchColumnStringField[]",
		"shipAddress3" => "SearchColumnStringField[]",
		"shipAddressee" => "SearchColumnStringField[]",
		"shipAttention" => "SearchColumnStringField[]",
		"shipCity" => "SearchColumnStringField[]",
		"shipCountry" => "SearchColumnEnumSelectField[]",
		"shipCountryCode" => "SearchColumnStringField[]",
		"shipPhone" => "SearchColumnStringField[]",
		"shipState" => "SearchColumnStringField[]",
		"shipZip" => "SearchColumnStringField[]",
		"socialSecurityNumber" => "SearchColumnStringField[]",
		"state" => "SearchColumnEnumSelectField[]",
		"subscription" => "SearchColumnSelectField[]",
		"subscriptionDate" => "SearchColumnDateField[]",
		"subscriptionStatus" => "SearchColumnBooleanField[]",
		"subsidiary" => "SearchColumnSelectField[]",
		"supervisor" => "SearchColumnSelectField[]",
		"timeApprover" => "SearchColumnSelectField[]",
		"title" => "SearchColumnStringField[]",
		"usePerquest" => "SearchColumnBooleanField[]",
		"useTimeData" => "SearchColumnBooleanField[]",
		"visaExpDate" => "SearchColumnDateField[]",
		"visaType" => "SearchColumnSelectField[]",
		"workCalendar" => "SearchColumnStringField[]",
		"workplace" => "SearchColumnSelectField[]",
		"zipCode" => "SearchColumnStringField[]",
		"customFieldList" => "SearchColumnCustomFieldList",
	);
}

