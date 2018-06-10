<?php
/**
 * Created by PhpStorm.
 * User: fris
 * Date: 10/06/18
 * Time: 04:56 م
 */

namespace fris\battleroyal;


use fris\battleroyal\listener\PlayerListener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\Config;

class BattleRoyal extends PluginBase
{
    /** @var BattleRoyal */
    public static $instance;
    /** @var Config */
    public $config;
    /** @var int */
    public $playersToStart = 50;

    public function onEnable()
    {
        self::$instance = $this;
        $this->registerListeners();
        $this->setConfig(new Config("settings.yml", Config::YAML, ["PlayersToStart" => 50]));
        $this->setPlayersToStart($this->getConfig()->get("PlayersToStart"));
        $this->getLogger()->notice("BattleRoyal was loaded successfully!");
        $this->getLogger()->notice("Author: http://fris.xyz (twitter: @OGFris) (github: OGFris)");
    }

    public function registerListeners()
    {
        new PlayerListener($this);
    }

    /**
     * @return Config
     */
    public function getConfig(): Config
    {
        return $this->config;
    }

    /**
     * @param Config $config
     */
    public function setConfig(Config $config): void
    {
        $this->config = $config;
    }

    /**
     * @return int
     */
    public function getPlayersToStart(): int
    {
        return $this->playersToStart;
    }

    /**
     * @param int $playersToStart
     */
    public function setPlayersToStart(int $playersToStart): void
    {
        $this->playersToStart = $playersToStart;
    }
}