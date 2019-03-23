<?php
	require_once('C:\xampp\htdocs\groupdocs-conversion-cloud-php-examples-master\vendor\autoload.php');

	//TODO: Get your AppSID and AppKey at https://dashboard.groupdocs.cloud (free registration is required).

	$configuration = new GroupDocs\Conversion\Configuration();
	$configuration->setAppSid("XXXXX-XXXXX-XXXXX-XXXXX");
	$configuration->setAppKey("XXXXXXXXX");

	$storageApi = new GroupDocs\Conversion\StorageApi($configuration);
	$fileApi = new GroupDocs\Conversion\FileApi($configuration);
	$folderApi = new GroupDocs\Conversion\FolderApi($configuration);	

	try 
	{
		echo "Upload file processing...", "<br />";
		$folder = realpath(__DIR__ . '\\Resources\\conversions');
		echo "Folder: ", $folder, "<br />";
        $files = scandir ($folder);
        foreach ($files as $file) {
			if(strlen($file) > 2)
			{
				$path = "conversions" . DIRECTORY_SEPARATOR . $file;
				$isExistRequest = new \GroupDocs\Conversion\Model\Requests\objectExistsRequest($path);
				$isExistResponse = $storageApi->objectExists($isExistRequest);
				if (!$isExistResponse->getExists()) {
					echo "Uploading file: ", $path, "<br />";
					$uploadRequest = new \GroupDocs\Conversion\Model\Requests\uploadFileRequest($path, readfile(realpath(__DIR__ . '\\Resources\\' . $path)));
					$response = $fileApi->uploadFile($uploadRequest);
				}
			}
        }
		echo "All files upload successfully.";
	} 
	catch (Exception $e) 
	{
		echo  "Something went wrong: ",  $e->getMessage(), "<br />";
		PHP_EOL;
	}
?>