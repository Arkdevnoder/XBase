<?php

namespace php;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\entity\Entity;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerLoginEvent;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\entity\Effect;
use pocketmine\block\Block;
use pocketmine\event\player\PlayerDropItemEvent;
use pocketmine\utils\Config;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\level\particle\ItemBreakParticle;
use pocketmine\event\entity\EntityRegainHealthEvent;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\player\PlayerCommandPreprocessEvent;
use pocketmine\event\player\PlayerToggleSprintEvent;
use pocketmine\event\player\PlayerPreLoginEvent;

class main extends PluginBase implements Listener {

public static $authed = array();
public $mysqli;
            
      public function onEnable() {
           $this->getServer()->getPluginManager()->registerEvents($this, $this);
           $this->mysqli = new \mysqli("127.0.0.1", "user", "password", "table");
           if($this->mysqli->connect_errno > 0){
            $this->getLogger()->info('CANT CONNECT!! [' . $this->mysqli->connect_error . ']');
         	} else {
                $this->getLogger()->info('Successfully connected to database ');
                }
         }
          public function onJoin(PlayerJoinEvent $event){
               $playerName = $event->getPlayer()->getName();
               $checking = in_array($playerName, $this->authed);
               if($checking == 1){
               //success TO DO!
               } else {
               $event->setCancelled();
               }
         }
     
         }
?>
