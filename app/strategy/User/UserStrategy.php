<?php

namespace App\strategy\User;
use App\strategy\User\UserInterface as EncrypterContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;



class Encrypter implements EncrypterContract
{
	public function __construct($key,$cipher = ' AES-128-CBC')
		{
			$this->key = (string) $key;
			$this->$cipher = $cipher;
		}

	public function encrypt($value, $serialize = true)
		{
		// TODO: Implement encrypt() method.
		}

	public function decrypt($payload, $unserialize = true)
		{
		// TODO: Implement decrypt() method.
		}
}

class UserStrategy implements EncrypterContract
{
	const ENCRYPTION_KEY = 'qJB0rGtIn5UB1xG03efyCp';

	public function encrypt($value, $serialize = true)
		{
/*
            return base64_encode(mcrypt_encrypt(
                MCRYPT_RIJNDAEL_256,
                md5(self::ENCRYPTION_KEY),
                $value,
                MCRYPT_MODE_CBC,
                md5(md5(self::ENCRYPTION_KEY))
            ));
		    */

			return $encrypted = Crypt::encryptString($value);


		}

	public function decrypt($payload, $unserialize = true)
	{
	    /*
            return rtrim(mcrypt_decrypt(
            MCRYPT_RIJNDAEL_256,
            md5(self::ENCRYPTION_KEY),
            base64_decode($payload),
            MCRYPT_MODE_CBC,
            md5(md5(self::ENCRYPTION_KEY))
            ),"\0");
	     */
		return $decrypted = Crypt::decryptString($payload);
	}
}
