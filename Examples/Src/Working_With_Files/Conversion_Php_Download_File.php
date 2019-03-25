<?php
	require_once('C:\xampp\htdocs\groupdocs-conversion-cloud-php-examples-master\vendor\autoload.php');

	//TODO: Get your AppSID and AppKey at https://dashboard.groupdocs.cloud (free registration is required).

	$configuration = new GroupDocs\Conversion\Configuration();
	$configuration->setAppSid("XXXXX-XXXXX-XXXXX-XXXXX");
	$configuration->setAppKey("XXXXXXXXX");

	$apiInstance = new GroupDocs\Conversion\FileApi($configuration); 

	try 
	{
		$request = new GroupDocs\Conversion\Model\Requests\DownloadFileRequest("conversions\\one-page.docx", "MYStorage", null);
		$response = $apiInstance->downloadFile($request);
		
		echo "Expected response type is File: ", strlen($response);
	} 
	catch (Exception $e) 
	{
		echo  "Something went wrong: ",  $e->getMessage(), "<br />";
		PHP_EOL;
	}
?>