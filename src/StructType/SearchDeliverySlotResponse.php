<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for searchDeliverySlotResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:searchDeliverySlotResponse
 * @subpackage Structs
 */
class SearchDeliverySlotResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\DeliverySlotResponse|null
     */
    protected ?\StructType\DeliverySlotResponse $return = null;
    /**
     * Constructor method for searchDeliverySlotResponse
     * @uses SearchDeliverySlotResponse::setReturn()
     * @param \StructType\DeliverySlotResponse $return
     */
    public function __construct(?\StructType\DeliverySlotResponse $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\DeliverySlotResponse|null
     */
    public function getReturn(): ?\StructType\DeliverySlotResponse
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\DeliverySlotResponse $return
     * @return \StructType\SearchDeliverySlotResponse
     */
    public function setReturn(?\StructType\DeliverySlotResponse $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
