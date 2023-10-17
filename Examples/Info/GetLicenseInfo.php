<?php

use GroupDocs\Conversion\Model;
use GroupDocs\Conversion\Model\Requests;

// This example demonstrates how to get metered license information.
class GetLicenseInfo {
    public static function Run() {
        $licenseApi = Utils::GetLicenseApiInstance();
        $result = $licenseApi->getLicenseInfo();
        echo "Is licensed: " . $result->getIsLicensed();
        echo "\n";                            
    }
}
