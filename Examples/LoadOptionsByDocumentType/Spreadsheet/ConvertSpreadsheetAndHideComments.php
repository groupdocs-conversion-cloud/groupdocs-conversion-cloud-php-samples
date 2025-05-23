<?php

use GroupDocs\Conversion\Model;
use GroupDocs\Conversion\Model\Requests;

// This example demonstrates how to convert spreadsheet document to pdf with advanced options
class ConvertSpreadsheetAndHideComments {
    public static function Run() {
        // Create necessary API instances       
        $apiInstance = Utils::GetConvertApiInstance();        
        
        // Prepare convert settings
        $settings = new Model\ConvertSettings();
        $settings->setStorageName(Utils::$MyStorage);
        $settings->setFilePath("Spreadsheet/sample.xlsx");
		$settings->setFormat("pdf");
		
        $loadOptions = new Model\SpreadsheetLoadOptions();		
		$loadOptions->setPrintComments(Model\SpreadsheetLoadOptions::PRINT_COMMENTS_PRINT_NO_COMMENTS);
		$loadOptions->setOnePagePerSheet(true);		

        $settings->setLoadOptions($loadOptions);
        $settings->setOutputPath("converted");

        // Convert
        $result = $apiInstance->convertDocument(new Requests\ConvertDocumentRequest($settings));

        // Done
        echo "Document converted: " . $result[0]->getUrl();
        echo "\n";                            
    }
}
