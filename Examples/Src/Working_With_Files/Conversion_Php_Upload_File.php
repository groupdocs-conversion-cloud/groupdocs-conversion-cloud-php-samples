<?php
	require_once('C:\xampp\htdocs\groupdocs-conversion-cloud-php-examples-master\vendor\autoload.php');

	//TODO: Get your AppSID and AppKey at https://dashboard.groupdocs.cloud (free registration is required).

	$configuration = new GroupDocs\Conversion\Configuration();
	$configuration->setAppSid("XXXXX-XXXXX-XXXXX-XXXXX");
	$configuration->setAppKey("XXXXXXXXX");

	$apiInstance = new GroupDocs\Conversion\FileApi($configuration); 

	try 
	{
		$fileStream = readfile("..\\resources\\conversions\\one-page.docx");
		$request = new GroupDocs\Conversion\Model\Requests\UploadFileRequest("conversions\\one-page1.docx", $fileStream, "MYStorage", null);
		$response = $apiInstance->downloadFile($request);
		
		echo "Expected response type is FilesUploadResult: ", $response->getUploaded()->size();
	} 
	catch (Exception $e) 
	{
		echo  "Something went wrong: ",  $e->getMessage(), "<br />";
		PHP_EOL;
	}
?>