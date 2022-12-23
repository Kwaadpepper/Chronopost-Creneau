<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for serviceResponse StructType
 * @subpackage Structs
 */
class ServiceResponse extends WsResponse
{
    /**
     * The productService
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\ProductService|null
     */
    protected ?\StructType\ProductService $productService = null;
    /**
     * Constructor method for serviceResponse
     * @uses ServiceResponse::setProductService()
     * @param \StructType\ProductService $productService
     */
    public function __construct(?\StructType\ProductService $productService = null)
    {
        $this
            ->setProductService($productService);
    }
    /**
     * Get productService value
     * @return \StructType\ProductService|null
     */
    public function getProductService(): ?\StructType\ProductService
    {
        return $this->productService;
    }
    /**
     * Set productService value
     * @param \StructType\ProductService $productService
     * @return \StructType\ServiceResponse
     */
    public function setProductService(?\StructType\ProductService $productService = null): self
    {
        $this->productService = $productService;
        
        return $this;
    }
}
