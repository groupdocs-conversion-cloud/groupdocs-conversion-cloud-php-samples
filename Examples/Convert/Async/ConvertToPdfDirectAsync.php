<?php

use GroupDocs\Conversion\Model;
use GroupDocs\Conversion\Model\Requests;

// This example demonstrates how to convert document without using cloud storage asyncronously
class ConvertToPdfDirectAsync {
    public static function Run() {
        // Create necessary API instances       
        $apiInstance = Utils::GetAsyncApiInstance();       
        
        // Prepare request
        $filePath = substr_replace(dirname(realpath(__DIR__)), '', -strlen('\Convert')) . '\Resources\WordProcessing\four-pages.docx';
        $request = new Requests\StartConvertRequest("pdf", $filePath);

        // Convert
        $operationId = $apiInstance->startConvert($request);
        $operationId = trim($operationId, '"');
        echo "Operaion ID: " . $operationId;
        echo "\n";

        while (true) {
            sleep(1);

            $result = $apiInstance->getOperationStatus(new Requests\GetOperationStatusRequest($operationId));
            if ($result->getStatus() == Model\OperationResult::STATUS_FINISHED)
            {
                $result = $apiInstance->getOperationResult(new Requests\GetOperationResultRequest($operationId));
                echo "Document converted successfully: " . $result->getSize();
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
