<?php

use GroupDocs\Conversion\Model;
use GroupDocs\Conversion\Model\Requests;

// This example demonstrates how to convert word processing document into pdf document stream
class ConvertToPdfResponseBody {
    public static function Run() {
        // Create necessary API instances       
        $apiInstance = Utils::GetConvertApiInstance();        
        
        // Prepare convert settings
        $settings = new Model\ConvertSettings();
        $settings->setStorageName(Utils::$MyStorage);
        $settings->setFilePath("WordProcessing/password-protected.docx");
        $settings->setFormat("pdf");
        $loadOptions = new Model\DocxLoadOptions();
        $loadOptions->setPassword("password");
        $settings->setLoadOptions($loadOptions);

        $convertOptions = new Model\PdfConvertOptions();
        $convertOptions->setCenterWindow(true);
        $convertOptions->setCompressImages(false);
        $convertOptions->setDisplayDocTitle(true);
        $convertOptions->setDpi(1024);
        $convertOptions->setFitWindow(false);
        $convertOptions->setFromPage(1);
        $convertOptions->setGrayscale(false);
        $convertOptions->setImageQuality(100);
        $convertOptions->setLinearize(false);
        $convertOptions->setMarginTop(5);
        $convertOptions->setMarginLeft(5);
        $convertOptions->setPassword("password");
        $convertOptions->setUnembedFonts(true);
        $convertOptions->setRemoveUnusedStreams(true);
        $convertOptions->setRemoveUnusedObjects(true);
        $convertOptions->setRemovePdfaCompliance(false);

        $settings->setConvertOptions($convertOptions);
        $settings->setOutputPath(null); // set OutputPath as null will result the output as document Stream

        // Convert
        $result = $apiInstance->convertDocumentDownload(new Requests\ConvertDocumentRequest($settings));

        // Done
        echo "Document converted: " . $result->getSize();
        echo "\n";                            
    }
}
