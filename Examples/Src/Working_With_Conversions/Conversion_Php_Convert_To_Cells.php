<?php

include(dirname(__DIR__) . '\CommonUtils.php');

    $convertApi = CommonUtils::GetConvertApiInstance();

	try 
	{
		$settings = new GroupDocs\Conversion\Model\ConvertSettings();

		$settings->setStorageName(CommonUtils::$MyStorage);
		$settings->setFilePath("conversions\\sample.docx");
		$settings->setFormat("xlsx");

		$loadOptions = new GroupDocs\Conversion\Model\DocxLoadOptions();
		$loadOptions->setPassword("");
		$loadOptions->setHideWordTrackedChanges(true);

		$settings->setLoadOptions($loadOptions);

		$convertOptions = new GroupDocs\Conversion\Model\XlsxConvertOptions();
		$convertOptions->setFromPage(1);
		$convertOptions->setFromPage(1);
		$settings->setConvertOptions($convertOptions);

		$settings->setOutputPath("converted\\tocells");
		
		$request = new GroupDocs\Conversion\Model\Requests\ConvertDocumentRequest($settings);

		$response = $convertApi->convertDocument($request);
		echo "Document converted successfully: ", $response[0]->getUrl();
	} 
	catch (Exception $e) 
	{
		echo  "Something went wrong: ",  $e->getMessage(), "<br />";
		PHP_EOL;
	}
?>