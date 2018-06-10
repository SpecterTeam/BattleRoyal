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

namespace fris\battleroyal\task;


use fris\battleroyal\BattleRoyal;
use pocketmine\scheduler\Task;

class BattleRoyalTask extends Task
{
    public function __construct(BattleRoyal $plugin)
    {
        $plugin->getServer()->getPluginManager();
    }

    /**
     * Actions to execute when run
     *
     * @param int $currentTick
     *
     * @return void
     */
    public function onRun(int $currentTick)
    {
        // TODO: Implement onRun() method.
    }
}
