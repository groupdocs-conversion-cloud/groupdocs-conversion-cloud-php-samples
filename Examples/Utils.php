<?php

// Utility class to hold the constants and static functions
class Utils {

    // TODO: Get your AppSID and AppKey at https://dashboard.groupdocs.cloud (free registration is required)
    static $AppSid = 'XXXX-XXXX-XXXX-XXXX';
    static $AppKey = 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX';

    static $ApiBaseUrl = 'https://api.groupdocs.cloud';
	static $MyStorage = 'First Storage';

    // Getting the Convert API Instance
    public static function GetConvertApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Conversion\Configuration();

        // Seting the configurations
        $configuration->setAppSid(Utils::$AppSid);
        $configuration->setAppKey(Utils::$AppKey);
        $configuration->setApiBaseUrl(Utils::$ApiBaseUrl);

        // Retrun the new ConversionAPI instance
        return new GroupDocs\Conversion\ConvertApi($configuration);
    }

    // Getting the Info API Instance
    public static function GetInfoApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Conversion\Configuration();

        // Seting the configurations
        $configuration->setAppSid(Utils::$AppSid);
        $configuration->setAppKey(Utils::$AppKey);
        $configuration->setApiBaseUrl(Utils::$ApiBaseUrl);

        // Retrun the new Info instance
        return new GroupDocs\Conversion\InfoApi($configuration);
    }

	// Getting the Conversion StorageAPI API Instance
    public static function GetStorageApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Conversion\Configuration();

        // Seting the configurations
        $configuration->setAppSid(Utils::$AppSid);
        $configuration->setAppKey(Utils::$AppKey);

        // Retrun the new StorageApi instance
        return new GroupDocs\Conversion\StorageApi($configuration);
    }

     // Getting the Conversion FolderAPI API Instance
    public static function GetFolderApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Conversion\Configuration();

        // Seting the configurations
        $configuration->setAppSid(Utils::$AppSid);
        $configuration->setAppKey(Utils::$AppKey);

        // Retrun the new FolderApi instance
        return new GroupDocs\Conversion\FolderApi($configuration);
    }

	// Getting the Conversion FileAPI API Instance
    public static function GetFileApiInstance() {
        // intializing the configuration
        $configuration = new GroupDocs\Conversion\Configuration();

        // Seting the configurations
        $configuration->setAppSid(Utils::$AppSid);
        $configuration->setAppKey(Utils::$AppKey);

        // Retrun the new FileApi instance
        return new GroupDocs\Conversion\FileApi($configuration);
    }

    // Uploading sample files into storage
    public static function UploadResources() {
        $storageApi = self::GetStorageApiInstance();
        $fileApi = self::GetFileApiInstance();
        $folder = realpath(__DIR__ . '\Resources');
        $filePathInStorage = "";
        $dir_iterator = new \RecursiveDirectoryIterator($folder);
        $iterator = new \RecursiveIteratorIterator($dir_iterator, \RecursiveIteratorIterator::SELF_FIRST);
        echo 'Uploading file process executing...';
        echo "\n";
        foreach ($iterator as $file) {
            if (!$file->isDir()) {
                $filePath = $file->getPathName();
                $filePathInStorage = str_replace($folder . '\\', "", $filePath);
                echo $filePathInStorage;
                echo "\n";
                $isExistRequest = new \GroupDocs\Conversion\Model\Requests\objectExistsRequest($filePathInStorage);
                $isExistResponse = $storageApi->objectExists($isExistRequest);
                if (!$isExistResponse->getExists()) {
                    $putCreateRequest = new \GroupDocs\Conversion\Model\Requests\uploadFileRequest($filePathInStorage, $filePath);
                    $putCreateResponse = $fileApi->uploadFile($putCreateRequest);
                }
            }
        }        
    }
}
