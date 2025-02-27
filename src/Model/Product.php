<?php
/**
 * This file is part of the Billbee API package.
 *
 * Copyright 2017 - 2021 by Billbee GmbH
 *
 * For the full copyright and license information, please read the LICENSE
 * file that was distributed with this source code.
 *
 * Created by Julian Finkler <julian@mintware.de>
 */

namespace BillbeeDe\BillbeeAPI\Model;

use BillbeeDe\BillbeeAPI\Type\ProductCondition;
use MintWare\DMM\DataField;

class Product
{
    // Product Types
    const TYPE_PRODUCT = 1;
    const TYPE_BUNDLE = 2;

    // VAT Indexes
    const VAT_INDEX_NORMAL = 1;
    const VAT_INDEX_REDUCED = 2;

    // Units
    const UNIT_PIECE = 1;
    const UNIT_PAIR = 15;
    const UNIT_GRAM = 16;
    const UNIT_100_GRAM = 4;
    const UNIT_KG = 2;
    const UNIT_MILLILITER = 6;
    const UNIT_LITER = 5;
    const UNIT_METER = 3;
    const UNIT_SQUARE_METER = 7;
    const UNIT_CUBIC_METER = 8;
    const UNIT_YARD = 9;
    const UNIT_FAT_QUARTER = 10;
    const UNIT_OUNCE = 11;
    const UNIT_LBS = 12;
    const UNIT_FLUID_OUNCE = 13;
    const UNIT_GALLON = 14;

    // Delivery Time
    const DELIVERY_NA = null;
    const DELIVERY_1_2_DAYS = 1;
    const DELIVERY_3_5_DAYS = 2;
    const DELIVERY_6_9_DAYS = 3;
    const DELIVERY_10_14_DAYS = 4;
    const DELIVERY_15_21_DAYS = 5;
    const DELIVERY_4_WEEKS = 6;
    const DELIVERY_5_WEEKS = 7;
    const DELIVERY_6_WEEKS = 8;
    const DELIVERY_7_WEEKS = 9;
    const DELIVERY_8_WEEKS = 10;
    const DELIVERY_9_WEEKS = 11;
    const DELIVERY_10_WEEKS = 12;

    // Recipient
    const RECIPIENT_NA = null;
    const RECIPIENT_BABIES = 1;
    const RECIPIENT_BABY_BOYS = 2;
    const RECIPIENT_BABY_GIRLS = 3;
    const RECIPIENT_WOMAN = 4;
    const RECIPIENT_PETS = 5;
    const RECIPIENT_DOGS = 6;
    const RECIPIENT_TEENAGERS = 7;
    const RECIPIENT_BOYS = 8;
    const RECIPIENT_CATS = 9;
    const RECIPIENT_CHILDREN = 10;
    const RECIPIENT_GIRLS = 11;
    const RECIPIENT_MEN = 12;
    const RECIPIENT_TEEN_BOYS = 13;
    const RECIPIENT_TEEN_GIRLS = 14;
    const RECIPIENT_UNISEX = 15;
    const RECIPIENT_BIRDS = 16;

    // Occasion
    const OCCASION_NA = null;
    const OCCASION_GRADUATION = 1;
    const OCCASION_SYMPATHY = 2;
    const OCCASION_BAR_OR_BAT_MITZVAH = 3;
    const OCCASION_CANADA_DAY = 4;
    const OCCASION_CHINESE_NEW_YEAR = 5;
    const OCCASION_CINCO_DE_MAYO = 6;
    const OCCASION_DAY_OF_THE_DEAD = 7;
    const OCCASION_JULY_4TH = 8;
    const OCCASION_EID = 9;
    const OCCASION_BIRTHDAY = 10;
    const OCCASION_GET_WELL = 11;
    const OCCASION_HALLOWEEN = 12;
    const OCCASION_HANUKKAH = 13;
    const OCCASION_HOUSEWARMING = 14;
    const OCCASION_WEDDING = 15;
    const OCCASION_ANNIVERSARY = 16;
    const OCCASION_CONFIRMATION = 17;
    const OCCASION_KWANZAA = 18;
    const OCCASION_MOTHERS_DAY = 19;
    const OCCASION_NEW_BABY = 20;
    const OCCASION_NEW_YEARS = 21;
    const OCCASION_EASTER = 22;
    const OCCASION_PROM = 23;
    const OCCASION_QUINCEANERA = 24;
    const OCCASION_RETIREMENT = 25;
    const OCCASION_ST_PATRICKS_DAY = 26;
    const OCCASION_SWEET_16 = 27;
    const OCCASION_BAPTISM = 28;
    const OCCASION_THANKSGIVING = 29;
    const OCCASION_VALENTINES = 30;
    const OCCASION_FATHERS_DAY = 31;
    const OCCASION_ENGAGEMENT = 32;
    const OCCASION_CHRISTMAS = 33;

