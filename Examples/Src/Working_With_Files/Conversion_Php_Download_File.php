<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetFileApiInstance();

		$request = new GroupDocs\Conversion\Model\Requests\DownloadFileRequest("conversions\\one-page.docx", CommonUtils::$MyStorage, null);
		$response = $apiInstance->downloadFile($request);
		
		echo "Expected response type is File: ", strlen($response);
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>