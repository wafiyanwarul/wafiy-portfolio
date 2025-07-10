<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ImageKitService
{
    protected $client;
    protected $publicKey;
    protected $privateKey;
    protected $urlEndpoint;

    public function __construct()
    {
        $this->client = new Client([
            'verify' => false, // Disable SSL verification (LOCAL TESTING ONLY)
        ]);
        $this->publicKey = config('imagekit.public_key');
        $this->privateKey = config('imagekit.private_key');
        $this->urlEndpoint = config('imagekit.url_endpoint');
    }

    public function upload($file, $fileName, $folder = 'portfolio')
    {
        try {
            $response = $this->client->request('POST', 'https://upload.imagekit.io/api/v1/files/upload', [
                'multipart' => [
                    [
                        'name' => 'file',
                        'filename' => $fileName,
                        'contents' => fopen($file->getRealPath(), 'r'),
                        'headers' => ['Content-Type' => $file->getMimeType()],
                    ],
                    [
                        'name' => 'fileName',
                        'contents' => $fileName,
                    ],
                    [
                        'name' => 'folder',
                        'contents' => $folder,
                    ],
                    [
                        'name' => 'publicKey',
                        'contents' => $this->publicKey,
                    ],
                ],
                'headers' => [
                    'Accept' => 'application/json',
                    'Authorization' => 'Basic ' . base64_encode($this->privateKey . ':'),
                ],
            ]);

            $data = json_decode($response->getBody(), true);

            return [
                'fileId' => $data['fileId'],
                'url' => $data['url'],
                'name' => $data['name'],
            ];
        } catch (RequestException $e) {
            throw new \Exception('Image upload failed: ' . ($e->hasResponse() ? $e->getResponse()->getBody() : $e->getMessage()));
        }
    }

    public function delete($fileId)
    {
        try {
            $response = $this->client->request('DELETE', "https://api.imagekit.io/v1/files/{$fileId}", [
                'headers' => [
                    'Accept' => 'application/json',
                    'Authorization' => 'Basic ' . base64_encode($this->privateKey . ':'),
                ],
            ]);

            return true;
        } catch (RequestException $e) {
            throw new \Exception('Image deletion failed: ' . ($e->hasResponse() ? $e->getResponse()->getBody() : $e->getMessage()));
        }
    }

    public function getUrl($path, $transformations = [])
    {
        $query = '';
        if (!empty($transformations)) {
            $transformationString = array_map(function ($key, $value) {
                return "tr:{$key}-{$value}";
            }, array_keys($transformations), $transformations);
            $query = implode(',', $transformationString);
        }

        return $this->urlEndpoint . $path . ($query ? "?{$query}" : '');
    }
}
