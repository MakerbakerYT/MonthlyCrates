<?php
/**
 * Coded by vale
 */


namespace vale;




use muqsit\invmenu\InvMenu;
use muqsit\invmenu\InvMenuHandler;
use pocketmine\command\CommandMap;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\event\server\DataPacketSendEvent;
use pocketmine\inventory\transaction\action\SlotChangeAction;
use pocketmine\item\Item;
use pocketmine\network\mcpe\protocol\ContainerClosePacket;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\MainLogger;
use vale\commands\MonthlyCratesCommand;
use vale\tasks\McTask;
use vale\tasks\McTask2;
use vale\commands\LootBoxAllCommand;
use vale\tasks\McTask3;
use vale\tasks\McTask4;
use vale\tasks\McTask5;
use vale\tasks\McTask6;
use vale\tasks\McTask7;
use vale\tasks\McTask8;
use vale\tasks\McTask9;
use vale\tasks\McTask10;
class MonthlyCrates extends PluginBase implements Listener
{


    private static $instance;
    private $cancel_send = true;
    /**
     * @var InvMenu
     */
    private $inventory;
    /**
     * @var \pocketmine\command\SimpleCommandMap|null
     */
    private $cmd;

    public function onEnable() {
        $this->saveDefaultConfig();
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        @mkdir($this->getDataFolder());
        self::$instance = $this;
        $this->registerCommands();


        if(!InvMenuHandler::isRegistered()){
            InvMenuHandler::register($this);
            MainLogger::getLogger()->info("Enabling MC");

        }
    }

    public static function getInstance(): MonthlyCrates{

        return self::$instance;
    }

    public static function getPrefix(string $prefix)
    {

        $prefix = self::getInstance()->getConfig()->get("Prefix");
        if ($prefix === null) {
            $prefix = "Monthly Crates";
        } else {
            return $prefix;
        }
        return $prefix;
    }

    public function registerCommands()
    {

        $this->cmd = $this->getServer()->getCommandMap();




        $key = $this->getConfig()->get("CommandName");

        $this->cmd->register("$key", new MonthlyCratesCommand($this));
        $this->cmd->register("lootboxall", new LootBoxAllCommand($this));

    }

    public function onInteract12(PlayerInteractEvent $e){
        $player = $e->getPlayer();
        $item = $e->getItem();
           $name = $this->getConfig()->get("MonthlyCrateName");
        if($item->getId() === 130 && $item->getName() === $name){
            $this->MC($player);
            $item = $player->getInventory()->getItemInHand();
            $item->setCount($item->getCount() - 1);
            $player->getInventory()->setItemInHand($item);
        }
    }

