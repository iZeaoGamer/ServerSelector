<?php

namespace ServerSelector;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\utils\TextFormat;
use pocketmine\Server;
use pocketmine\item\Item;
use pocketmine\event\Listener;
use pocketmine\inventory\BaseInventory;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\inventory\Inventory;
use pocketmine\event\player\PlayerInteractEvent;
class Main extends PluginBase implements Listener {
	
public function onEnable(): void {
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info("Plugin has been enabled.");
}
	public function onJoin(PlayerJoinEvent $ev) {
		$player = $ev->getPlayer();
		$name = $player->getName();
       	$player->setGamemode(0);
        $player->getInventory()->setSize(9);
       	$player->getInventory()->setItem(0, Item::get(345)->setCustomName("§a§lMain Hub (§bTap me!)"));
	}
      public function onInteract(PlayerInteractEvent $ev) {
	   $player = $ev->getPlayer();
       $item = $ev->getItem();
          if($item->getCustomName() == "§a§lMain Hub (§bTap me!)"){
		  $ev->getPlayer()->transfer("play.voidminerpe.ml", "25621");
		  
		}
	    return true;
      }
}
