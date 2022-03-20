<?php

namespace App\CKFinder\Security;

use CKSource\Bundle\CKFinderBundle\Authentication\Authentication as AuthenticationBase;

class CustomCKFinderAuth extends AuthenticationBase
{
    public function authenticate(): bool
    {
        return true;
    }
}