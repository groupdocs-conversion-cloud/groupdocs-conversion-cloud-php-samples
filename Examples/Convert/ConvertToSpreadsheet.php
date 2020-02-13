<?php

use GroupDocs\Conversion\Model;
use GroupDocs\Conversion\Model\Requests;

// This example demonstrates how to convert word processing document into spreadsheet document
class ConvertToSpreadsheet {
    public static function Run() {
        // Create necessary API instances       
        $apiInstance = Utils::GetConvertApiInstance();        
        
        // Prepare convert settings
        $settings = new Model\ConvertSettings();
        $settings->setStorageName(Utils::$MyStorage);
        $settings->setFilePath("WordProcessing/four-pages.docx");
        $settings->setFormat("xlsx");

        $convertOptions = new Model\SpreadsheetConvertOptions();
        $convertOptions->setFromPage(2);
        $convertOptions->setPagesCount(1);
        $convertOptions->setZoom(150);

        $settings->setConvertOptions($convertOptions);
        $settings->setOutputPath("converted");

        // Convert
        $result = $apiInstance->convertDocument(new Requests\ConvertDocumentRequest($settings));

        // Done
        echo "Document converted: " . $result[0]->getUrl();
        echo "\n";                            
    }
}
