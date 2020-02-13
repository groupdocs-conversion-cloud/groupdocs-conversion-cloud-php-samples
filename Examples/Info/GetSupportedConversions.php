<?php

use GroupDocs\Conversion\Model\Requests;

// This example demonstrates how to obtain all supported document conversions
class GetSupportedConversions {
    public static function Run() { 
        $infoApi = Utils::GetInfoApiInstance();

        $response = $infoApi->getSupportedConversionTypes(new Requests\GetSupportedConversionTypesRequest());
        
        echo "Number of conversions = " . count($response);
        echo "\n";
    }
}
