<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require __DIR__ . '/../vendor/autoload.php';

use Google\Client;
use Google\Service\Drive;
use Google\Service\Sheets\ValueRange;

$client = new \Google_Client();

$client->setApplicationName('Bentley Lead');

$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);

//$client->setAccessType('offline');
$client->setAuthConfig(__DIR__ . '/../credentials.json');
$service = new Google_Service_Sheets($client);
$spreadsheetId = "1eyyLZW8vthE0I-9qao-Bl1fSdOhhWn-sKZ7Fd3qAL_c";

$values = [["sample", 'values']];
$body = new Google_Service_Sheets_ValueRange([
'values' => $values
]);
$params = [

    'valueInputOption' => 'USER_ENTERED'
];
$result = $service->spreadsheets_values->append($spreadsheetId, "A2", $body, $params);