<?php

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $infoApi = CommonUtils::GetInfoApiInstance();

	$request = new GroupDocs\Conversion\Model\Requests\GetDocumentMetadataRequest();
	$request->setStorageName(CommonUtils::$MyStorage);
	$request->setFilePath("conversions\\sample.docx");
		
    $response = $infoApi->getDocumentMetadata($request);

	echo "Expected response type is DocumentMetadata: ", $response[0]->getPageCount();
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}