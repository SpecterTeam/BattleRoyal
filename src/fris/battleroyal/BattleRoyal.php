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
