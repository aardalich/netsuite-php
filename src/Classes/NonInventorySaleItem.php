<?php namespace Fungku\NetSuite\Classes;

class NonInventorySaleItem extends Record {
	public $createdDate;
	public $lastModifiedDate;
	public $salesDescription;
	public $includeChildren;
	public $incomeAccount;
	public $isTaxable;
	public $matrixType;
	public $taxSchedule;
	public $shippingCost;
	public $shippingCostUnits;
	public $handlingCost;
	public $handlingCostUnits;
	public $costEstimateType;
	public $costEstimate;
	public $weight;
	public $weightUnit;
	public $weightUnits;
	public $costEstimateUnits;
	public $unitsType;
	public $saleUnit;
	public $issueProduct;
	public $billingSchedule;
	public $deferredRevenueAccount;
	public $revRecSchedule;
	public $stockDescription;
	public $isHazmatItem;
	public $hazmatId;
	public $hazmatShippingName;
	public $hazmatHazardClass;
	public $hazmatPackingGroup;
	public $hazmatItemUnits;
	public $hazmatItemUnitsQty;
	public $producer;
	public $manufacturer;
	public $mpn;
	public $multManufactureAddr;
	public $manufacturerAddr1;
	public $manufacturerCity;
	public $manufacturerState;
	public $manufacturerZip;
	public $countryOfManufacture;
	public $manufacturerTaxId;
	public $scheduleBNumber;
	public $scheduleBQuantity;
	public $scheduleBCode;
	public $manufacturerTariff;
	public $preferenceCriterion;
	public $minimumQuantity;
	public $enforceMinQtyInternally;
	public $softDescriptor;
	public $shipPackage;
	public $shipIndividually;
	public $isFulfillable;
	public $costCategory;
	public $pricesIncludeTax;
	public $quantityPricingSchedule;
	public $useMarginalRates;
	public $overallQuantityPricingType;
	public $pricingGroup;
	public $minimumQuantityUnits;
	public $vsoePrice;
	public $vsoeSopGroup;
	public $vsoeDeferral;
	public $vsoePermitDiscount;
	public $vsoeDelivered;
	public $deferRevRec;
	public $storeDisplayName;
	public $storeDisplayThumbnail;
	public $storeDisplayImage;
	public $storeDescription;
	public $storeDetailedDescription;
	public $storeItemTemplate;
	public $pageTitle;
	public $metaTagHtml;
	public $excludeFromSitemap;
	public $sitemapPriority;
	public $searchKeywords;
	public $isDonationItem;
	public $showDefaultDonationAmount;
	public $maxDonationAmount;
	public $dontShowPrice;
	public $noPriceMessage;
	public $outOfStockMessage;
	public $onSpecial;
	public $outOfStockBehavior;
	public $relatedItemsDescription;
	public $specialsDescription;
	public $featuredDescription;
	public $shoppingDotComCategory;
	public $shopzillaCategoryId;
	public $nexTagCategory;
	public $productFeedList;
	public $urlComponent;
	public $customForm;
	public $itemId;
	public $upcCode;
	public $displayName;
	public $parent;
	public $isOnline;
	public $isGcoCompliant;
	public $offerSupport;
	public $isInactive;
	public $availableToPartners;
	public $department;
	public $class;
	public $location;
	public $defaultItemShipMethod;
	public $itemCarrier;
	public $itemShipMethodList;
	public $subsidiaryList;
	public $itemOptionsList;
	public $matrixOptionList;
	public $pricingMatrix;
	public $accountingBookDetailList;
	public $purchaseTaxCode;
	public $rate;
	public $salesTaxCode;
	public $siteCategoryList;
	public $translationsList;
	public $presentationItemList;
	public $customFieldList;
	public $internalId;
	public $externalId;
	static $paramtypesmap = array(
		"createdDate" => "dateTime",
		"lastModifiedDate" => "dateTime",
		"salesDescription" => "string",
		"includeChildren" => "boolean",
		"incomeAccount" => "RecordRef",
		"isTaxable" => "boolean",
		"matrixType" => "ItemMatrixType",
		"taxSchedule" => "RecordRef",
		"shippingCost" => "float",
		"shippingCostUnits" => "string",
		"handlingCost" => "float",
		"handlingCostUnits" => "string",
		"costEstimateType" => "ItemCostEstimateType",
		"costEstimate" => "float",
		"weight" => "float",
		"weightUnit" => "ItemWeightUnit",
		"weightUnits" => "string",
		"costEstimateUnits" => "string",
		"unitsType" => "RecordRef",
		"saleUnit" => "RecordRef",
		"issueProduct" => "RecordRef",
		"billingSchedule" => "RecordRef",
		"deferredRevenueAccount" => "RecordRef",
		"revRecSchedule" => "RecordRef",
		"stockDescription" => "string",
		"isHazmatItem" => "boolean",
		"hazmatId" => "string",
		"hazmatShippingName" => "string",
		"hazmatHazardClass" => "string",
		"hazmatPackingGroup" => "HazmatPackingGroup",
		"hazmatItemUnits" => "string",
		"hazmatItemUnitsQty" => "float",
		"producer" => "boolean",
		"manufacturer" => "string",
		"mpn" => "string",
		"multManufactureAddr" => "boolean",
		"manufacturerAddr1" => "string",
		"manufacturerCity" => "string",
		"manufacturerState" => "string",
		"manufacturerZip" => "string",
		"countryOfManufacture" => "Country",
		"manufacturerTaxId" => "string",
		"scheduleBNumber" => "string",
		"scheduleBQuantity" => "integer",
		"scheduleBCode" => "ScheduleBCode",
		"manufacturerTariff" => "string",
		"preferenceCriterion" => "ItemPreferenceCriterion",
		"minimumQuantity" => "integer",
		"enforceMinQtyInternally" => "boolean",
		"softDescriptor" => "string",
		"shipPackage" => "RecordRef",
		"shipIndividually" => "boolean",
		"isFulfillable" => "boolean",
		"costCategory" => "RecordRef",
		"pricesIncludeTax" => "boolean",
		"quantityPricingSchedule" => "RecordRef",
		"useMarginalRates" => "boolean",
		"overallQuantityPricingType" => "ItemOverallQuantityPricingType",
		"pricingGroup" => "RecordRef",
		"minimumQuantityUnits" => "string",
		"vsoePrice" => "float",
		"vsoeSopGroup" => "VsoeSopGroup",
		"vsoeDeferral" => "VsoeDeferral",
		"vsoePermitDiscount" => "VsoePermitDiscount",
		"vsoeDelivered" => "boolean",
		"deferRevRec" => "boolean",
		"storeDisplayName" => "string",
		"storeDisplayThumbnail" => "RecordRef",
		"storeDisplayImage" => "RecordRef",
		"storeDescription" => "string",
		"storeDetailedDescription" => "string",
		"storeItemTemplate" => "RecordRef",
		"pageTitle" => "string",
		"metaTagHtml" => "string",
		"excludeFromSitemap" => "boolean",
		"sitemapPriority" => "SitemapPriority",
		"searchKeywords" => "string",
		"isDonationItem" => "boolean",
		"showDefaultDonationAmount" => "boolean",
		"maxDonationAmount" => "float",
		"dontShowPrice" => "boolean",
		"noPriceMessage" => "string",
		"outOfStockMessage" => "string",
		"onSpecial" => "boolean",
		"outOfStockBehavior" => "ItemOutOfStockBehavior",
		"relatedItemsDescription" => "string",
		"specialsDescription" => "string",
		"featuredDescription" => "string",
		"shoppingDotComCategory" => "string",
		"shopzillaCategoryId" => "integer",
		"nexTagCategory" => "string",
		"productFeedList" => "ProductFeedList",
		"urlComponent" => "string",
		"customForm" => "RecordRef",
		"itemId" => "string",
		"upcCode" => "string",
		"displayName" => "string",
		"parent" => "RecordRef",
		"isOnline" => "boolean",
		"isGcoCompliant" => "boolean",
		"offerSupport" => "boolean",
		"isInactive" => "boolean",
		"availableToPartners" => "boolean",
		"department" => "RecordRef",
		"class" => "RecordRef",
		"location" => "RecordRef",
		"defaultItemShipMethod" => "RecordRef",
		"itemCarrier" => "ItemCarrier",
		"itemShipMethodList" => "RecordRefList",
		"subsidiaryList" => "RecordRefList",
		"itemOptionsList" => "ItemOptionsList",
		"matrixOptionList" => "MatrixOptionList",
		"pricingMatrix" => "PricingMatrix",
		"accountingBookDetailList" => "ItemAccountingBookDetailList",
		"purchaseTaxCode" => "RecordRef",
		"rate" => "float",
		"salesTaxCode" => "RecordRef",
		"siteCategoryList" => "SiteCategoryList",
		"translationsList" => "TranslationList",
		"presentationItemList" => "PresentationItemList",
		"customFieldList" => "CustomFieldList",
		"internalId" => "string",
		"externalId" => "string",
	);
}

