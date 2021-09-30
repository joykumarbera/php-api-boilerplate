<?php

$db = new mysqli($_ENV['DB_HOST'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD'], $_ENV['DB_NAME']);

if( $db->connect_errno ) {
    throw new RuntimeException('mysqli error: ' . $db->error);
}

