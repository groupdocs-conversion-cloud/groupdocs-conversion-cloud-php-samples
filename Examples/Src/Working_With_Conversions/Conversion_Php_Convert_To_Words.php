﻿<?php

include(dirname(__DIR__) . '\CommonUtils.php');

    $conversionApi = CommonUtils::GetConversionApiInstance();

	try 
	{
		$settings = new GroupDocs\Conversion\Model\ConvertSettings();

		$settings->setStorageName(CommonUtils::$MyStorage);
		$settings->setFilePath("conversions\\sample.pdf");
		$settings->setFormat("docx");

		$loadOptions = new GroupDocs\Conversion\Model\PdfLoadOptions();
		$loadOptions->setPassword("");
		$loadOptions->setHidePdfAnnotations(true);
		$loadOptions->setRemoveEmbeddedFiles(false);
		$loadOptions->setFlattenAllFields(true);

		$settings->setLoadOptions($loadOptions);

		$convertOptions = new GroupDocs\Conversion\Model\DocxConvertOptions();
		$convertOptions->setFromPage(1);
		$convertOptions->setPagesCount(2);
		$convertOptions->setZoom(100);
		$convertOptions->setDpi(300.0);
		$settings->setConvertOptions($convertOptions);

		$settings->setOutputPath("converted\\towords");
		
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