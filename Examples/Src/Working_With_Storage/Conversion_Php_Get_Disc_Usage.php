<?php

include(dirname(__DIR__) . '\CommonUtils.php');

	try {
		$apiInstance = CommonUtils::GetStorageApiInstance();

		$request = new GroupDocs\Conversion\Model\Requests\GetDiscUsageRequest(CommonUtils::$MyStorage);
		$response = $apiInstance->getDiscUsage($request);
			
		echo "Expected response type is DiscUsage: ", $response;
	} catch (Exception $e) {
		echo "Something went wrong: ", $e->getMessage(), "\n";
	}
?>