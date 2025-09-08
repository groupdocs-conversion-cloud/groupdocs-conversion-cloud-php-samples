<?php

use GroupDocs\Conversion\Model;
use GroupDocs\Conversion\Model\Requests;

// This example demonstrates how to convert word processing document into pdf document asyncronously
class ConvertToPdfAsync {
    public static function Run() {
        // Create necessary API instances       
        $apiInstance = Utils::GetAsyncApiInstance();        
        
        // Prepare convert settings
        $settings = new Model\ConvertSettings();
        $settings->setStorageName(Utils::$MyStorage);
        $settings->setFilePath("WordProcessing/password-protected.docx");
        $settings->setFormat("pdf");
        $loadOptions = new Model\WordProcessingLoadOptions();
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
        $settings->setOutputPath("converted");

        // Convert
        $operationId = $apiInstance->startConvertAndSave(new Requests\StartConvertAndSaveRequest($settings));
        $operationId = trim($operationId, '"');
        echo "Operaion ID: " . $operationId;
        echo "\n";

        while (true) {
            sleep(1);

            $result = $apiInstance->getOperationStatus(new Requests\GetOperationStatusRequest($operationId));
            if ($result->getStatus() == Model\OperationResult::STATUS_FINISHED)
            {
                echo "Document converted successfully: " . $result->getResult()[0]->getUrl();
                echo "\n";
                break;
            }
            else if ($result->getStatus() == Model\OperationResult::STATUS_FAILED) {
                echo "Document converted failed: " . $result->getError();
                echo "\n";
                break;
            }
            else
            {
                echo "Operation status: " . $result.getStatus();
            }
        }                       
    }
}
