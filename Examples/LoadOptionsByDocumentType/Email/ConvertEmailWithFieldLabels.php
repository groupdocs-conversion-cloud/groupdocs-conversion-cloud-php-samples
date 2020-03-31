<?php

use GroupDocs\Conversion\Model;
use GroupDocs\Conversion\Model\Requests;

// This example demonstrates how to convert msg document into pdf document
// and replace field labels to custom values
class ConvertEmailWithFieldLabels {
    public static function Run() {
        // Create necessary API instances       
        $apiInstance = Utils::GetConvertApiInstance();        
        
        // Prepare convert settings
        $settings = new Model\ConvertSettings();
        $settings->setStorageName(Utils::$MyStorage);
        $settings->setFilePath("Email/sample.msg");
		$settings->setFormat("pdf");
		
        $loadOptions = new Model\EmailLoadOptions();
        $fieldLabel = new Model\FieldLabel();
        $fieldLabel->setField(Model\FieldLabel::FIELD_FROM);
        $fieldLabel->setLabel("Sender");
		$loadOptions->setFieldLabels([$fieldLabel]);

        $settings->setLoadOptions($loadOptions);
        $settings->setOutputPath("converted");

        // Convert
        $result = $apiInstance->convertDocument(new Requests\ConvertDocumentRequest($settings));

        // Done
        echo "Document converted: " . $result[0]->getUrl();
        echo "\n";                            
    }
}
