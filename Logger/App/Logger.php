<?php 
    namespace App;

    class Logger  {

        protected $errorsType = [
            E_ERROR => 'Fatal Error',
            E_WARNING => 'WARN',
            E_PARSE => 'Fatal Error',
            E_NOTICE => 'E_NOTICE',
            E_CORE_ERROR => 'Fatal Error',
            E_CORE_WARNING => 'E_CORE_WARNING',
            E_COMPILE_ERROR => 'Fatal Error',
            E_COMPILE_WARNING => 'E_COMPILE_WARNING',
            E_USER_ERROR => 'E_USER_ERROR',
            E_USER_WARNING => 'E_USER_WARNING',
            E_USER_NOTICE => 'E_USER_NOTICE',
            E_STRICT => 'E_STRICT',
            E_RECOVERABLE_ERROR => 'E_RECOVERABLE_ERROR',
            E_DEPRECATED => 'E_DEPRECATED',
            E_USER_DEPRECATED => 'E_USER_DEPRECATED'
        ];

        protected $keywords = [
            '%time',
            '%message',
            '%line',
            '%level',
            '%file'
        ];

        public function __construct ($template = null)
        {
            $this->pathToFile = (
                $_SERVER['DOCUMENT_ROOT'] . 
                DIRECTORY_SEPARATOR . 
                'Log' . 
                DIRECTORY_SEPARATOR . 
                date('Y.m.j') . 
                DIRECTORY_SEPARATOR . 
                'Log.txt'
            );
            $this->template = $template;
        }

        private function createMessage( $level, $message, $file, $line ){
            $data = [];
            $data['%time'] = date("H:i:s");
            $data['%message'] = $message;
            $data['%level'] = $this->errorsType[$level];
            $data['%file'] = $file;
            $data['%line'] = $line;
            foreach ( $this->keywords as $keyword) {
                if(isset($data[$keyword])){
                    $this->template = str_replace($keyword, $data[$keyword], $this->template);
                }
            }
            return $this->template;
        } 

        public function writeErrors ( $level, $message, $file, $line )
        {
            $message = $this->writeRecord( $level, $message, $file, $line );
            $this->writeInFile($message);
        }

        private function writeRecord ($message) {
            file_put_contents( $this->pathToFile, $message . PHP_EOL , FILE_APPEND );
        }

        public function writeFatal ()
        {
            $error = error_get_last();
            if ( $error['type'] & ( E_ERROR | E_PARSE | E_COMPILE_ERROR | E_CORE_ERROR) ) {
                $errorType = $this->errorsType[$error['type']];
                $message = $errorType . ' ' . $error['message'] . ' ' . $error['file'] . ' ' . $error['line'];
                $this->writeRecord($message);
            }
        }

        public function info () 
        {
            $content = file_get_contents( $this->pathToFile, true );
            echo $content;
        }

    }
