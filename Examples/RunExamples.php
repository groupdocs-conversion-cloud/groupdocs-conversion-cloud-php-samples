<?php
// Required dependencies and include autoload.php
require_once(__DIR__ . '\vendor\autoload.php');

include(__DIR__ . '\Utils.php');
include(__DIR__ . '\Info\GetSupportedConversions.php');
include(__DIR__ . '\Info\GetDocumentInformation.php');
include(__DIR__ . '\Info\GetMeteredConsumption.php');
include(__DIR__ . '\Info\GetLicenseInfo.php');

include(__DIR__ . '\Convert\ConvertToWordProcessing.php');
include(__DIR__ . '\Convert\ConvertToPdf.php');
include(__DIR__ . '\Convert\ConvertToPdfResponseBody.php');
include(__DIR__ . '\Convert\ConvertToHtml.php');
include(__DIR__ . '\Convert\ConvertToImage.php');
include(__DIR__ . '\Convert\ConvertToPresentation.php');
include(__DIR__ . '\Convert\ConvertToSpreadsheet.php');
include(__DIR__ . '\Convert\ConvertToPdfDirect.php');
include(__DIR__ . '\Convert\ConvertToPdfDirectOptions.php');

include(__DIR__ . '\Common\AddWatermark.php');
include(__DIR__ . '\Common\ConvertConsecutivePages.php');
include(__DIR__ . '\Common\ConvertSpecificPages.php');
include(__DIR__ . '\Common\ConvertUsingCustomFont.php');

include(__DIR__ . '\LoadOptionsByDocumentType\Cad\ConvertCadAndSpecifyLoadOptions.php');
include(__DIR__ . '\LoadOptionsByDocumentType\Csv\ConvertCsvByConvertingDateTimeAndNumericData.php');
include(__DIR__ . '\LoadOptionsByDocumentType\Csv\ConvertCsvBySpecifyingDelimiter.php');
include(__DIR__ . '\LoadOptionsByDocumentType\Csv\ConvertCsvBySpecifyingEncoding.php');
include(__DIR__ . '\LoadOptionsByDocumentType\Email\ConvertEmailWithAlteringFieldsVisibility.php');
include(__DIR__ . '\LoadOptionsByDocumentType\Email\ConvertEmailWithAttachments.php');
include(__DIR__ . '\LoadOptionsByDocumentType\Email\ConvertEmailWithTimezoneOffset.php');
include(__DIR__ . '\LoadOptionsByDocumentType\Email\ConvertEmailWithFieldLabels.php');
include(__DIR__ . '\LoadOptionsByDocumentType\Email\ConvertEmailWithOriginalDate.php');
include(__DIR__ . '\LoadOptionsByDocumentType\Html\ConvertHtmlWithPageNumbering.php');
include(__DIR__ . '\LoadOptionsByDocumentType\Note\ConvertNoteBySpecifyingFontSubstitution.php');
include(__DIR__ . '\LoadOptionsByDocumentType\Pdf\ConvertPdfAndFlattenAllFields.php');
include(__DIR__ . '\LoadOptionsByDocumentType\Pdf\ConvertPdfAndHideAnnotations.php');
include(__DIR__ . '\LoadOptionsByDocumentType\Pdf\ConvertPdfAndRemoveEmbeddedFiles.php');
include(__DIR__ . '\LoadOptionsByDocumentType\Presentation\ConvertPresentationByHidingComments.php');
include(__DIR__ . '\LoadOptionsByDocumentType\Presentation\ConvertPresentationBySpecifyingFontSubstitution.php');
include(__DIR__ . '\LoadOptionsByDocumentType\Presentation\ConvertPresentationWithHiddenSlidesIncluded.php');
include(__DIR__ . '\LoadOptionsByDocumentType\Spreadsheet\ConvertSpreadsheetAndHideComments.php');
include(__DIR__ . '\LoadOptionsByDocumentType\Spreadsheet\ConvertSpreadsheetByShowingGridLines.php');
include(__DIR__ . '\LoadOptionsByDocumentType\Spreadsheet\ConvertSpreadsheetBySkippingEmptyRowsAndColumns.php');
include(__DIR__ . '\LoadOptionsByDocumentType\Spreadsheet\ConvertSpreadsheetBySpecifyingFontsubstitution.php');
include(__DIR__ . '\LoadOptionsByDocumentType\Spreadsheet\ConvertSpreadsheetBySpecifyingRange.php');
include(__DIR__ . '\LoadOptionsByDocumentType\Spreadsheet\ConvertSpreadsheetWithHiddenSheetsIncluded.php');
include(__DIR__ . '\LoadOptionsByDocumentType\Txt\ConvertTxtByControllingLeadingSpacesBehavior.php');
include(__DIR__ . '\LoadOptionsByDocumentType\Txt\ConvertTxtByControllingTrailingSpacesBehavior.php');
include(__DIR__ . '\LoadOptionsByDocumentType\Txt\ConvertTxtBySpecifyingEncoding.php');
include(__DIR__ . '\LoadOptionsByDocumentType\WordProcessing\ConvertWordProcessingByHidingComments.php');
include(__DIR__ . '\LoadOptionsByDocumentType\WordProcessing\ConvertWordProcessingByHidingTrackedChanges.php');
include(__DIR__ . '\LoadOptionsByDocumentType\WordProcessing\ConvertWordProcessingBySpecifyingFontSubstitution.php');


