<?php

use GroupDocs\Conversion\Model;
use GroupDocs\Conversion\Model\Requests;

// This example demonstrates how to convert msg document into pdf document
class ConvertEmailWithTimezoneOffset {
    public static function Run() {
        // Create necessary API instances       
        $apiInstance = Utils::GetConvertApiInstance();        
        
        // Prepare convert settings
        $settings = new Model\ConvertSettings();
        $settings->setStorageName(Utils::$MyStorage);
        $settings->setFilePath("Email/sample.msg");
		$settings->setFormat("pdf");
		
        $loadOptions = new Model\EmailLoadOptions();
		$loadOptions->setTimeZoneOffset("05:00:00");

        $settings->setLoadOptions($loadOptions);
        $settings->setOutputPath("converted");

        // Convert
        $result = $apiInstance->convertDocument(new Requests\ConvertDocumentRequest($settings));

        // Done
        echo "Document converted: " . $result[0]->getUrl();
        echo "\n";                            
    }
}
