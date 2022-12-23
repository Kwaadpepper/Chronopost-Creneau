<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for confirmDeliverySlotV2Response StructType
 * Meta information extracted from the WSDL
 * - type: tns:confirmDeliverySlotV2Response
 * @subpackage Structs
 */
class ConfirmDeliverySlotV2Response extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ServiceResponseV2|null
     */
    protected ?\StructType\ServiceResponseV2 $return = null;
    /**
     * Constructor method for confirmDeliverySlotV2Response
     * @uses ConfirmDeliverySlotV2Response::setReturn()
     * @param \StructType\ServiceResponseV2 $return
     */
    public function __construct(?\StructType\ServiceResponseV2 $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ServiceResponseV2|null
     */
    public function getReturn(): ?\StructType\ServiceResponseV2
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ServiceResponseV2 $return
     * @return \StructType\ConfirmDeliverySlotV2Response
     */
    public function setReturn(?\StructType\ServiceResponseV2 $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
