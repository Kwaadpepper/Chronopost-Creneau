<?php

declare(strict_types=1);

namespace ChronopostTimeSlot\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchDeliverySlotResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:searchDeliverySlotResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SearchDeliverySlotResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostTimeSlot\StructType\DeliverySlotResponse|null
     */
    protected ?\ChronopostTimeSlot\StructType\DeliverySlotResponse $return = null;
    /**
     * Constructor method for searchDeliverySlotResponse
     * @uses SearchDeliverySlotResponse::setReturn()
     * @param \ChronopostTimeSlot\StructType\DeliverySlotResponse $return
     */
    public function __construct(?\ChronopostTimeSlot\StructType\DeliverySlotResponse $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostTimeSlot\StructType\DeliverySlotResponse|null
     */
    public function getReturn(): ?\ChronopostTimeSlot\StructType\DeliverySlotResponse
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostTimeSlot\StructType\DeliverySlotResponse $return
     * @return \ChronopostTimeSlot\StructType\SearchDeliverySlotResponse
     */
    public function setReturn(?\ChronopostTimeSlot\StructType\DeliverySlotResponse $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
