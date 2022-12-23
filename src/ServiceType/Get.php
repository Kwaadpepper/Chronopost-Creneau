<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Sets the AccountNumber SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param string $accountNumber
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \ServiceType\Get
     */
    public function setSoapHeaderAccountNumber(string $accountNumber, string $namespace = 'http://cxf.soap.ws.creneau.chronopost.fr/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'accountNumber', $accountNumber, $mustUnderstand, $actor);
    }
    /**
     * Sets the Password SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param string $password
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \ServiceType\Get
     */
    public function setSoapHeaderPassword(string $password, string $namespace = 'http://cxf.soap.ws.creneau.chronopost.fr/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'password', $password, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named getAdresseGeocodage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: accountNumber, password
     * - SOAPHeaderNamespaces: http://cxf.soap.ws.creneau.chronopost.fr/, http://cxf.soap.ws.creneau.chronopost.fr/
     * - SOAPHeaderTypes: string, string
     * - SOAPHeaders: required, required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAdresseGeocodage $parameters
     * @return \StructType\GetAdresseGeocodageResponse|bool
     */
    public function getAdresseGeocodage(\StructType\GetAdresseGeocodage $parameters)
    {
        try {
            $this->setResult($resultGetAdresseGeocodage = $this->getSoapClient()->__soapCall('getAdresseGeocodage', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAdresseGeocodage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\GetAdresseGeocodageResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
