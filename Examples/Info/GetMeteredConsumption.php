<?php

use GroupDocs\Conversion\Model;
use GroupDocs\Conversion\Model\Requests;

// This example demonstrates how to get metered license consumption.
class GetMeteredConsumption {
    public static function Run() {
        $licenseApi = Utils::GetLicenseApiInstance();
        $result = $licenseApi->getConsumptionCredit();
        echo "Credit: " . $result->getCredit();
        echo "\n";                            
    }
}
