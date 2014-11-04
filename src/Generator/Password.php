<?php

/**
 * Password generator
 */
namespace Codersquad\Pennephp\Generator;

use Codersquad\Pennephp\Datatype\Collection;
use Codersquad\Pennephp\Datatype\String;

/**
 * Class Password
 * @package Codersquad\Pennephp\Generator
 * @author Oliver Monneke <oliver@codersquad.de>
 * @version 1.0
 */
class Password
{
    /**
     * @var int
     */
    protected $numberOfPasswords = 1;
    /**
     * @var int
     */
    protected $passwordLength = 8;
    /**
     * @var bool
     */
    protected $useLowerCase = true;
    /**
     * @var bool
     */
    protected $useUpperCase = true;
    /**
     * @var bool
     */
    protected $useSpecialChars = true;
    /**
     * @var bool
     */
    protected $useChars = true;
    /**
     * @var bool
     */
    protected $useUmlauts = false;
    /**
     * @var bool
     */
    protected $useNumbers = true;
    /**
     * @var string
     */
    protected $charsToUse = '';
    /**
     * @var array
     */
    protected $charArray = [];
    /**
     * @var array
     */
    protected $passwords = [];

    /**
     * @var string
     */
    protected static $chars = 'abcdefghijklmnopqrstuvwxyz';
    /**
     * @var string
     */
    protected static $specialChars = '^°!"§$%&/()=?´`²³{[]}\@+#-.,*\'_:;~<>|€';
    /**
     * @var string
     */
    protected static $umlauts = 'äöü';
    /**
     * @var string
     */
    protected static $numbers = '0123456789';

    /**
     * @return array
     */
    public function generate()
    {
        $this->prepareChars();
        $this->generateRandomPassword();

        return $this->passwords;
    }

    /**
     *
     */
    protected function prepareChars()
    {
        $this->charsToUse .= self::$chars;

        if ($this->useSpecialChars) {
            $this->charsToUse .= self::$specialChars;
        }

        if ($this->useUmlauts) {
            $this->charsToUse .= self::$umlauts;
        }

        if ($this->useLowerCase) {
            $this->charsToUse .= String::lower($this->charsToUse);
        }

        if ($this->useUpperCase) {
            $this->charsToUse .= String::upper($this->charsToUse);
        }

        $charArray = Collection::explode($this->charsToUse, '');

        if (Collection::isValid($charArray)) {
            $this->charArray = array_unique($charArray);
        }
    }

    /**
     *
     */
    protected function generateRandomPassword()
    {
        $password = '';

        for ($i = 0; $i < $this->numberOfPasswords; $i++) {
            for ($j = 0; $j < $this->passwordLength; $j++) {
                $password .= $this->charArray[rand(0, Collection::length($this->charArray) - 1)];
            }
        }

        $this->passwords[] = $password;
    }

    /**
     * @return int
     */
    public function getNumberOfPasswords()
    {
        return $this->numberOfPasswords;
    }

    /**
     * @param int $numberOfPasswords
     */
    public function setNumberOfPasswords($numberOfPasswords)
    {
        $this->numberOfPasswords = $numberOfPasswords;
    }

    /**
     * @return int
     */
    public function getPasswordLength()
    {
        return $this->passwordLength;
    }

    /**
     * @param int $passwordLength
     */
    public function setPasswordLength($passwordLength)
    {
        $this->passwordLength = $passwordLength;
    }

    /**
     * @return boolean
     */
    public function isUseChars()
    {
        return $this->useChars;
    }

    /**
     * @param boolean $useChars
     */
    public function setUseChars($useChars)
    {
        $this->useChars = $useChars;
    }

    /**
     * @return boolean
     */
    public function isUseLowerCase()
    {
        return $this->useLowerCase;
    }

    /**
     * @param boolean $useLowerCase
     */
    public function setUseLowerCase($useLowerCase)
    {
        $this->useLowerCase = $useLowerCase;
    }

    /**
     * @return boolean
     */
    public function isUseNumbers()
    {
        return $this->useNumbers;
    }

    /**
     * @param boolean $useNumbers
     */
    public function setUseNumbers($useNumbers)
    {
        $this->useNumbers = $useNumbers;
    }

    /**
     * @return boolean
     */
    public function isUseSpecialChars()
    {
        return $this->useSpecialChars;
    }

    /**
     * @param boolean $useSpecialChars
     */
    public function setUseSpecialChars($useSpecialChars)
    {
        $this->useSpecialChars = $useSpecialChars;
    }

    /**
     * @return boolean
     */
    public function isUseUmlauts()
    {
        return $this->useUmlauts;
    }

    /**
     * @param boolean $useUmlauts
     */
    public function setUseUmlauts($useUmlauts)
    {
        $this->useUmlauts = $useUmlauts;
    }

    /**
     * @return boolean
     */
    public function isUseUpperCase()
    {
        return $this->useUpperCase;
    }

    /**
     * @param boolean $useUpperCase
     */
    public function setUseUpperCase($useUpperCase)
    {
        $this->useUpperCase = $useUpperCase;
    }
}