// Uploading sample files into storage
Utils::UploadResources();

// Info API Examples
GetSupportedConversions::Run();
GetDocumentInformation::Run();

// Document conversion examples with conversion options
ConvertToWordProcessing::Run();
ConvertToPdf::Run();
ConvertToPdfResponseBody::Run();
ConvertToHtml::Run();
ConvertToImage::Run();
ConvertToPresentation::Run();
ConvertToSpreadsheet::Run();
ConvertToPdfDirect::Run();
ConvertToPdfDirectOptions::Run();

// Document conversion examples with common options
AddWatermark::Run();
ConvertConsecutivePages::Run();
ConvertSpecificPages::Run();
ConvertUsingCustomFont::Run();

// Document conversion examples with loading options
ConvertCadAndSpecifyLoadOptions::run();
ConvertCsvByConvertingDateTimeAndNumericData::run();
ConvertCsvBySpecifyingDelimiter::run();
ConvertCsvBySpecifyingEncoding::run();
ConvertEmailWithAlteringFieldsVisibility::run();
ConvertEmailWithAttachments::run();
ConvertEmailWithTimezoneOffset::run();
ConvertEmailWithFieldLabels::run();
ConvertEmailWithOriginalDate::run();
ConvertHtmlWithPageNumbering::run();
ConvertNoteBySpecifyingFontSubstitution::run();
ConvertPdfAndFlattenAllFields::run();
ConvertPdfAndHideAnnotations::run();
ConvertPdfAndRemoveEmbeddedFiles::run();
ConvertPresentationByHidingComments::run();
ConvertPresentationBySpecifyingFontSubstitution::run();
ConvertPresentationWithHiddenSlidesIncluded::run();
ConvertSpreadsheetAndHideComments::run();
ConvertSpreadsheetByShowingGridLines::run();
ConvertSpreadsheetBySkippingEmptyRowsAndColumns::run();
ConvertSpreadsheetBySpecifyingFontsubstitution::run();
ConvertSpreadsheetBySpecifyingRange::run();
ConvertSpreadsheetWithHiddenSheetsIncluded::run();
ConvertTxtByControllingLeadingSpacesBehavior::run();
ConvertTxtByControllingTrailingSpacesBehavior::run();
ConvertTxtBySpecifyingEncoding::run();
ConvertWordProcessingByHidingComments::run();
ConvertWordProcessingByHidingTrackedChanges::run();
ConvertWordProcessingBySpecifyingFontSubstitution::run();
