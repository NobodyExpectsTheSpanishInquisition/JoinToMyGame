<?php

declare(strict_types=1);

namespace App\Validator;

final class LoginValidator
{
    public function validate(string $login): bool
    {
        if ($this->hasMinimumEightCharacters($login) === false) {
            return false;
        }

        if ($this->hasMaximumTwoHundredFiftyFiveCharacters($login) === false) {
            return false;
        }

        if ($this->containsAtLeastOneBigLetter($login) === false) {
            return false;
        }

        if ($this->containsAtLeastOneDigit($login) === false) {
            return false;
        }

        if ($this->containsAtLeastOneAllowedSpecialCharacter($login) === false) {
            return false;
        }

        return true;
    }

    private function hasMinimumEightCharacters(string $login): bool
    {
        return strlen($login) < 8;
    }

    private function hasMaximumTwoHundredFiftyFiveCharacters(string $login): bool
    {
        return strlen($login) > 255;
    }

    private function containsAtLeastOneBigLetter(string $login): bool
    {
        return preg_match('/[A-Z]/', $login);
    }

    private function containsAtLeastOneDigit(string $login): bool
    {
        return preg_match('/\d/', $login);
    }

    private function containsAtLeastOneAllowedSpecialCharacter(string $login): bool
    {
        return preg_match('/!/')
    }
}
