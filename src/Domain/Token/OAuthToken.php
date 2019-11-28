<?php
declare(strict_types=1);

namespace Domain\Token;

use Domain\Token;
use Serwild\Bundle\Core\Clock;

final class OAuthToken implements Token
{
    /**
     * @var Clock
     */
    private $expireAt;

    /**
     * @var string
     */
    private $token;

    public function __construct(string $token, Clock $expireAt)
    {
        $this->expireAt = $expireAt;
        $this->token = $token;
    }

    public function isExpired(Clock $clock) : bool
    {
        return $this->expireAt->getTime() < $clock->getTime();
    }
}
