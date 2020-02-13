<?php

use GroupDocs\Conversion\Model;
use GroupDocs\Conversion\Model\Requests;

// This example demonstrates how to convert word-processing document to pdf with advanced options
class ConvertWordProcessingByHidingComments {
    public static function Run() {
        // Create necessary API instances       
        $apiInstance = Utils::GetConvertApiInstance();        
        
        // Prepare convert settings
        $settings = new Model\ConvertSettings();
        $settings->setStorageName(Utils::$MyStorage);
        $settings->setFilePath("WordProcessing/with_tracked_changes.docx");
		$settings->setFormat("pdf");
		
        $loadOptions = new Model\WordProcessingLoadOptions();		
		$loadOptions->setHideComments(true);

        $settings->setLoadOptions($loadOptions);
        $settings->setOutputPath("converted");

        // Convert
        $result = $apiInstance->convertDocument(new Requests\ConvertDocumentRequest($settings));

        // Done
        echo "Document converted: " . $result[0]->getUrl();
        echo "\n";                            
    }
}
