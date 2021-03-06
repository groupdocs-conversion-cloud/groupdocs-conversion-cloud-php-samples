<?php

use GroupDocs\Conversion\Model;
use GroupDocs\Conversion\Model\Requests;

// This example demonstrates how to convert txt document to pdf with advanced options
class ConvertTxtByControllingLeadingSpacesBehavior {
    public static function Run() {
        // Create necessary API instances       
        $apiInstance = Utils::GetConvertApiInstance();        
        
        // Prepare convert settings
        $settings = new Model\ConvertSettings();
        $settings->setStorageName(Utils::$MyStorage);
        $settings->setFilePath("Text/sample.txt");
		$settings->setFormat("pdf");
		
        $loadOptions = new Model\TxtLoadOptions();		
		$loadOptions->setLeadingSpacesOptions(Model\TxtLoadOptions::LEADING_SPACES_OPTIONS_CONVERT_TO_INDENT);
		$loadOptions->setDetectNumberingWithWhitespaces(true);		

        $settings->setLoadOptions($loadOptions);
        $settings->setOutputPath("converted");

        // Convert
        $result = $apiInstance->convertDocument(new Requests\ConvertDocumentRequest($settings));

        // Done
        echo "Document converted: " . $result[0]->getUrl();
        echo "\n";                            
    }
}
