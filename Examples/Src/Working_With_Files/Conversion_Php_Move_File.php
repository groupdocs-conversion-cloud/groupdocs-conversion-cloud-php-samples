<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetFileApiInstance();

		$request = new GroupDocs\Conversion\Model\Requests\MoveFileRequest("conversions\\one-page.docx", "conversions1\\one-page-copied.docx", CommonUtils::$MyStorage, CommonUtils::$MyStorage);
		$apiInstance->moveFile($request);
		
		echo "Expected response type is Void: 'conversions/one-page.docx' file moved as 'conversions1/one-page-copied.docx'.";
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>