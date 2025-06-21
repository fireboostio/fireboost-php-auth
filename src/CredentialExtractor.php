<?php
/**
 * Created by PhpStorm.
 * This file is part of the fireboost-encryptor project.
 * Filename: CredentialExtractor.php
 * Namespace: Fireboostio\Encryptor
 * User: szilard
 * Date: 06.06.2024
 * Time: 22:14
 */

namespace FireboostIO\Encryptor;

class CredentialExtractor
{
    /**
     * @var ApiKeyExtractor
     */
    private $apiKeyExtractor;
    /**
     * @var KeyEncryptor
     */
    private $keyEncryptor;

    public function __construct()
    {
        $this->apiKeyExtractor = new ApiKeyExtractor();
        $this->keyEncryptor = new KeyEncryptor();
    }

    public function getLoginInputData(string $apiKey)
    {
        return [
            'encrypted_api_key' => $this->keyEncryptor->getEncryptedApiKey($apiKey),
        ];
    }
}