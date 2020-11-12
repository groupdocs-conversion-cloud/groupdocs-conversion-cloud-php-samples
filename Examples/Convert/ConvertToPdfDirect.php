<?php

use GroupDocs\Conversion\Model;
use GroupDocs\Conversion\Model\Requests;

// This example demonstrates how to convert document without using cloud storage
class ConvertToPdfDirect {
    public static function Run() {
        // Create necessary API instances       
        $apiInstance = Utils::GetConvertApiInstance();        
        
        // Prepare request
        $filePath = dirname(realpath(__DIR__)) . '\Resources\WordProcessing\four-pages.docx';
        $request = new Requests\ConvertDocumentDirectRequest("pdf", $filePath);

        // Convert
        $result = $apiInstance->convertDocumentDirect($request);

        // Done
        echo "Document converted: " . $result->getSize();
        echo "\n";                            
    }
}
