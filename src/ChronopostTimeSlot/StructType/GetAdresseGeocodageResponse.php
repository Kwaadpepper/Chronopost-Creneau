<?php

declare(strict_types=1);

namespace ChronopostTimeSlot\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for getAdresseGeocodageResponse StructType
 * Meta information extracted from the WSDL
 * - type: tns:getAdresseGeocodageResponse
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAdresseGeocodageResponse extends AbstractStructBase
{
    /**
     * The return
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \ChronopostTimeSlot\StructType\GeocodageResponse|null
     */
    protected ?\ChronopostTimeSlot\StructType\GeocodageResponse $return = null;
    /**
     * Constructor method for getAdresseGeocodageResponse
     * @uses GetAdresseGeocodageResponse::setReturn()
     * @param \ChronopostTimeSlot\StructType\GeocodageResponse $return
     */
    public function __construct(?\ChronopostTimeSlot\StructType\GeocodageResponse $return = null)
    {
        $this
            ->setReturn($return);
    }
    /**
     * Get return value
     * @return \ChronopostTimeSlot\StructType\GeocodageResponse|null
     */
    public function getReturn(): ?\ChronopostTimeSlot\StructType\GeocodageResponse
    {
        return $this->return;
    }
    /**
     * Set return value
     * @param \ChronopostTimeSlot\StructType\GeocodageResponse $return
     * @return \ChronopostTimeSlot\StructType\GetAdresseGeocodageResponse
     */
    public function setReturn(?\ChronopostTimeSlot\StructType\GeocodageResponse $return = null): self
    {
        $this->return = $return;
        
        return $this;
    }
}
