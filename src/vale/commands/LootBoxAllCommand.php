<?php

namespace vale\commands;


use pocketmine\Command\PluginCommand;
use pocketmine\Command\Command;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\item\enchantment\EnchantmentInstance;
use pocketmine\item\Item;
use pocketmine\Player;
use vale\MonthlyCrates;
use pocketmine\scheduler;
use vale\tasks\LootBoxTask;

class LootboxallCommand extends PluginCommand{
    
    
    private $plugin;
    
    public function __construct(MonthlyCrates $plugin){
        $this->plugin = $plugin;
        parent::__construct("lootboxall",$plugin);
        $this->setDescription("Give alootbox to all players");
    }
    
   public function execute(\pocketmine\command\CommandSender $sender, string $commandLabel, array $args){
       
       if(!isset($args[0])){
           $sender->sendMessage("Invalid Usage Please do /lootboxall start");
           return false;
       }
       if(isset($args[0])){
           switch($args[0]){
               case "start":
                   $this->plugin->getScheduler()->scheduleRepeatingTask(new LootBoxTask($this->plugin), 10);
                    $this->plugin->getServer()->broadcastMessage("§f§l** RANDOM LOOTBOX ALL §f§l** §r§7This lootbox all occurs every One Hour. Lootboxes are only given ONE per ip Adress. If you have More than ONE account on the same Ip Adress, you will recieve a random SIMPLE-> ULTIMATE Royak Chest on your flagged account(s). One Account will recieve a §7§lGUARENTEED LOOTBOX §r§bTime Left: §r§710 min");
           }
       }
  }
}
