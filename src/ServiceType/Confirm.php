<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Confirm ServiceType
 * @subpackage Services
 */
class Confirm extends AbstractSoapClientBase
{
    /**
     * Sets the AccountNumber SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param string $accountNumber
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return \ServiceType\Confirm
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
     * @return \ServiceType\Confirm
     */
    public function setSoapHeaderPassword(string $password, string $namespace = 'http://cxf.soap.ws.creneau.chronopost.fr/', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'password', $password, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named confirmDeliverySlotV2
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: accountNumber, password
     * - SOAPHeaderNamespaces: http://cxf.soap.ws.creneau.chronopost.fr/, http://cxf.soap.ws.creneau.chronopost.fr/
     * - SOAPHeaderTypes: string, string
     * - SOAPHeaders: required, required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ConfirmDeliverySlotV2 $parameters
     * @return \StructType\ConfirmDeliverySlotV2Response|bool
     */
    public function confirmDeliverySlotV2(\StructType\ConfirmDeliverySlotV2 $parameters)
    {
        try {
            $this->setResult($resultConfirmDeliverySlotV2 = $this->getSoapClient()->__soapCall('confirmDeliverySlotV2', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultConfirmDeliverySlotV2;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named confirmDeliverySlot
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: accountNumber, password
     * - SOAPHeaderNamespaces: http://cxf.soap.ws.creneau.chronopost.fr/, http://cxf.soap.ws.creneau.chronopost.fr/
     * - SOAPHeaderTypes: string, string
     * - SOAPHeaders: required, required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ConfirmDeliverySlot $parameters
     * @return \StructType\ConfirmDeliverySlotResponse|bool
     */
    public function confirmDeliverySlot(\StructType\ConfirmDeliverySlot $parameters)
    {
        try {
            $this->setResult($resultConfirmDeliverySlot = $this->getSoapClient()->__soapCall('confirmDeliverySlot', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultConfirmDeliverySlot;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\ConfirmDeliverySlotResponse|\StructType\ConfirmDeliverySlotV2Response
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
