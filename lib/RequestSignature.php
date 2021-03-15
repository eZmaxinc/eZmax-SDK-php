<?php
/**
 * RequestSignature
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   eZmax Solutions
 * @link     https://www.ezmax.ca
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eZmaxAPI;

/**
 * RequestSignature Class Doc Comment
 *
 * @category Class
 * @package  eZmaxAPI
 * @author   eZmax Solutions
 * @link     https://www.ezmax.ca
 */
class RequestSignature
{
	public static function getFingerprintV1 ($sAuthorization, $dtDate, $sMethod, $sURL, $sBody = '') {
		$sContentToHash = "$sMethod\n$sURL\n$sBody\n$sAuthorization\n$dtDate";
		return 'v1='.hash('sha256', $sContentToHash);
	}

	public static function getSignatureV1 ($sAuthorization, $dtDate, $sFingerprint, $sSecret) {
		$sContentToSign = "$sFingerprint$sAuthorization$dtDate";
		return 'v1='.hash_hmac('sha512/256', $sContentToSign, $sSecret);
	}

	public static function getHeadersV1 ($sAuthorization, $sSecret, $sMethod, $sURL, $sBody = '') {
	    $dtDate = gmdate('Y-m-d\TH:i:s\Z');
		$sFingerprint = self::getFingerprintV1 ($sAuthorization, $dtDate, $sMethod, $sURL, $sBody);
		$sSignature = self::getSignatureV1 ($sAuthorization, $dtDate, $sFingerprint, $sSecret);
		
		return [
			'Ezmax-Date' => $dtDate,
			'Ezmax-Fingerprint' => $sFingerprint,
			'Ezmax-Signature' => $sSignature
		];
	}
	
}

?>