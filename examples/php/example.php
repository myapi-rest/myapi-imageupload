<?php

$payload = [
    "file_base64" => "<BASE_64_DATA>",
    "file_name"   => "logo.png"
];

$ch = curl_init("https://api.myapi.rest/api/image/upload");

curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_HTTPHEADER     => [
        "Authorization: Bearer <API_KEY>",
        "Content-Type: application/json"
    ],
    CURLOPT_POSTFIELDS     => json_encode($payload)
]);

$response = curl_exec($ch);
curl_close($ch);

echo $response;
