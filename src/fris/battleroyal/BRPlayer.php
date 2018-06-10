<?php
/**
 *     BattleRoyal-PM  Copyright (C) 2018  SpecterTeam
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
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
