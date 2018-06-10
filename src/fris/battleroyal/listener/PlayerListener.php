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

namespace fris\battleroyal\listener;


use fris\battleroyal\BattleRoyal;
use fris\battleroyal\BRPlayer;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerCreationEvent;

class PlayerListener implements Listener
{
    /**
     * PlayerListener constructor.
     * @param BattleRoyal $plugin
     */
    public function __construct(BattleRoyal $plugin)
    {
        $plugin->getServer()->getPluginManager()->registerEvents($this, $plugin);
    }

    /**
     * @param PlayerCreationEvent $event
     */
    public function onCreation(PlayerCreationEvent $event)
    {
        $event->setPlayerClass(BRPlayer::class);
    }
}
