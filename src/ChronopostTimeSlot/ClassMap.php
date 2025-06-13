<?php

declare(strict_types=1);

namespace ChronopostTimeSlot;

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
            'confirmDeliverySlotV2' => '\\ChronopostTimeSlot\\StructType\\ConfirmDeliverySlotV2',
            'confirmDeliverySlotV2Response' => '\\ChronopostTimeSlot\\StructType\\ConfirmDeliverySlotV2Response',
            'serviceResponseV2' => '\\ChronopostTimeSlot\\StructType\\ServiceResponseV2',
            'wsResponse' => '\\ChronopostTimeSlot\\StructType\\WsResponse',
            'productServiceV2' => '\\ChronopostTimeSlot\\StructType\\ProductServiceV2',
            'productService' => '\\ChronopostTimeSlot\\StructType\\ProductService',
            'getAdresseGeocodage' => '\\ChronopostTimeSlot\\StructType\\GetAdresseGeocodage',
            'getAdresseGeocodageResponse' => '\\ChronopostTimeSlot\\StructType\\GetAdresseGeocodageResponse',
            'geocodageResponse' => '\\ChronopostTimeSlot\\StructType\\GeocodageResponse',
            'searchDeliverySlot' => '\\ChronopostTimeSlot\\StructType\\SearchDeliverySlot',
            'searchDeliverySlotResponse' => '\\ChronopostTimeSlot\\StructType\\SearchDeliverySlotResponse',
            'deliverySlotResponse' => '\\ChronopostTimeSlot\\StructType\\DeliverySlotResponse',
            'slot' => '\\ChronopostTimeSlot\\StructType\\Slot',
            'confirmDeliverySlot' => '\\ChronopostTimeSlot\\StructType\\ConfirmDeliverySlot',
            'confirmDeliverySlotResponse' => '\\ChronopostTimeSlot\\StructType\\ConfirmDeliverySlotResponse',
            'serviceResponse' => '\\ChronopostTimeSlot\\StructType\\ServiceResponse',
        ];
    }
}
