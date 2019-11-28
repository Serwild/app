<?php
declare(strict_types=1);

namespace Domain;

class User
{
    /**
     * @var Token
     */
    private $token;

    public function __construct(Token $token)
    {
        $this->token = $token;
    }
}
