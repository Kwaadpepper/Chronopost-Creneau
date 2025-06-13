<?php

declare(strict_types=1);

namespace ChronopostTimeSlot\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for serviceResponseV2 StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ServiceResponseV2 extends WsResponse
{
    /**
     * The productServiceV2
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostTimeSlot\StructType\ProductServiceV2|null
     */
    protected ?\ChronopostTimeSlot\StructType\ProductServiceV2 $productServiceV2 = null;
    /**
     * Constructor method for serviceResponseV2
     * @uses ServiceResponseV2::setProductServiceV2()
     * @param \ChronopostTimeSlot\StructType\ProductServiceV2 $productServiceV2
     */
    public function __construct(?\ChronopostTimeSlot\StructType\ProductServiceV2 $productServiceV2 = null)
    {
        $this
            ->setProductServiceV2($productServiceV2);
    }
    /**
     * Get productServiceV2 value
     * @return \ChronopostTimeSlot\StructType\ProductServiceV2|null
     */
    public function getProductServiceV2(): ?\ChronopostTimeSlot\StructType\ProductServiceV2
    {
        return $this->productServiceV2;
    }
    /**
     * Set productServiceV2 value
     * @param \ChronopostTimeSlot\StructType\ProductServiceV2 $productServiceV2
     * @return \ChronopostTimeSlot\StructType\ServiceResponseV2
     */
    public function setProductServiceV2(?\ChronopostTimeSlot\StructType\ProductServiceV2 $productServiceV2 = null): self
    {
        $this->productServiceV2 = $productServiceV2;
        
        return $this;
    }
}
