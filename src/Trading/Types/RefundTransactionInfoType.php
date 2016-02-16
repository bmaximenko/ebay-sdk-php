<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DTS\eBaySDK\Trading\Enums\PaymentTransactionStatusCodeType $RefundStatus
 * @property \DTS\eBaySDK\Trading\Enums\RefundSourceTypeCodeType $RefundType
 * @property \DTS\eBaySDK\Trading\Types\UserIdentityType $RefundTo
 * @property \DateTime $RefundTime
 * @property \DTS\eBaySDK\Trading\Types\AmountType $RefundAmount
 * @property \DTS\eBaySDK\Trading\Types\TransactionReferenceType $ReferenceID
 * @property \DTS\eBaySDK\Trading\Types\AmountType $FeeOrCreditAmount
 */
class RefundTransactionInfoType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'RefundStatus' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundStatus'
        ],
        'RefundType' => [
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundType'
        ],
        'RefundTo' => [
            'type' => 'DTS\eBaySDK\Trading\Types\UserIdentityType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundTo'
        ],
        'RefundTime' => [
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundTime'
        ],
        'RefundAmount' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'RefundAmount'
        ],
        'ReferenceID' => [
            'type' => 'DTS\eBaySDK\Trading\Types\TransactionReferenceType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ReferenceID'
        ],
        'FeeOrCreditAmount' => [
            'type' => 'DTS\eBaySDK\Trading\Types\AmountType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'FeeOrCreditAmount'
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
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}