    /**
     * @var int
     * @DataField(name="Id", type="int")
     */
    public $id;

    /**
     * @var int
     * @DataField(name="Type", type="int")
     */
    public $type = Product::TYPE_PRODUCT;

    /**
     * @var TranslatableText[]
     * @DataField(name="Title", type="BillbeeDe\BillbeeAPI\Model\TranslatableText[]")
     */
    public $title = null;

    /**
     * @var TranslatableText[]
     * @DataField(name="InvoiceText", type="BillbeeDe\BillbeeAPI\Model\TranslatableText[]")
     */
    public $invoiceText = [];

    /**
     * @var TranslatableText[]
     * @DataField(name="ShortDescription", type="BillbeeDe\BillbeeAPI\Model\TranslatableText[]")
     */
    public $shortDescription = [];

    /**
     * @var Image[]
     * @DataField(name="Images", type="BillbeeDe\BillbeeAPI\Model\Image[]")
     */
    public $images = [];

    /**
     * @var TranslatableText[]
     * @DataField(name="Description", type="BillbeeDe\BillbeeAPI\Model\TranslatableText[]")
     */
    public $description = [];

    /**
     * @var TranslatableText[]
     * @DataField(name="BasicAttributes", type="BillbeeDe\BillbeeAPI\Model\TranslatableText[]")
     */
    public $attributes = [];

    /**
     * @var string
     * @DataField(name="SKU", type="string")
     */
    public $sku = '';

    /**
     * @var string
     * @DataField(name="EAN", type="string")
     */
    public $ean = '';

    /**
     * @var Source[]
     * @DataField(name="Sources", type="BillbeeDe\BillbeeAPI\Model\Source[]")
     */
    public $sources = [];

    /**
     * @var Category
     * @DataField(name="Category1", type="BillbeeDe\BillbeeAPI\Model\Category")
     */
    public $category1 = null;

    /**
     * @var Category
     * @DataField(name="Category2", type="BillbeeDe\BillbeeAPI\Model\Category")
     */
    public $category2 = null;

    /**
     * @var Category
     * @DataField(name="Category3", type="BillbeeDe\BillbeeAPI\Model\Category")
     */
    public $category3 = null;

    /**
     * @var string
     * @DataField(name="Manufacturer", type="string")
     */
    public $manufacturer = '';

    /**
     * @var int
     * @DataField(name="VatIndex", type="int")
     */
    public $vatIndex = Product::VAT_INDEX_NORMAL;

    /**
     * @var float
     * @DataField(name="Price", type="float")
     */
    public $price = 0.00;

    /**
     * @var float
     * @DataField(name="CostPrice", type="float")
     */
    public $costPrice = 0.00;

    /**
     * @var float
     * @DataField(name="Vat1Rate", type="float")
     */
    public $vatRateNormal = 0.00;

    /**
     * @var float
     * @DataField(name="Vat2Rate", type="float")
     */
    public $vatRateReduced = 0.00;

    /**
     * @var TranslatableText[]
     * @DataField(name="Materials", type="BillbeeDe\BillbeeAPI\Model\TranslatableText[]")
     */
    public $materials = [];

    /**
     * @var TranslatableText[]
     * @DataField(name="Tags", type="BillbeeDe\BillbeeAPI\Model\TranslatableText[]")
     */
    public $tags = [];

    /**
     * @var float
     * @DataField(name="StockDesired", type="float")
     */
    public $stockDesired = 0.00;