    public function MC($player)
    {
        $this->inventory = InvMenu::create(InvMenu::TYPE_DOUBLE_CHEST);
         $this->inventory->setListener([$this, "handleMCMenu"]);
        $this->inventory->readonly();
        $name = self::getInstance()->getConfig()->get("MonthlyCrateName");
        $this->inventory->setName($name);
        $inv = $this->inventory->getInventory();
        $item = Item::get(160, 7, 1)->setCustomName(" ");
        $item2 = Item::get(54);
        $item3 = Item::get(160,0,1);
        $item3->setCustomName("§l§c???");
        $item3->setLore([
    
        '§r§7Tap to recieve random rewards',
        '§r§b* Elite',
        '§r§7* Common', 
        '§r§e* Ultimate',
        '§r§c*  Mythic',
        '§r§6* Legendary'
            
            ]);
        $item4 = Item::get(160,0,1);
        $item4->setCustomName("§l§b???");
        $item4->setLore([
    
        '§r§7Tap to recieve random rewards',
        '§r§b* Elite',
        '§r§7* Common', 
        '§r§e* Ultimate',
        '§r§c*  Mythic',
        '§r§6* Legendary'
            
            ]);
            
            $item5 = Item::get(160,0,1);
        $item5->setCustomName("§l§5???");
        $item5->setLore([
    
        '§r§7Tap to recieve random rewards',
        '§r§b* Elite',
        '§r§7* Common', 
        '§r§e* Ultimate',
        '§r§c*  Mythic',
        '§r§6* Legendary'
            
            ]);
            
            
             $item6 = Item::get(160,0,1);
        $item6->setCustomName("§l§e???");
        $item6->setLore([
    
        '§r§7Tap to recieve random rewards',
        '§r§b* Elite',
        '§r§7* Common', 
        '§r§e* Ultimate',
        '§r§c*  Mythic',
        '§r§6* Legendary'
            
            ]);
            
             $item7 = Item::get(160,0,1);
        $item7->setCustomName("§l§7???");
        $item7->setLore([
    
        '§r§7Tap to recieve random rewards',
        '§r§b* Elite',
        '§r§7* Common', 
        '§r§e* Ultimate',
        '§r§c*  Mythic',
        '§r§6* Legendary'
            
            ]);
            
            
            $item8 = Item::get(160,0,1);
        $item8->setCustomName("§l§a???");
        $item8->setLore([
    
        '§r§7Tap to recieve random rewards',
        '§r§b* Elite',
        '§r§7* Common', 
        '§r§e* Ultimate',
        '§r§c*  Mythic',
        '§r§6* Legendary'
            
            ]);
            
            
             $item9 = Item::get(160,0,1);
        $item9->setCustomName("§l§2???");
        $item9->setLore([
    
        '§r§7Tap to recieve random rewards',
        '§r§b* Elite',
        '§r§7* Common', 
        '§r§e* Ultimate',
        '§r§c*  Mythic',
        '§r§6* Legendary'
            
            ]);
            
            
              $item10 = Item::get(160,0,1);
        $item10->setCustomName("§l§4???");
        $item10->setLore([
    
        '§r§7Tap to recieve random rewards',
        '§r§b* Elite',
        '§r§7* Common', 
        '§r§e* Ultimate',
        '§r§c*  Mythic',
        '§r§6* Legendary'
            
            ]);
            
            
            
              $item11 = Item::get(160,0,1);
        $item11->setCustomName("§l§6???");
        $item11->setLore([
    
        '§r§7Tap to recieve random rewards',
        '§r§b* Elite',
        '§r§7* Common', 
        '§r§e* Ultimate',
        '§r§c*  Mythic',
        '§r§6* Legendary'
            
            ]);
            
              $item12 = Item::get(160,0,1);
        $item12->setCustomName("§l§f???");
        $item12->setLore([
    
        '§r§7Tap to recieve random rewards',
        '§r§b* Elite',
        '§r§7* Common', 
        '§r§e* Ultimate',
        '§r§c*  Mythic',
        '§r§6* Legendary'
            
            ]);
        $inv->setItem(0, $item);
        $inv->setItem(1, $item);
        $inv->setItem(2, $item);
        $inv->setItem(3, $item);
        $inv->setItem(4, $item);
        $inv->setItem(5, $item);
        $inv->setItem(6, $item);
        $inv->setItem(7, $item);
        $inv->setItem(8, $item);
        $inv->setItem(9, $item);
        $inv->setItem(10, $item);
        $inv->setItem(11, $item);
        $inv->setItem(12, $item);
        $inv->setItem(13, $item);
        $inv->setItem(14, $item);
        $inv->setItem(15, $item);
        $inv->setItem(16, $item);
        $inv->setItem(17, $item);
        $inv->setItem(18, $item);
        $inv->setItem(19, $item);
        $inv->setItem(20, $item);
        $inv->setItem(21, $item3);
        $inv->setItem(22, $item4);
        $inv->setItem(23, $item5);
        $inv->setItem(24, $item);
        $inv->setItem(25, $item);
        $inv->setItem(26, $item);
        $inv->setItem(27, $item);
        $inv->setItem(28, $item);
        $inv->setItem(29, $item);
        $inv->setItem(30, $item6);;
        $inv->setItem(31, $item10);
        $inv->setItem(32, $item7);
        $inv->setItem(33, $item);
        $inv->setItem(34, $item);
        $inv->setItem(35, $item);
        $inv->setItem(36, $item);
        $inv->setItem(37, $item);
        $inv->setItem(38, $item);
        $inv->setItem(39, $item12);
        $inv->setItem(40, $item11);
        $inv->setItem(41, $item9);
        $inv->setItem(42, $item);
        $inv->setItem(43, $item);
        $inv->setItem(44, $item);
        $inv->setItem(45, $item);
        $inv->setItem(46, $item);
        $inv->setItem(47, $item);
        $inv->setItem(48, $item);
        $inv->setItem(49, $item);
        $inv->setItem(50, $item);
        $inv->setItem(51, $item);
        $inv->setItem(52, $item);
        $inv->setItem(53, $item);
        $this->inventory->send($player);

    }
    
