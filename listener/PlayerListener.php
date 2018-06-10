<?php
/**
 * Created by PhpStorm.
 * User: fris
 * Date: 10/06/18
 * Time: 05:01 م
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