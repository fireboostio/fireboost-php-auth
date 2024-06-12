<?php
/**
 * Created by PhpStorm.
 * This file is part of the fireboost-encryptor project.
 * Filename: Encryptor.php
 * Namespace: Fireboost\Encryptor
 * User: szilard
 * Date: 07.05.2024
 * Time: 20:25
 */

namespace Fireboostio\Encryptor;

use LogicException;
use phpseclib3\Crypt\RSA;

class KeyEncryptor
{
    /**
     * @var ApiKeyExtractor
     */
    private $apiKeyExtractor;

    public function __construct()
    {
        $this->apiKeyExtractor = new ApiKeyExtractor();
    }

    public function getEncryptedApiKey(string $apiKey)
    {
        $payload = $this->apiKeyExtractor->getApiKeyPayload($apiKey);
        $rsa = RSA::loadFormat('JWK', base64_decode($payload['pk_secret']));

        return base64_encode($rsa->encrypt($payload['apiKey']));
    }
}