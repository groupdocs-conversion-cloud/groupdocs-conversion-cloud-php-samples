<?php

use GroupDocs\Conversion\Model;
use GroupDocs\Conversion\Model\Requests;

// This example demonstrates how to convert word processing document into pdf document with adding watermark
class AddWatermark {
    public static function Run() {
        // Create necessary API instances       
        $apiInstance = Utils::GetConvertApiInstance();        
        
        // Prepare convert settings
        $settings = new Model\ConvertSettings();
        $settings->setStorageName(Utils::$MyStorage);
        $settings->setFilePath("WordProcessing/four-pages.docx");
        $settings->setFormat("pdf");
        $watermark = new Model\WatermarkOptions();
        $watermark->setText("Sample watermark");
        $watermark->setColor("Red");
        $watermark->setWidth(100);
        $watermark->setHeight(100);
        $watermark->setBackground(true);

        $convertOptions = new Model\PdfConvertOptions();
        $convertOptions->setWatermarkOptions($watermark);

        $settings->setConvertOptions($convertOptions);
        $settings->setOutputPath("converted");

        // Convert
        $result = $apiInstance->convertDocument(new Requests\ConvertDocumentRequest($settings));

        // Done
        echo "Document converted: " . $result[0]->getUrl();
        echo "\n";                            
    }
}
