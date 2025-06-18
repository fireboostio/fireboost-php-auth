# PHP-encryptor

PHP-encryptor is a small PHP library created for [fireboost.io](https://fireboost.io). This library provides functionalities to extract payloads from API keys, encrypt API keys, and create login input data from API keys for authentication purposes.

## Installation

You can install the PHP-encryptor library via Composer:

```bash
composer require fireboostio/php-encryptor
```

## Usage

Below are examples demonstrating how to use the library:

### Extracting API Key Payload
To extract the payload from a Fireboost API key, use the `ApiKeyExtractor` class:

```PHP
use FireboostIO\Encryptor\ApiKeyExtractor;

$apiKeyExtractor = new ApiKeyExtractor();
$payload = $apiKeyExtractor->getApiKeyPayload($apiKey);
```

### Encrypting API Key
To get the encrypted API key from the API key token, use the `KeyEncryptor` class:

```PHP
use FireboostIO\Encryptor\KeyEncryptor;

$keyEncryptor = new KeyEncryptor();
$encryptedApiKey = $keyEncryptor->getEncryptedApiKey($apiKey);
```
### Creating Login Input Data
To create the login input data from the API key, use the `CredentialExtractor` class. This is the main functionality of the library, allowing the creation of login data from the API key for authentication:

```PHP
use FireboostIO\Encryptor\CredentialExtractor;

$credentialExtractor = new CredentialExtractor();
$loginInputData = $credentialExtractor->getLoginInputData($apiKey);
```
## License
This project is licensed under the MIT License. See the [LICENSE](https://github.com/fireboostio/php-encryptor/blob/main/LICENSE) file for details.