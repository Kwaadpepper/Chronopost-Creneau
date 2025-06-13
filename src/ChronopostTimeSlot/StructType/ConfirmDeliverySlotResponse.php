<?php

declare(strict_types=1);

namespace ChronopostTimeSlot\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for confirmDeliverySlotResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:confirmDeliverySlotResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ConfirmDeliverySlotResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostTimeSlot\StructType\ServiceResponse|null
     */
    protected ?\ChronopostTimeSlot\StructType\ServiceResponse $return = null;
    /**
     * Constructor method for confirmDeliverySlotResponse
     * @uses ConfirmDeliverySlotResponse::setReturn()
     * @param \ChronopostTimeSlot\StructType\ServiceResponse $return
     */
    public function __construct(?\ChronopostTimeSlot\StructType\ServiceResponse $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostTimeSlot\StructType\ServiceResponse|null
     */
    public function getReturn(): ?\ChronopostTimeSlot\StructType\ServiceResponse
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostTimeSlot\StructType\ServiceResponse $return
     * @return \ChronopostTimeSlot\StructType\ConfirmDeliverySlotResponse
     */
    public function setReturn(?\ChronopostTimeSlot\StructType\ServiceResponse $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
