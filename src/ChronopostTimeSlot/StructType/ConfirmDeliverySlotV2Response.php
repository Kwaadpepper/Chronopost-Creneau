<?php

declare(strict_types=1);

namespace ChronopostTimeSlot\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for confirmDeliverySlotV2Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:confirmDeliverySlotV2Response
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ConfirmDeliverySlotV2Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostTimeSlot\StructType\ServiceResponseV2|null
     */
    protected ?\ChronopostTimeSlot\StructType\ServiceResponseV2 $return = null;
    /**
     * Constructor method for confirmDeliverySlotV2Response
     * @uses ConfirmDeliverySlotV2Response::setReturn()
     * @param \ChronopostTimeSlot\StructType\ServiceResponseV2 $return
     */
    public function __construct(?\ChronopostTimeSlot\StructType\ServiceResponseV2 $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostTimeSlot\StructType\ServiceResponseV2|null
     */
    public function getReturn(): ?\ChronopostTimeSlot\StructType\ServiceResponseV2
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostTimeSlot\StructType\ServiceResponseV2 $return
     * @return \ChronopostTimeSlot\StructType\ConfirmDeliverySlotV2Response
     */
    public function setReturn(?\ChronopostTimeSlot\StructType\ServiceResponseV2 $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
