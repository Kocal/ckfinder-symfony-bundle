<?php

$config = [];
$config['connectorFactoryClass'] = \CKSource\Bundle\CKFinderBundle\Factory\ConnectorFactory::class;
$config['connectorClass'] = \CKSource\CKFinder\CKFinder::class;
$config['authenticationClass'] = \CKSource\Bundle\CKFinderBundle\Authentication\Authentication::class;
$config['licenseName'] = '';
$config['licenseKey'] = '';
$config['privateDir'] = [
    'backend' => 'symfony_cache',
    'tags' => 'ckfinder/tags',
    'cache' => 'ckfinder/cache',
    'thumbs' => 'ckfinder/cache/thumbs',
    'logs' => [
        'backend' => 'symfony_logs',
        'path' => 'ckfinder/logs',
    ],
];
$config['images'] = [
    'maxWidth' => 1600,
    'maxHeight' => 1200,
    'quality' => 80,
    'sizes' => [
        'small' => ['width' => 480, 'height' => 320, 'quality' => 80],
        'medium' => ['width' => 600, 'height' => 480, 'quality' => 80],
        'large' => ['width' => 800, 'height' => 600, 'quality' => 80],
    ],
];
$config['backends']['symfony_cache'] = [
    'name' => 'symfony_cache',
    'adapter' => 'local',
    'root' => '/app/cache',
];
$config['backends']['symfony_logs'] = [
    'name' => 'symfony_logs',
    'adapter' => 'local',
    'root' => '/app/logs',
];
$config['backends']['default'] = [
    'name' => 'default',
    'adapter' => 'local',
    'baseUrl' => '/userfiles/',
    'root' => '/public/userfiles',
    'chmodFiles' => 0777,
    'chmodFolders' => 0755,
    'filesystemEncoding' => 'UTF-8',
];
$config['defaultResourceTypes'] = '';

$config['resourceTypes'][] = [
    'name' => 'Files', // Single quotes not allowed.
    'directory' => 'files',
    'maxSize' => 0,
    'allowedExtensions' => '7z,aiff,asf,avi,bmp,csv,doc,docx,fla,flv,gif,gz,gzip,jpeg,jpg,mid,mov,mp3,mp4,mpc,mpeg,mpg,ods,odt,pdf,png,ppt,pptx,pxd,qt,ram,rar,rm,rmi,rmvb,rtf,sdc,sitd,swf,sxc,sxw,tar,tgz,tif,tiff,txt,vsd,wav,wma,wmv,xls,xlsx,zip',
    'deniedExtensions' => '',
    'backend' => 'default',
];

$config['resourceTypes'][] = [
    'name' => 'Images',
    'directory' => 'images',
    'maxSize' => 0,
    'allowedExtensions' => 'bmp,gif,jpeg,jpg,png',
    'deniedExtensions' => '',
    'backend' => 'default',
];
$config['roleSessionVar'] = 'CKFinder_UserRole';
$config['accessControl'][] = [
    'role' => '*',
    'resourceType' => '*',
    'folder' => '/',

    'FOLDER_VIEW' => true,
    'FOLDER_CREATE' => true,
    'FOLDER_RENAME' => true,
    'FOLDER_DELETE' => true,

    'FILE_VIEW' => true,
    'FILE_UPLOAD' => true,
    'FILE_RENAME' => true,
    'FILE_DELETE' => true,

    'IMAGE_RESIZE' => true,
    'IMAGE_RESIZE_CUSTOM' => true,
];
$config['overwriteOnUpload'] = false;
$config['checkDoubleExtension'] = true;
$config['disallowUnsafeCharacters'] = false;
$config['secureImageUploads'] = true;
$config['checkSizeAfterScaling'] = true;
$config['htmlExtensions'] = ['html', 'htm', 'xml', 'js'];
$config['hideFolders'] = ['.*', 'CVS', '__thumbs'];
$config['hideFiles'] = ['.*'];
$config['forceAscii'] = false;
$config['xSendfile'] = false;
$config['debug'] = false;
$config['debugLoggers'] = ['ckfinder_log', 'error_log', 'firephp'];
$config['plugins'] = [];
$config['cache'] = [
    'imagePreview' => 24 * 3600,
    'thumbnails' => 24 * 3600 * 365,
    'proxyCommand' => 0,
];
$config['tempDirectory'] = sys_get_temp_dir();
$config['sessionWriteClose'] = true;
$config['csrfProtection'] = true;
$config['forceThrowExceptions'] = false;
$config['commands'] = [
    'GetFiles' => [
        'returnMaxLastFiles' => null
    ],
];

return $config;
