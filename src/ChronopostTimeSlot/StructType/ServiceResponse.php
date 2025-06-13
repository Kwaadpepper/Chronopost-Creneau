<?php

declare(strict_types=1);

namespace ChronopostTimeSlot\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for serviceResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ServiceResponse extends WsResponse
{
    /**
     * The productService
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostTimeSlot\StructType\ProductService|null
     */
    protected ?\ChronopostTimeSlot\StructType\ProductService $productService = null;
    /**
     * Constructor method for serviceResponse
     * @uses ServiceResponse::setProductService()
     * @param \ChronopostTimeSlot\StructType\ProductService $productService
     */
    public function __construct(?\ChronopostTimeSlot\StructType\ProductService $productService = null)
    {
        $this
            ->setProductService($productService);
    }
    /**
     * Get productService value
     * @return \ChronopostTimeSlot\StructType\ProductService|null
     */
    public function getProductService(): ?\ChronopostTimeSlot\StructType\ProductService
    {
        return $this->productService;
    }
    /**
     * Set productService value
     * @param \ChronopostTimeSlot\StructType\ProductService $productService
     * @return \ChronopostTimeSlot\StructType\ServiceResponse
     */
    public function setProductService(?\ChronopostTimeSlot\StructType\ProductService $productService = null): self
    {
        $this->productService = $productService;
        
        return $this;
    }
}
