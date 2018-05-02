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
		$hub = Item::get(Item::COMPASS, 0, 1);
		$book = Item::get(Item::BOOK, 0, 1);
		$item = Item::get($id, $meta, $amount);
       	$player->setGamemode(0);
        $player->getInventory()->setSize(9);
	$player->getInventory()->getItem(1, Item::get(345)->setCustomName("§a§lMain Hub (§bTap me!)"));
	$player->getInventory()->getItem(3, Item::get(340)->setCustomName("§aServer §bInfo\n§5Tap me!"));
	 if($player->getInventory()->canAddItem($item)) {
            $player->getInventory()->addItem($hub);
            $player->getInventory()->addItem($book);
	}
	}
      public function onInteract(PlayerInteractEvent $ev) {
	   $player = $ev->getPlayer();
       $item = $ev->getItem();
          if($item->getCustomName() == "§a§lMain Hub (§bTap me!)"){
		  $ev->getPlayer()->transfer("play.voidminerpe.ml", "25621");
		  
	  }elseif($item->getCustomName() == "§aServer §bInfo\n§5Tap me!"){
		  $player->sendMessage("§cYou§fTube §dRank info:\n§a1. §2You must have 100+ §asubscribers!\n§a2. §2You must make a server review for the void network. (Review all servers!)\n§a3. §2You must add the ip & port in the description:\n\n§cYou§fTube§4+ §bInfo:\n§b1. §3You must have 300+ subscribers.\n§b2. You must make a server review for The Void Network\n§b3. §bYou must add the IP and port in the descripotion.\n§aIP: §bplay.voidminerpe.ml §aPort: §b25621\n§bDiscord: §3http://tinyurl.com/zeaodc");
		  
		}
	    return true;
      }
}
