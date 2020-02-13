<?php

use GroupDocs\Conversion\Model;
use GroupDocs\Conversion\Model\Requests;

// This example demonstrates how to convert consecutive pages from word processing document into pdf document
class ConvertConsecutivePages {
    public static function Run() {
        // Create necessary API instances       
        $apiInstance = Utils::GetConvertApiInstance();        
        
        // Prepare convert settings
        $settings = new Model\ConvertSettings();
        $settings->setStorageName(Utils::$MyStorage);
        $settings->setFilePath("WordProcessing/four-pages.docx");
        $settings->setFormat("pdf");

        $convertOptions = new Model\PdfConvertOptions();
        $convertOptions->setFromPage(2);
        $convertOptions->setPagesCount(2);

        $settings->setConvertOptions($convertOptions);
        $settings->setOutputPath("converted/two-pages.pdf");

        // Convert
        $result = $apiInstance->convertDocument(new Requests\ConvertDocumentRequest($settings));

        // Done
        echo "Document converted: " . $result[0]->getUrl();
        echo "\n";                            
    }
}
