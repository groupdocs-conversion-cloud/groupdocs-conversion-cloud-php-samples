<?php

use GroupDocs\Conversion\Model;
use GroupDocs\Conversion\Model\Requests;

// This example demonstrates how to convert document without using cloud storage and using options
class ConvertToPdfDirectOptions {
    public static function Run() {
        // Create necessary API instances       
        $apiInstance = Utils::GetConvertApiInstance();        
        
        // Prepare request
        $filePath = dirname(realpath(__DIR__)) . '\Resources\WordProcessing\password-protected.docx';
        $loadOptions = new Model\DocxLoadOptions();
        $loadOptions->setFormat("docx");
        $loadOptions->setPassword("password");        
        $request = new Requests\ConvertDocumentDirectRequest("pdf", $filePath, null, null, $loadOptions);

        // Convert
        $result = $apiInstance->convertDocumentDirect($request);

        // Done
        echo "Document converted: " . $result->getSize();
        echo "\n";                            
    }
}
