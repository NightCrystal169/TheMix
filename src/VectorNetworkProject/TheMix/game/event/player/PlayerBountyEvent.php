<?php
/**
 * Copyright (c) 2018 VectorNetworkProject. All rights reserved. MIT license.
 *
 * GitHub: https://github.com/VectorNetworkProject/TheMix
 * Website: https://www.vector-network.tk
 */

namespace VectorNetworkProject\TheMix\game\event\player;

use pocketmine\event\Cancellable;
use pocketmine\event\player\PlayerEvent;
use pocketmine\Player;

class PlayerBountyEvent extends PlayerEvent implements Cancellable
{
    public const ENABLE_BOUNTY = 0;
    public const PLUS_GOLD = 1;

    /* @var int $gold */
    private $gold;

    /* @var int $bounty */
    private $bounty;

    /**
     * PlayerBountyEvent constructor.
     *
     * @param Player $player
     * @param int    $gold
     * @param int    $bounty
     */
    public function __construct(Player $player, int $gold, int $bounty)
    {
        $this->player = $player;
        $this->gold = $gold;
        $this->bounty = $bounty;
    }

    /**
     * @return int
     */
    public function getGold(): int
    {
        return $this->gold;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->bounty;
    }
}
