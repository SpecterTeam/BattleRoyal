<?php
/**
 * Created by PhpStorm.
 * User: fris
 * Date: 10/06/18
 * Time: 05:30 م
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