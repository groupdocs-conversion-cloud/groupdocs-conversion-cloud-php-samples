<?php

use GroupDocs\Conversion\Model;
use GroupDocs\Conversion\Model\Requests;

// This example demonstrates how to convert msg document into pdf document
class ConvertEmailWithAlteringFieldsVisibility {
    public static function Run() {
        // Create necessary API instances       
        $apiInstance = Utils::GetConvertApiInstance();        
        
        // Prepare convert settings
        $settings = new Model\ConvertSettings();
        $settings->setStorageName(Utils::$MyStorage);
        $settings->setFilePath("Email/sample.msg");
		$settings->setFormat("pdf");
		
        $loadOptions = new Model\EmailLoadOptions();
		$loadOptions->setDisplayHeader(true);
		$loadOptions->setDisplayFromEmailAddress(false);
		$loadOptions->setDisplayToEmailAddress(false);
		$loadOptions->setDisplayEmailAddress(false);
		$loadOptions->setDisplayCcEmailAddress(false);
		$loadOptions->setDisplayBccEmailAddress(false);		

        $settings->setLoadOptions($loadOptions);
        $settings->setOutputPath("converted");

        // Convert
        $result = $apiInstance->convertDocument(new Requests\ConvertDocumentRequest($settings));

        // Done
        echo "Document converted: " . $result[0]->getUrl();
        echo "\n";                            
    }
}
