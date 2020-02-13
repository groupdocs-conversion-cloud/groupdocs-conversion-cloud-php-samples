<?php

use GroupDocs\Conversion\Model;
use GroupDocs\Conversion\Model\Requests;

// This example demonstrates how to convert word processing document into html document
class ConvertToHtml {
    public static function Run() {
        // Create necessary API instances       
        $apiInstance = Utils::GetConvertApiInstance();        
        
        // Prepare convert settings
        $settings = new Model\ConvertSettings();
        $settings->setStorageName(Utils::$MyStorage);
        $settings->setFilePath("WordProcessing/four-pages.docx");
        $settings->setFormat("html");

        $convertOptions = new Model\HtmlConvertOptions();
        $convertOptions->setFromPage(1);
        $convertOptions->setPagesCount(1);
        $convertOptions->setFixedLayout(true);

        $settings->setConvertOptions($convertOptions);
        $settings->setOutputPath("converted");

        // Convert
        $result = $apiInstance->convertDocument(new Requests\ConvertDocumentRequest($settings));

        // Done
        echo "Document converted: " . $result[0]->getUrl();
        echo "\n";                            
    }
}
