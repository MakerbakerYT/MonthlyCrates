<?php

namespace vale\tasks;


use pocketmine\entity\Effect;
use pocketmine\entity\EffectInstance;
use pocketmine\item\Item;
use pocketmine\math\Vector3;
use pocketmine\scheduler\Task;
use pocketmine\scheduler\TaskHandler;
use vale\MonthlyCrates;


class LootBoxTask extends Task
{


    public $timer = 600;
    private $main;
    private $player;

    public function __construct(MonthlyCrates $main)
    {
        $this->main = $main;


    }


    public function onRun($tick)
    {
        if (!$this->timer == 0) {
            $this->timer--;
    
        }
        if ($this->timer == 600) {

            $this->main->getServer()->broadcastMessage("§f§l** RANDOM LOOTBOX ALL §f§l** §r§7This lootbox all occurs every One Hour. Lootboxes are only given ONE per ip Adress. If you have More than ONE account on the same Ip Adress, you will recieve a random SIMPLE-> ULTIMATE Royak Chest on your flagged account(s). One Account will recieve a §7§lGUARENTEED LOOTBOX §r§bTime Left: §r§710 min");
        }
        if ($this->timer == 540) {

            $this->main->getServer()->broadcastMessage("§f§l** RANDOM LOOTBOX ALL §f§l** §r§7This lootbox all occurs every One Hour. Lootboxes are only given ONE per ip Adress. If you have More than ONE account on the same Ip Adress, you will recieve a random SIMPLE-> ULTIMATE Royak Chest on your flagged account(s). One Account will recieve a §7§lGUARENTEED LOOTBOX §r§bTime Left: §r§79 min");
        }
        if ($this->timer == 480) {

            $this->main->getServer()->broadcastMessage("§f§l** RANDOM LOOTBOX ALL §f§l** §r§7This lootbox all occurs every One Hour. Lootboxes are only given ONE per ip Adress. If you have More than ONE account on the same Ip Adress, you will recieve a random SIMPLE-> ULTIMATE Royak Chest on your flagged account(s). One Account will recieve a §7§lGUARENTEED LOOTBOX §r§bTime Left: §r§78 min");
        }
        if ($this->timer == 420) {

            $this->main->getServer()->broadcastMessage("§f§l** RANDOM LOOTBOX ALL §f§l** §r§7This lootbox all occurs every One Hour. Lootboxes are only given ONE per ip Adress. If you have More than ONE account on the same Ip Adress, you will recieve a random SIMPLE-> ULTIMATE Royak Chest on your flagged account(s). One Account will recieve a §7§lGUARENTEED LOOTBOX §r§bTime Left: §r§77 min");
        }
        if ($this->timer == 360) {
            $this->main->getServer()->broadcastMessage("§f§l** RANDOM LOOTBOX ALL §f§l** §r§7This lootbox all occurs every One Hour. Lootboxes are only given ONE per ip Adress. If you have More than ONE account on the same Ip Adress, you will recieve a random SIMPLE-> ULTIMATE Royak Chest on your flagged account(s). One Account will recieve a §7§lGUARENTEED LOOTBOX §r§bTime Left: §r§76 min");
        }
        if ($this->timer == 300) {
            $this->main->getServer()->broadcastMessage("§f§l** RANDOM LOOTBOX ALL §f§l** §r§7This lootbox all occurs every One Hour. Lootboxes are only given ONE per ip Adress. If you have More than ONE account on the same Ip Adress, you will recieve a random SIMPLE-> ULTIMATE Royak Chest on your flagged account(s). One Account will recieve a §7§lGUARENTEED LOOTBOX §r§bTime Left: §r§75 min");
        }
        if ($this->timer == 240) {
            $this->main->getServer()->broadcastMessage("§f§l** RANDOM LOOTBOX ALL §f§l** §r§7This lootbox all occurs every One Hour. Lootboxes are only given ONE per ip Adress. If you have More than ONE account on the same Ip Adress, you will recieve a random SIMPLE-> ULTIMATE Royak Chest on your flagged account(s). One Account will recieve a §7§lGUARENTEED LOOTBOX §r§bTime Left: §r§74 min");
        }
        if ($this->timer == 180) {
            $this->main->getServer()->broadcastMessage("§f§l** RANDOM LOOTBOX ALL §f§l** §r§7This lootbox all occurs every One Hour. Lootboxes are only given ONE per ip Adress. If you have More than ONE account on the same Ip Adress, you will recieve a random SIMPLE-> ULTIMATE Royak Chest on your flagged account(s). One Account will recieve a §7§lGUARENTEED LOOTBOX §r§bTime Left: §r§73 min");
        }
        if ($this->timer == 120) {
            $this->main->getServer()->broadcastMessage("§f§l** RANDOM LOOTBOX ALL §f§l** §r§7This lootbox all occurs every One Hour. Lootboxes are only given ONE per ip Adress. If you have More than ONE account on the same Ip Adress, you will recieve a random SIMPLE-> ULTIMATE Royak Chest on your flagged account(s). One Account will recieve a §7§lGUARENTEED LOOTBOX §r§bTime Left: §r§72 min");
        }
        if ($this->timer == 60) {

            $this->main->getServer()->broadcastMessage("§f§l** RANDOM LOOTBOX ALL §f§l** §r§7This lootbox all occurs every One Hour. Lootboxes are only given ONE per ip Adress. If you have More than ONE account on the same Ip Adress, you will recieve a random SIMPLE-> ULTIMATE Royak Chest on your flagged account(s). One Account will recieve a §7§lGUARENTEED LOOTBOX §r§bTime Left: §r§71 min");
        }
        if ($this->timer == 0) {
                   $this->main->getServer()->broadcastMessage("§f§l** RANDOM LOOTBOX ALL §f§l** §r§7This lootbox all occurs every One Hour. Lootboxes are only given ONE per ip Adress. If you have More than ONE account on the same Ip Adress, you will recieve a random SIMPLE-> ULTIMATE Royak Chest on your flagged account(s). One Account will recieve a §7§lGUARENTEED LOOTBOX §r§aSTATUS: §l§cRECIEVED");
            $this->onLootBox();
            $this->main->getScheduler()->cancelTask($this->getTaskId());

        }


    }


    public function onLootBox(){
    foreach($this->main->getServer()->getOnlinePlayers() as $player){
        $lootbox = Item::get(130, 0, 1);  
        $name = MonthlyCrates::getInstance()->getConfig()->get("MonthlyCrateName");
$lootbox->setCustomName($name);
$lootbox->setLore([
           '§r§7Tap to recieve random rewards',
        '§r§b* Elite',
        '§r§7* Common', 
        '§r§e* Ultimate',
        '§r§c*  Mythic',
        '§r§6* Legendary'
                ]);	
                $player->getInventory()->addItem($lootbox);
                
				break;
        

    }

    }



}
