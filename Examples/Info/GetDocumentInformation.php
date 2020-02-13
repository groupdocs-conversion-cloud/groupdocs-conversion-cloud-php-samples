<?php

use GroupDocs\Conversion\Model;
use GroupDocs\Conversion\Model\Requests;

// This example demonstrates how to get document info.
class GetDocumentInformation {
    public static function Run() {
        $infoApi = Utils::GetInfoApiInstance();
        $response = $infoApi->getDocumentMetadata(new Requests\getDocumentMetadataRequest("WordProcessing/four-pages.docx"));
        echo "Page Count = " . $response->getPageCount();
        echo "\n";                            
    }
}
