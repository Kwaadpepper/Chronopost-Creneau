<?php

declare(strict_types=1);
/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'confirmDeliverySlotV2' => '\\StructType\\ConfirmDeliverySlotV2',
            'confirmDeliverySlotV2Response' => '\\StructType\\ConfirmDeliverySlotV2Response',
            'serviceResponseV2' => '\\StructType\\ServiceResponseV2',
            'wsResponse' => '\\StructType\\WsResponse',
            'productServiceV2' => '\\StructType\\ProductServiceV2',
            'productService' => '\\StructType\\ProductService',
            'getAdresseGeocodage' => '\\StructType\\GetAdresseGeocodage',
            'getAdresseGeocodageResponse' => '\\StructType\\GetAdresseGeocodageResponse',
            'geocodageResponse' => '\\StructType\\GeocodageResponse',
            'searchDeliverySlot' => '\\StructType\\SearchDeliverySlot',
            'searchDeliverySlotResponse' => '\\StructType\\SearchDeliverySlotResponse',
            'deliverySlotResponse' => '\\StructType\\DeliverySlotResponse',
            'slot' => '\\StructType\\Slot',
            'confirmDeliverySlot' => '\\StructType\\ConfirmDeliverySlot',
            'confirmDeliverySlotResponse' => '\\StructType\\ConfirmDeliverySlotResponse',
            'serviceResponse' => '\\StructType\\ServiceResponse',
        ];
    }
}
