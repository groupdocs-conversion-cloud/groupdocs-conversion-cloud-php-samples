<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetFileApiInstance();

		$fileStream = readfile("..\\resources\\conversions\\one-page.docx");
		$request = new GroupDocs\Conversion\Model\Requests\UploadFileRequest("conversions\\one-page1.docx", $fileStream, CommonUtils::$MyStorage, null);
		$response = $apiInstance->downloadFile($request);
		
		echo "Expected response type is FilesUploadResult: ", $response;
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>