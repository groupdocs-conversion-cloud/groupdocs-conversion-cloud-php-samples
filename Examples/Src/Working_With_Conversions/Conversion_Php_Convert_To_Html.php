﻿<?php

include(dirname(__DIR__) . '\CommonUtils.php');

    $conversionApi = CommonUtils::GetConversionApiInstance();

	try 
	{
		$settings = new GroupDocs\Conversion\Model\ConvertSettings();

		$settings->setStorageName(CommonUtils::$MyStorage);
		$settings->setFilePath("conversions\\password-protected.docx");
		$settings->setFormat("html");

		$loadOptions = new GroupDocs\Conversion\Model\DocxLoadOptions();
		$loadOptions->setPassword("password");
		$loadOptions->setHideWordTrackedChanges(true);
		$loadOptions->setDefaultFont("Arial");

		$settings->setLoadOptions($loadOptions);

		$convertOptions = new GroupDocs\Conversion\Model\HtmlConvertOptions();
		$convertOptions->setFromPage(1);
		$convertOptions->setPagesCount(2);
		$convertOptions->setFromPage(1);
		$convertOptions->setUsePdf(true);
		$convertOptions->setFixedLayout(true);
		$settings->setConvertOptions($convertOptions);

		$settings->setOutputPath("converted\\tohtml");
		
		$request = new GroupDocs\Conversion\Model\Requests\ConvertDocumentRequest($settings);

		$response = $conversionApi->convertDocument($request);
		echo "Document converted successfully: ", $response[0]->getUrl();
	} 
	catch (Exception $e) 
	{
		echo  "Something went wrong: ",  $e->getMessage(), "<br />";
		PHP_EOL;
	}
?>