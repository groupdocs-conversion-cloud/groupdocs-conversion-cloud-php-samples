<?php
	require_once('C:\xampp\htdocs\groupdocs-conversion-cloud-php-examples-master\vendor\autoload.php');

	//TODO: Get your AppSID and AppKey at https://dashboard.groupdocs.cloud (free registration is required).

	$configuration = new GroupDocs\Conversion\Configuration();
	$configuration->setAppSid("XXXXX-XXXXX-XXXXX-XXXXX");
	$configuration->setAppKey("XXXXXXXXX");

	$apiInstance = new GroupDocs\Conversion\FolderApi($configuration); 

	try 
	{
		$request = new GroupDocs\Conversion\Model\Requests\DeleteFolderRequest("conversions\\conversions1", "MYStorage", true);
		$apiInstance->deleteFolder($request);
		
		echo "Expected response type is Void: 'conversions/conversions1' folder deleted recusrsively.", "<br />";
	} 
	catch (Exception $e) 
	{
		echo  "Something went wrong: ",  $e->getMessage(), "<br />";
		PHP_EOL;
	}
?>