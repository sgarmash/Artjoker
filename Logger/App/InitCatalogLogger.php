<?php 
    namespace App;

    class InitCatalogLogger
    {
        public function __construct () {
            $this->createDirectory();
            $this->createSubDirectory();
            $this->createFile();
        }

        public function createDirectory () 
        {
            $pathDirectory = ( $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR  . 'Log' );

            if( !file_exists( $pathDirectory ) ) {
                mkdir( $pathDirectory , 0777 );
            }

        }

        public function createSubDirectory () 
        {
            $pathDirectory = ( $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR  . 'Log' . DIRECTORY_SEPARATOR  . date('Y.m.j') );

            if( !file_exists( $pathDirectory ) ) {
                mkdir( $pathDirectory , 0777 );
            }
            
        }

        public function createFile ()
        {
            $pathDirectory = ( $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'Log' . DIRECTORY_SEPARATOR . date('Y.m.j') . DIRECTORY_SEPARATOR . 'Log.txt');
            if ( !file_exists( $pathDirectory ) ){
                $fileCreate = fopen( $pathDirectory, 'w+' );
                fclose( $fileCreate );
            }
        }
    }