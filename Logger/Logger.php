<?php
    error_reporting( E_ALL );
    require_once 'App/autoload.php';
    use \App\InitCatalogLogger;
    use \App\Logger;

    $catalog = new InitCatalogLogger();
    $logger = new Logger( "%time: %level. %message: in %file, in %line" );

    set_error_handler(function( $level, $message, $file, $line ) use ( $logger ) {
        $logger->writeErrors( $level, $message, $file, $line );
    });
    
    register_shutdown_function(function() use ( $logger ) {
        $logger->writeFatal();
    });

    $logger->info();