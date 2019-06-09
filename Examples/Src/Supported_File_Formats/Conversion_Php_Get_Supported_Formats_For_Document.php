<?php

include(dirname(__DIR__) . '\CommonUtils.php');

try {
    $infoApi = CommonUtils::GetInfoApiInstance();

	$request = new GroupDocs\Conversion\Model\Requests\GetSupportedConversionTypesRequest("conversions\\sample.docx", CommonUtils::$MyStorage, null);
    $response = $infoApi->getSupportedConversionTypes($request);

    echo '<b>Supported file formats<br /></b>';
	foreach($response as $key => $format) {
	  echo $format->getSourceFormat(), "<br />";
	}
} catch (Exception $e) {
    echo "Something went wrong: ", $e->getMessage(), "\n";
}