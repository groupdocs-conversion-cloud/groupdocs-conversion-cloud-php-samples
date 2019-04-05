<?php

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $apiInstance = CommonUtils::GetStorageApiInstance();

	$request = new GroupDocs\Conversion\Model\Requests\StorageExistsRequest(CommonUtils::$MyStorage);
		$response = $apiInstance->storageExists($request);
		
		echo "Expected response type is StorageExist: ", $response;
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}
?>