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
 * @property \DTS\eBaySDK\Trading\Enums\PaymentStatusCodeType $eBayPaymentStatus
 * @property \DTS\eBaySDK\Trading\Enums\CheckoutStatusCodeType $CheckoutStatus
 * @property \DateTime $LastTimeModified
 * @property \DTS\eBaySDK\Trading\Enums\BuyerPaymentMethodCodeType $PaymentMethodUsed
 * @property \DTS\eBaySDK\Trading\Enums\CompleteStatusCodeType $CompleteStatus
 * @property boolean $BuyerSelectedShipping
 * @property \DTS\eBaySDK\Trading\Enums\PaymentHoldStatusCodeType $PaymentHoldStatus
 * @property boolean $IntegratedMerchantCreditCardEnabled
 * @property \DTS\eBaySDK\Trading\Enums\InquiryStatusCodeType $InquiryStatus
 * @property \DTS\eBaySDK\Trading\Enums\ReturnStatusCodeType $ReturnStatus
 * @property \DTS\eBaySDK\Trading\Enums\BuyerPaymentInstrumentCodeType $PaymentInstrument
 * @property \DTS\eBaySDK\Trading\Enums\DigitalStatusCodeType $DigitalStatus
 * @property \DTS\eBaySDK\Trading\Enums\CancelStatusCodeType $CancelStatus
 */
class TransactionStatusType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'eBayPaymentStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'eBayPaymentStatus'
        ],
        'CheckoutStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CheckoutStatus'
        ],
        'LastTimeModified' => [
            'type' => 'DateTime',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'LastTimeModified'
        ],
        'PaymentMethodUsed' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentMethodUsed'
        ],
        'CompleteStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CompleteStatus'
        ],
        'BuyerSelectedShipping' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'BuyerSelectedShipping'
        ],
        'PaymentHoldStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentHoldStatus'
        ],
        'IntegratedMerchantCreditCardEnabled' => [
            'type' => 'boolean',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'IntegratedMerchantCreditCardEnabled'
        ],
        'InquiryStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'InquiryStatus'
        ],
        'ReturnStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'ReturnStatus'
        ],
        'PaymentInstrument' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'PaymentInstrument'
        ],
        'DigitalStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'DigitalStatus'
        ],
        'CancelStatus' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'CancelStatus'
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
