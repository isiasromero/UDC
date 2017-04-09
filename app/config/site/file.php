<?php
return [
    'max-upload-files'  => [
        'type'        => 'int',
        'title'       => 'Establecer el tamaño máximo de carga de archivos',
        'description' => 'Opción para configurar el tamaño máximo de carga de archivos',
        'value'       => 250000000,
    ],

    'allow-files-types' => [
        'type'        => 'text',
        'title'       => 'Establecer los tipos de archivo',
        'description' => 'Opción para establecer los tipos de archivo permitir separar con coma (,)',
        'value'       => 'exe,txt,zip,rar,doc,mp3,jpg,png,css,psd,pdf,ppt,pptx,xls,xlsx,html,docx,fla,avi,mp4',
    ],

];
