<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://ws.chronopost.fr/rdv-cxf/services/CreneauServiceWS?wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://ws.chronopost.fr/rdv-cxf/services/CreneauServiceWS?wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \ChronopostTimeSlot\ClassMap::get(),
];
/**
 * Samples for Confirm ServiceType
 */
$confirm = new \ChronopostTimeSlot\ServiceType\Confirm($options);
$confirm->setSoapHeaderAccountNumber($accountNumber);
$confirm->setSoapHeaderPassword($password);
/**
 * Sample call for confirmDeliverySlotV2 operation/method
 */
if ($confirm->confirmDeliverySlotV2(new \ChronopostTimeSlot\StructType\ConfirmDeliverySlotV2()) !== false) {
    print_r($confirm->getResult());
} else {
    print_r($confirm->getLastError());
}
/**
 * Sample call for confirmDeliverySlot operation/method
 */
if ($confirm->confirmDeliverySlot(new \ChronopostTimeSlot\StructType\ConfirmDeliverySlot()) !== false) {
    print_r($confirm->getResult());
} else {
    print_r($confirm->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \ChronopostTimeSlot\ServiceType\Get($options);
$get->setSoapHeaderAccountNumber($accountNumber);
$get->setSoapHeaderPassword($password);
/**
 * Sample call for getAdresseGeocodage operation/method
 */
if ($get->getAdresseGeocodage(new \ChronopostTimeSlot\StructType\GetAdresseGeocodage()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Search ServiceType
 */
$search = new \ChronopostTimeSlot\ServiceType\Search($options);
$search->setSoapHeaderAccountNumber($accountNumber);
$search->setSoapHeaderPassword($password);
/**
 * Sample call for searchDeliverySlot operation/method
 */
if ($search->searchDeliverySlot(new \ChronopostTimeSlot\StructType\SearchDeliverySlot()) !== false) {
    print_r($search->getResult());
} else {
    print_r($search->getLastError());
}