    /**
     * @var float
     * @DataField(name="StockCurrent", type="float")
     */
    public $stockCurrent = 0.00;

    /**
     * @var float
     * @DataField(name="StockWarning", type="float")
     */
    public $stockWarning = 0.00;

    /**
     * @var bool
     * @DataField(name="LowStock", type="bool")
     */
    public $lowStock = false;

    /**
     * @var string
     * @DataField(name="StockCode", type="string")
     */
    public $stockCode = '';

    /**
     * @var float
     * @DataField(name="StockReduceItemsPerSale", type="float")
     */
    public $stockReduceItemsPerSale = 1.0;

    /**
     * @var array
     * @DataField(name="Stocks", type="array")
     */
    public $stocks = [];

    /**
     * @var int
     * @DataField(name="Weight", type="int")
     */
    public $weight = 0;

    /**
     * @var int
     * @DataField(name="WeightNet", type="int")
     */
    public $weightNet = 0;

    /**
     * @var int
     * @DataField(name="Unit", type="int")
     */
    public $unit = Product::UNIT_PIECE;

    /**
     * @var float
     * @DataField(name="UnitsPerItem", type="float")
     */
    public $unitsPerItem = 1.0;

    /**
     * @var float
     * @DataField(name="SoldAmount", type="float")
     */
    public $soldAmount = 0.0;

    /**
     * @var float
     * @DataField(name="SoldSumGross", type="float")
     */
    public $soldSumGross = 0.0;

    /**
     * @var float
     * @DataField(name="SoldSumNet", type="float")
     */
    public $soldSumNet = 0.0;

    /**
     * @var float
     * @DataField(name="SoldSumNetLast30Days", type="float")
     */
    public $soldSumNetLast30Days = 0.0;

    /**
     * @var float
     * @DataField(name="SoldSumGrossLast30Days", type="float")
     */
    public $soldSumGrossLast30Days = 0.0;

    /**
     * @var float
     * @DataField(name="SoldAmountLast30Days", type="float")
     */
    public $soldAmountLast30Days = 0.0;

    /**
     * @var int
     * @DataField(name="ShippingProductId", type="int")
     */
    public $shippingProductId = null;

    /**
     * @var bool
     * @DataField(name="IsDigital", type="bool")
     */
    public $isDigital = false;

    /**
     * @var bool
     * @DataField(name="IsCustomizable", type="bool")
     */
    public $isCustomizable = false;

    /**
     * @var int|null
     * @DataField(name="DeliveryTime", type="int")
     */
    public $deliveryTime = Product::DELIVERY_NA;

    /**
     * @var int|null
     * @DataField(name="Recipient", type="int")
     */
    public $recipient = Product::RECIPIENT_NA;

    /**
     * @var int|null
     * @DataField(name="Occasion", type="int")
     */
    public $occasion = Product::OCCASION_NA;

    /**
     * @var string
     * @DataField(name="CountryOfOrigin", type="string")
     */
    public $countryOfOrigin = '';

    /**
     * @var string
     * @DataField(name="ExportDescription", type="string")
     */
    public $exportDescription = '';

    /**
     * @var string
     * @DataField(name="TaricNumber", type="string")
     */
    public $taricNumber = '';

    /**
     * @var ProductCustomField[]
     * @DataField(name="CustomFields", type="\BillbeeDe\BillbeeAPI\Model\ProductCustomField[]")
     */
    public $customFields = [];

    /**
     * @var int
     * @DataField(name="Condition", type="int")
     *
     * @see ProductCondition
     */
    public $condition = null;

    /**
     * @var float
     * @DataField(name="WidthCm", type="float")
     */
    public $widthCm;

    /**
     * @var float
     * @DataField(name="LengthCm", type="float")
     */
    public $lengthCm;

    /**
     * @var float
     * @DataField(name="HeightCm", type="float")
     */
    public $heightCm;

    /**
     * @var BillOfMaterialProduct[]
     * @DataField(name="BillOfMaterial", type="BillbeeDe\BillbeeAPI\Model\BillOfMaterialProduct[]")
     *
     * @see ProductCondition
     */
    public $billOfMaterial = [];
}
