<?php
declare(strict_types=1);

namespace Domain\Token;

final class RefreshToken
{
    /**
     * @var string
     */
    private $token;

    /**
     * @param string $token
     */
    public function __construct(string $token)
    {
        $this->token = $token;
    }
}
