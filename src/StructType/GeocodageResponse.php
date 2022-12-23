<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for geocodageResponse StructType
 * @subpackage Structs
 */
class GeocodageResponse extends WsResponse
{
    /**
     * The lat
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $lat = null;
    /**
     * The lon
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var float|null
     */
    protected ?float $lon = null;
    /**
     * The niveauQualite
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $niveauQualite = null;
    /**
     * Constructor method for geocodageResponse
     * @uses GeocodageResponse::setLat()
     * @uses GeocodageResponse::setLon()
     * @uses GeocodageResponse::setNiveauQualite()
     * @param float $lat
     * @param float $lon
     * @param int $niveauQualite
     */
    public function __construct(?float $lat = null, ?float $lon = null, ?int $niveauQualite = null)
    {
        $this
            ->setLat($lat)
            ->setLon($lon)
            ->setNiveauQualite($niveauQualite);
    }
    /**
     * Get lat value
     * @return float|null
     */
    public function getLat(): ?float
    {
        return $this->lat;
    }
    /**
     * Set lat value
     * @param float $lat
     * @return \StructType\GeocodageResponse
     */
    public function setLat(?float $lat = null): self
    {
        // validation for constraint: float
        if (!is_null($lat) && !(is_float($lat) || is_numeric($lat))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($lat, true), gettype($lat)), __LINE__);
        }
        $this->lat = $lat;
        
        return $this;
    }
    /**
     * Get lon value
     * @return float|null
     */
    public function getLon(): ?float
    {
        return $this->lon;
    }
    /**
     * Set lon value
     * @param float $lon
     * @return \StructType\GeocodageResponse
     */
    public function setLon(?float $lon = null): self
    {
        // validation for constraint: float
        if (!is_null($lon) && !(is_float($lon) || is_numeric($lon))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($lon, true), gettype($lon)), __LINE__);
        }
        $this->lon = $lon;
        
        return $this;
    }
    /**
     * Get niveauQualite value
     * @return int|null
     */
    public function getNiveauQualite(): ?int
    {
        return $this->niveauQualite;
    }
    /**
     * Set niveauQualite value
     * @param int $niveauQualite
     * @return \StructType\GeocodageResponse
     */
    public function setNiveauQualite(?int $niveauQualite = null): self
    {
        // validation for constraint: int
        if (!is_null($niveauQualite) && !(is_int($niveauQualite) || ctype_digit($niveauQualite))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($niveauQualite, true), gettype($niveauQualite)), __LINE__);
        }
        $this->niveauQualite = $niveauQualite;
        
        return $this;
    }
}
