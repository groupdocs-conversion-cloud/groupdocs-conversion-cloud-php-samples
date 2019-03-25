<?php
	require_once('C:\xampp\htdocs\groupdocs-conversion-cloud-php-examples-master\vendor\autoload.php');

	//TODO: Get your AppSID and AppKey at https://dashboard.groupdocs.cloud (free registration is required).

	$configuration = new GroupDocs\Conversion\Configuration();
	$configuration->setAppSid("XXXXX-XXXXX-XXXXX-XXXXX");
	$configuration->setAppKey("XXXXXXXXX");

	$apiInstance = new GroupDocs\Conversion\FolderApi($configuration); 

	try 
	{
		$request = new GroupDocs\Conversion\Model\Requests\GetFilesListRequest("conversions", "MYStorage");
		$response = $apiInstance->getFilesList($request);
		
		echo "Expected response type is FilesList.", "<br />";

		foreach($response->getValue() as $storageFile) {
          echo "Files: ", $storageFile->getPath(), "<br />";
		}
	} 
	catch (Exception $e) 
	{
		echo  "Something went wrong: ",  $e->getMessage(), "<br />";
		PHP_EOL;
	}
?>