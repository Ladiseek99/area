<?php

namespace ladik;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\plugin\Plugin;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat as L;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\block\BlockPlaceEvent;

class main extends PluginBase implements Listener{
    
      public function onEnable() {
          $this->getServer()->getLogger()->info(self::getPrefix()."Â§aAktivovan!");
          $this->getServer()->getPluginManager()->registerEvents($this, $this);
     }
      
      public static function getPrefix(){
        return "Â§lÂ§4[Â§rÂ§6AreaÂ§lÂ§4] Â§rÂ§f";
    }       

      public function onBlockBreak(BlockBreakEvent $event){
		$player = $event->getPlayer();
		$name = $player->getName();
		if($player->isOP()){
			$event->setCancelled(false);
		}else{
			$event->setCancelled(true);
			$player->sendTitle(self::getPrefix().L::RED."NOPE".L::GRAY."!");
		}
	}
	
       public function onBlockPlace(BlockPlaceEvent $event){
		$player = $event->getPlayer();
		$name = $player->getName();
		if($player->isOP()){
			$event->setCancelled(false);
		}else{
			$event->setCancelled(true);
			$player->sendTitle(self::getPrefix().L::RED."NOPE".L::GRAY."!");
		}
	}
	
                      
}
