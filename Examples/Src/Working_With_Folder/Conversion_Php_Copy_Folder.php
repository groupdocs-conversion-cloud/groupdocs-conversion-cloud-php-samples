<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetFolderApiInstance();

		$request = new GroupDocs\Conversion\Model\Requests\CopyFolderRequest("conversions", "conversions1", CommonUtils::$MyStorage, CommonUtils::$MyStorage);
		$apiInstance->copyFolder($request);
		
		echo "Expected response type is Void: 'conversions' folder copied as 'conversions1'.", "<br />";
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>