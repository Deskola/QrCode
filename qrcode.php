<?php

require_once 'vendor/autoload.php';
$qrCode = new Endroid\QrCode\QrCode();

$qrCode->setText('Life is too short to be generating QR codes');
$qrCode->setSize(200);
header('Content-Type: '.$qrCode->getContentType());
echo $qrCode->writeString();
$qrCode->setPadding(10);

//$qrCode->render();

// header('Content-Type: '.$qrCode->getContentType());
// echo $qrCode->writeString();

// require_once 'vendor/autoload.php';

// $qr = new Endroid\Qrcode\QrCode();

// $qr->setText('https://www.google.co.uk');
// $qr->setSize(200);
// $qr->setPadding(10);

// $qr->render();


?>