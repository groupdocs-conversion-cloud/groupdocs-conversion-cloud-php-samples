<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetFolderApiInstance();

		$request = new GroupDocs\Conversion\Model\Requests\DeleteFolderRequest("conversions1\\conversions1", CommonUtils::$MyStorage, true);
		$apiInstance->deleteFolder($request);
		
		echo "Expected response type is Void: 'conversions1/conversions' folder deleted recusrsively.", "<br />";
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>