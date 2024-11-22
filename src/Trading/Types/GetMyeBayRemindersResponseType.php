<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DTS\eBaySDK\Trading\Types\RemindersType $BuyingReminders
 * @property \DTS\eBaySDK\Trading\Types\RemindersType $SellingReminders
 */
class GetMyeBayRemindersResponseType extends \DTS\eBaySDK\Trading\Types\AbstractResponseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'BuyingReminders' => [
            'type' => 'DTS\eBaySDK\Trading\Types\RemindersType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyingReminders'
        ],
        'SellingReminders' => [
            'type' => 'DTS\eBaySDK\Trading\Types\RemindersType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'SellingReminders'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class($this)], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
