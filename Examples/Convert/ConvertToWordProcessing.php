<?php

use GroupDocs\Conversion\Model;
use GroupDocs\Conversion\Model\Requests;

// This example demonstrates how to convert pdf document into word processing document
class ConvertToWordProcessing {
    public static function Run() {
        // Create necessary API instances       
        $apiInstance = Utils::GetConvertApiInstance();        
        
        // Prepare convert settings
        $settings = new Model\ConvertSettings();
        $settings->setStorageName(Utils::$MyStorage);
        $settings->setFilePath("Pdf/sample.pdf");
        $settings->setFormat("docx");
        $loadOptions = new Model\PdfLoadOptions();
        $loadOptions->setPassword("");
        $loadOptions->setHidePdfAnnotations(true);
        $loadOptions->setRemoveEmbeddedFiles(false);
        $loadOptions->setFlattenAllFields(true);

        $settings->setLoadOptions($loadOptions);
        $settings->setConvertOptions(new Model\DocxConvertOptions());
        $settings->setOutputPath("converted");

        // Convert
        $result = $apiInstance->convertDocument(new Requests\ConvertDocumentRequest($settings));

        // Done
        echo "Document converted: " . $result[0]->getUrl();
        echo "\n";                            
    }
}
