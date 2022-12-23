<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for confirmDeliverySlotResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:confirmDeliverySlotResponse
 * @subpackage Structs
 */
class ConfirmDeliverySlotResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ServiceResponse|null
     */
    protected ?\StructType\ServiceResponse $return = null;
    /**
     * Constructor method for confirmDeliverySlotResponse
     * @uses ConfirmDeliverySlotResponse::setReturn()
     * @param \StructType\ServiceResponse $return
     */
    public function __construct(?\StructType\ServiceResponse $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\ServiceResponse|null
     */
    public function getReturn(): ?\StructType\ServiceResponse
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\ServiceResponse $return
     * @return \StructType\ConfirmDeliverySlotResponse
     */
    public function setReturn(?\StructType\ServiceResponse $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
