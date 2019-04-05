<?php

include(dirname(__DIR__) . '\CommonUtils.php');

    $conversionApi = CommonUtils::GetConversionApiInstance();

	try 
	{
		$settings = new GroupDocs\Conversion\Model\ConvertSettings();

		$settings->setStorageName(CommonUtils::$MyStorage);
		$settings->setFilePath("conversions\\password-protected.docx");
		$settings->setFormat("jpeg");

		$loadOptions = new GroupDocs\Conversion\Model\DocxLoadOptions();
		$loadOptions->setPassword("password");
		$loadOptions->setHideWordTrackedChanges(true);
		$loadOptions->setDefaultFont("Arial");

		$settings->setLoadOptions($loadOptions);

		$convertOptions = new GroupDocs\Conversion\Model\JpegConvertOptions();
		$convertOptions->setFromPage(1);
		$convertOptions->setPagesCount(2);
		$convertOptions->setFromPage(1);
		$convertOptions->setUsePdf(true);
		$convertOptions->setGrayscale(false);
		$convertOptions->setHeight(1024);
		$convertOptions->setQuality(100);
		$convertOptions->setRotateAngle(90);
		$settings->setConvertOptions($convertOptions);

		$settings->setOutputPath("converted\\tojpeg");
		
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