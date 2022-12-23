<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAdresseGeocodageResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getAdresseGeocodageResponse
 * @subpackage Structs
 */
class GetAdresseGeocodageResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \StructType\GeocodageResponse|null
     */
    protected ?\StructType\GeocodageResponse $return = null;
    /**
     * Constructor method for getAdresseGeocodageResponse
     * @uses GetAdresseGeocodageResponse::setReturn()
     * @param \StructType\GeocodageResponse $return
     */
    public function __construct(?\StructType\GeocodageResponse $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \StructType\GeocodageResponse|null
     */
    public function getReturn(): ?\StructType\GeocodageResponse
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \StructType\GeocodageResponse $return
     * @return \StructType\GetAdresseGeocodageResponse
     */
    public function setReturn(?\StructType\GeocodageResponse $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