    public function handleMCMenu(Player $player, Item $itemClicked, Item $itemClickedWith, SlotChangeAction $action): bool{
        
       
       if($itemClicked->getId() === 160 and $itemClicked->getCustomName() === "§l§c???") {
           $level = $player->getLevel();
                           
        if (!$player instanceof Player) {
            
			     $this->getLogger()->alert("!");
        } else {
             $this->getScheduler()->scheduleRepeatingTask(new McTask($this, $player, $this->inventory), 5);
			    }
			    return true;
       }
			    
			    
			
                           
                  if($itemClicked->getId() === 160 and $itemClicked->getCustomName() === "§l§b???") {
                      
                         
        if (!$player instanceof Player) {
			   $this->getLogger()->alert("!");
        } else {
            $this->getScheduler()->scheduleRepeatingTask(new McTask2($this, $player, $this->inventory), 5);
        }
           return true;
                  }

        
                  if($itemClicked->getId() === 160 and $itemClicked->getCustomName() === "§l§5???") {
                      $level = $player->getLevel();
                          
        if (!$player instanceof Player) {
			    $player->sendMessage( "You have to be a player");
        } else {
             $this->getScheduler()->scheduleRepeatingTask(new McTask3($this, $player, $this->inventory), 5);
            	 
        }
         return true;          }
    
   

     
                  if($itemClicked->getId() === 160 and $itemClicked->getCustomName() === "§l§e???") {
                      
                           
        if (!$player instanceof Player) {
			    $player->sendMessage("u r not a player");
        } else {
            
             $this->getScheduler()->scheduleRepeatingTask(new McTask4($this, $player, $this->inventory), 5);
            	
 
}
return true;
}



                  if($itemClicked->getId() === 160 and $itemClicked->getCustomName() === "§l§f???") {
                      
                           
        if (!$player instanceof Player) {
			    $player->sendMessage("u r not a player");
        } else {
            
             $this->getScheduler()->scheduleRepeatingTask(new McTask10($this, $player, $this->inventory), 5);
            	
 
}
return true;
}


if($itemClicked->getId() === 160 and $itemClicked->getCustomName() === "§l§4???") {
                      
                           
        if (!$player instanceof Player) {
			    $player->sendMessage("u r not a player");
        } else {
            
             $this->getScheduler()->scheduleRepeatingTask(new McTask8($this, $player, $this->inventory), 5);
            	
 
}
return true;
}


 if($itemClicked->getId() === 160 and $itemClicked->getCustomName() === "§l§2???") {
                      
                           
        if (!$player instanceof Player) {
			    $player->sendMessage("u r not a player");
        } else {
            
             $this->getScheduler()->scheduleRepeatingTask(new McTask7($this, $player, $this->inventory), 5);
            	
 
}
return true;
}




                  if($itemClicked->getId() === 160 and $itemClicked->getCustomName() === "§l§a???") {
                      
                           
        if (!$player instanceof Player) {
			    $player->sendMessage("u r not a player");
        } else {
            
             $this->getScheduler()->scheduleRepeatingTask(new McTask6($this, $player, $this->inventory), 5);
            	
 
}
return true;
}


if($itemClicked->getId() === 160 and $itemClicked->getCustomName() === "§l§6???") {
                      
                           
        if (!$player instanceof Player) {
			    $player->sendMessage("u r not a player");
        } else {
            
             $this->getScheduler()->scheduleRepeatingTask(new McTask9($this, $player, $this->inventory), 5);
            	
 
}
return true;
}

  
                  if($itemClicked->getId() === 160 and $itemClicked->getCustomName() === "§l§7???") {
                    
        if (!$player instanceof Player) {
			    $player->sendMessage("u gay");
        } else {
            	 $this->getScheduler()->scheduleRepeatingTask(new McTask5($this, $player, $this->inventory), 5);
        }
        
                  }
                  
                 
                  

return true;
    }
    
    
    

    
    
    
    
    public function onDataPacketSend(DataPacketSendEvent $event) : void{
        if($this->cancel_send && $event->getPacket() instanceof ContainerClosePacket){
            $event->setCancelled();
        }
    }

    /**
     * @param DataPacketReceiveEvent $event
     * @priority NORMAL
     * @ignoreCancelled true
     */
    public function onDataPacketReceive(DataPacketReceiveEvent $event) : void{
        if($event->getPacket() instanceof ContainerClosePacket){
            $this->cancel_send = false;
            $event->getPlayer()->sendDataPacket($event->getPacket(), false, true);
            $this->cancel_send = true;
        }
    }
}






