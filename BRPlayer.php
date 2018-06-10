<?php
/**
 * Created by PhpStorm.
 * User: fris
 * Date: 10/06/18
 * Time: 04:58 م
 */

namespace fris\battleroyal;


use pocketmine\network\SourceInterface;
use pocketmine\Player;

class BRPlayer extends Player
{
    const STATE_PLAYING    = 0;
    const STATE_SPECTATING = 1;
    const STATE_WAITING    = 2;

    private $status = self::STATE_WAITING;

    /**
     * BRPlayer constructor.
     * @param SourceInterface $interface
     * @param string $ip
     * @param int $port
     */
    public function __construct(SourceInterface $interface, string $ip, int $port)
    {
        parent::__construct($interface, $ip, $port);
    }

    /**
     * @return float
     */
    public function getX(): float
    {
        return self::getX();
    }

    /**
     * @return float
     */
    public function getZ(): float
    {
        return self::getZ();
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return bool
     */
    public function isPlaying(): bool
    {
        return $this->getStatus() === self::STATE_PLAYING;
    }

    /**
     * @return bool
     */
    public function isSpectating(): bool
    {
        return $this->getStatus() === self::STATE_SPECTATING;
    }

    /**
     * @return bool
     */
    public function isWaiting(): bool
    {
        return $this->getStatus() === self::STATE_WAITING;
    }
}