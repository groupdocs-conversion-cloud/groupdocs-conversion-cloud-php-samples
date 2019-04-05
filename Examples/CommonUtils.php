<?php

// Required dependencies and include autoload.php
require_once(__DIR__ . '\vendor\autoload.php');

// Common class to hold the constants and static functions
class CommonUtils {

    // TODO: Get your AppSID and AppKey at https://dashboard.groupdocs.cloud (free registration is required)
    static $AppSid = 'XXXXX-XXXXX-XXXXX';
    static $AppKey = 'XXXXXXXXXX';
    static $ApiBaseUrl = 'https://api.groupdocs.cloud';
	static $MyStorage = 'XXXXX';

    // Getting the Conversion API Instance
    public static function GetConversionApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Conversion\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$AppSid);
        $configuration->setAppKey(CommonUtils::$AppKey);
        $configuration->setApiBaseUrl(CommonUtils::$ApiBaseUrl);

        // Retrun the new ConversionAPI instance
        return new GroupDocs\Conversion\ConversionApi($configuration);
    }

     // Getting the Conversion StorageAPI API Instance
    public static function GetStorageApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Conversion\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$AppSid);
        $configuration->setAppKey(CommonUtils::$AppKey);

        // Retrun the new StorageApi instance
        return new GroupDocs\Conversion\StorageApi($configuration);
    }

     // Getting the Conversion FolderAPI API Instance
    public static function GetFolderApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Conversion\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$AppSid);
        $configuration->setAppKey(CommonUtils::$AppKey);

        // Retrun the new FolderApi instance
        return new GroupDocs\Conversion\FolderApi($configuration);
    }

	// Getting the Conversion FileAPI API Instance
    public static function GetFileApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Conversion\Configuration();

        // Seting the configurations
        $configuration->setAppSid(CommonUtils::$AppSid);
        $configuration->setAppKey(CommonUtils::$AppKey);

        // Retrun the new FileApi instance
        return new GroupDocs\Conversion\FileApi($configuration);
    }
}
