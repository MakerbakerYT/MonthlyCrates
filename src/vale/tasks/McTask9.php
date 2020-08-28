
<?php

declare(strict_types=1);

namespace vale\tasks;

use pocketmine\scheduler\Task;
use pocketmine\item\Item;
use mazaicrafty\sm\SoundModuleAPI;
use mazaicrafty\sm\Sound;
use pocketmine\network\mcpe\protocol\PlaySoundPacket;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\item\enchantment\EnchantmentInstance;

use vale\MonthlyCrates;

class McTask9 extends Task
{

    /** @var MonthlyCrates */
    private $plugin;

    public $seconds = 0;


    /**
     * @param MonthlyCrates $plugin
     * @param $player
     * @param $menu
     */
    public function __construct(MonthlyCrates $plugin, $player, $menu)
    {
        $this->plugin = $plugin;
        $this->player = $player;
        $this->menu = $menu;
    }

    public function onRun(int $tick): void
    {
        $menu = $this->menu;
        $inv = $menu->getInventory();
        $player = $this->player;
        if ($player->isOnline()) {
            $level = $player->getLevel();
            $gray = Item::get(160, 7, 1)->setCustomName(" ");
            $red = Item::get(160, 14, 1)->setCustomName(" ");
            $orange = Item::get(160, 1, 1)->setCustomName(" ");
            $yellow = Item::get(160, 4, 1)->setCustomName(" ");
            $green = Item::get(160, 5, 1)->setCustomName(" ");
            $blue = Item::get(160, 3, 1)->setCustomName(" ");
            $air = Item::get(0, 0, 0);
            if ($this->seconds === 2) {
                # Slot 1
                $unb = Enchantment::getEnchantment(Enchantment::UNBREAKING);
                $prot = Enchantment::getEnchantment(Enchantment::PROTECTION);
                $r1s1 = Item::get(54, 0, 1);
                $r1s1->addEnchantment(new EnchantmentInstance($unb, 7));
                $r1s1->addEnchantment(new EnchantmentInstance($prot, 5));
                $r1s1->setCustomName("§r§7Special Set §b§lYeti");
                $r1s1->setLore([
                    '§r§bThe set of The Yeti.',
                    '§r§b§lYETI SET BONUS',
                    '§r§b* Deal +10% damage to all enemies.',
                    '§r§b* Enemies deal less damage to you.',
                    '§r§b* Frost Ability.',
                    '§r§7(Requires all 4 Yeti Items)',
                    '§r§broyalpe.buycraft.net',

                ]);
                $unb = Enchantment::getEnchantment(Enchantment::UNBREAKING);
                $prot = Enchantment::getEnchantment(Enchantment::PROTECTION);
                $r2s1 = Item::get(54, 0, 1);
                $r2s1->addEnchantment(new EnchantmentInstance($unb, 7));
                $r2s1->addEnchantment(new EnchantmentInstance($prot, 5));
                $r2s1->setCustomName("§r§7Special Set §c§lPhantom");
                $r2s1->setLore([
                    '§r§cThe set of The Phantom.',
                    '§r§c§lPHANTOM SET BONUS',
                    '§r§cDeal +25% damage to all enemies.',
                    '§r§7(Requires all 4 Phantom Items)',
                    '§r§croyalpe.buycraft.net',

                ]);

                $r3s1 = Item::get(Item::GOLD_INGOT);
                $r4s1 = Item::get(Item::DIAMOND);
                $r5s1 = Item::get(Item::GOLD_INGOT);
                $r6s1 = Item::get(Item::IRON_INGOT);
                $r7s1 = Item::get(Item::DIAMOND);
                $r8s1 = Item::get(Item::GOLD_INGOT);
                $r9s1 = Item::get(Item::IRON_INGOT);
                $r10s1 = Item::get(Item::DIAMOND);
                # Slot 2
                $r1s2 = Item::get(Item::DIAMOND);
                $r2s2 = Item::get(Item::IRON_INGOT);
                $r3s2 = Item::get(Item::GOLD_INGOT);
                $r4s2 = Item::get(Item::DIAMOND);
                $r5s2 = Item::get(Item::GOLD_INGOT);
                $r6s2 = Item::get(Item::IRON_INGOT);
                $r7s2 = Item::get(Item::DIAMOND);
                $r8s2 = Item::get(Item::GOLD_INGOT);
                $r9s2 = Item::get(Item::IRON_INGOT);
                $r10s2 = Item::get(Item::DIAMOND);
                # Slot 3
                $r1s3 = Item::get(Item::DIAMOND);
                $r2s3 = Item::get(Item::IRON_INGOT);
                $r3s3 = Item::get(Item::GOLD_INGOT);
                $r4s3 = Item::get(Item::DIAMOND);
                $r5s3 = Item::get(Item::GOLD_INGOT);
                $r6s3 = Item::get(Item::IRON_INGOT);
                $r7s3 = Item::get(Item::DIAMOND);
                $r8s3 = Item::get(Item::GOLD_INGOT);
                $r9s3 = Item::get(Item::IRON_INGOT);
                $r10s3 = Item::get(Item::DIAMOND);
                # Slot 4
                $r1s4 = Item::get(Item::DIAMOND);
                $r2s4 = Item::get(Item::IRON_INGOT);
                $r3s4 = Item::get(Item::GOLD_INGOT);
                $r4s4 = Item::get(Item::DIAMOND);
                $r5s4 = Item::get(Item::GOLD_INGOT);
                $r6s4 = Item::get(Item::IRON_INGOT);
                $r7s4 = Item::get(Item::DIAMOND);
                $r8s4 = Item::get(Item::GOLD_INGOT);
                $r9s4 = Item::get(Item::IRON_INGOT);
                $r10s4 = Item::get(Item::DIAMOND);
                # Slot 5
                $r1s5 = Item::get(Item::DIAMOND);
                $r2s5 = Item::get(Item::IRON_INGOT);
                $r3s5 = Item::get(Item::GOLD_INGOT);
                $r4s5 = Item::get(Item::DIAMOND);
                $r5s5 = Item::get(Item::GOLD_INGOT);
                $r6s5 = Item::get(Item::IRON_INGOT);
                $r7s5 = Item::get(Item::DIAMOND);
                $r8s5 = Item::get(Item::GOLD_INGOT);
                $r9s5 = Item::get(Item::IRON_INGOT);
                $r10s5 = Item::get(Item::DIAMOND);
                # Slot 6
                $r1s6 = Item::get(Item::DIAMOND);
                $r2s6 = Item::get(Item::IRON_INGOT);
                $r3s6 = Item::get(Item::GOLD_INGOT);
                $r4s6 = Item::get(Item::DIAMOND);
                $r5s6 = Item::get(Item::GOLD_INGOT);
                $r6s6 = Item::get(Item::IRON_INGOT);
                $r7s6 = Item::get(Item::DIAMOND);
                $r8s6 = Item::get(Item::GOLD_INGOT);
                $r9s6 = Item::get(Item::IRON_INGOT);
                $r10s6 = Item::get(Item::DIAMOND);
                # Slot 7
                $r1s7 = Item::get(Item::DIAMOND);
                $r2s7 = Item::get(Item::IRON_INGOT);
                $r3s7 = Item::get(Item::GOLD_INGOT);
                $r4s7 = Item::get(Item::DIAMOND);
                $r5s7 = Item::get(Item::GOLD_INGOT);
                $r6s7 = Item::get(Item::IRON_INGOT);
                $r7s7 = Item::get(Item::DIAMOND);
                $r8s7 = Item::get(Item::GOLD_INGOT);
                $r9s7 = Item::get(Item::IRON_INGOT);
                $r10s7 = Item::get(Item::DIAMOND);
                # Slot 8
                $r1s8 = Item::get(Item::DIAMOND);
                $r2s8 = Item::get(Item::IRON_INGOT);
                $r3s8 = Item::get(Item::GOLD_INGOT);
                $r4s8 = Item::get(Item::DIAMOND);
                $r5s8 = Item::get(Item::GOLD_INGOT);
                $r6s8 = Item::get(Item::IRON_INGOT);
                $r7s8 = Item::get(Item::DIAMOND);
                $r8s8 = Item::get(Item::GOLD_INGOT);
                $r9s8 = Item::get(Item::IRON_INGOT);
                $r10s8 = Item::get(Item::DIAMOND);
                # Slot 9
                $r1s9 = Item::get(Item::DIAMOND);
                $r2s9 = Item::get(Item::IRON_INGOT);
                $r3s9 = Item::get(Item::GOLD_INGOT);
                $r4s9 = Item::get(Item::DIAMOND);
                $r5s9 = Item::get(Item::GOLD_INGOT);
                $r6s9 = Item::get(Item::IRON_INGOT);
                $r7s9 = Item::get(Item::DIAMOND);
                $r8s9 = Item::get(Item::GOLD_INGOT);
                $r9s9 = Item::get(Item::IRON_INGOT);
                $r10s9 = Item::get(Item::DIAMOND);
                $item = Item::get(160, 14, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
                $items = array($r1s2, $r2s2, $r3s2, $r4s2, $r5s2, $r6s2, $r7s2, $r8s2, $r9s2, $r10s2);
                $rand = array_rand($items);
                $i = $items[$rand];
                $inv->setItem(40, $i);
                $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
                $level->addSound($sound);

            }
            if ($this->seconds === 4) {
                # Left Side
                $unb = Enchantment::getEnchantment(Enchantment::UNBREAKING);
                $prot = Enchantment::getEnchantment(Enchantment::PROTECTION);
                $r1s1 = Item::get(54, 0, 1);
                $r1s1->addEnchantment(new EnchantmentInstance($unb, 7));
                $r1s1->addEnchantment(new EnchantmentInstance($prot, 5));
                $r1s1->setCustomName("§r§7Special Set §b§lYeti");
                $r1s1->setLore([
                    '§r§bThe set of The Yeti.',
                    '§r§b§lYETI SET BONUS',
                    '§r§b* Deal +10% damage to all enemies.',
                    '§r§b* Enemies deal less damage to you.',
                    '§r§b* Frost Ability.',
                    '§r§7(Requires all 4 Yeti Items)',
                    '§r§broyalpe.buycraft.net',

                ]);
                $unb = Enchantment::getEnchantment(Enchantment::UNBREAKING);
                $prot = Enchantment::getEnchantment(Enchantment::PROTECTION);
                $r2s1 = Item::get(54, 0, 1);
                $r2s1->addEnchantment(new EnchantmentInstance($unb, 7));
                $r2s1->addEnchantment(new EnchantmentInstance($prot, 5));
                $r2s1->setCustomName("§r§7Special Set §c§lPhantom");
                $r2s1->setLore([
                    '§r§cThe set of The Phantom.',
                    '§r§c§lPHANTOM SET BONUS',
                    '§r§cDeal +25% damage to all enemies.',
                    '§r§7(Requires all 4 Phantom Items)',
                    '§r§croyalpe.buycraft.net',

                ]);

                $r3s1 = Item::get(Item::GOLD_INGOT);
                $r4s1 = Item::get(Item::DIAMOND);
                $r5s1 = Item::get(Item::GOLD_INGOT);
                $r6s1 = Item::get(Item::IRON_INGOT);
                $r7s1 = Item::get(Item::DIAMOND);
                $r8s1 = Item::get(Item::GOLD_INGOT);
                $r9s1 = Item::get(Item::IRON_INGOT);
                $r10s1 = Item::get(Item::DIAMOND);
                # Slot 2
                $r1s2 = Item::get(Item::DIAMOND);
                $r2s2 = Item::get(Item::IRON_INGOT);
                $r3s2 = Item::get(Item::GOLD_INGOT);
                $r4s2 = Item::get(Item::DIAMOND);
                $r5s2 = Item::get(Item::GOLD_INGOT);
                $r6s2 = Item::get(Item::IRON_INGOT);
                $r7s2 = Item::get(Item::DIAMOND);
                $r8s2 = Item::get(Item::GOLD_INGOT);
                $r9s2 = Item::get(Item::IRON_INGOT);
                $r10s2 = Item::get(Item::DIAMOND);
                # Slot 3
                $r1s3 = Item::get(Item::DIAMOND);
                $r2s3 = Item::get(Item::IRON_INGOT);
                $r3s3 = Item::get(Item::GOLD_INGOT);
                $r4s3 = Item::get(Item::DIAMOND);
                $r5s3 = Item::get(Item::GOLD_INGOT);
                $r6s3 = Item::get(Item::IRON_INGOT);
                $r7s3 = Item::get(Item::DIAMOND);
                $r8s3 = Item::get(Item::GOLD_INGOT);
                $r9s3 = Item::get(Item::IRON_INGOT);
                $r10s3 = Item::get(Item::DIAMOND);
                # Slot 4
                $r1s4 = Item::get(Item::DIAMOND);
                $r2s4 = Item::get(Item::IRON_INGOT);
                $r3s4 = Item::get(Item::GOLD_INGOT);
                $r4s4 = Item::get(Item::DIAMOND);
                $r5s4 = Item::get(Item::GOLD_INGOT);
                $r6s4 = Item::get(Item::IRON_INGOT);
                $r7s4 = Item::get(Item::DIAMOND);
                $r8s4 = Item::get(Item::GOLD_INGOT);
                $r9s4 = Item::get(Item::IRON_INGOT);
                $r10s4 = Item::get(Item::DIAMOND);
                # Slot 5
                $r1s5 = Item::get(Item::DIAMOND);
                $r2s5 = Item::get(Item::IRON_INGOT);
                $r3s5 = Item::get(Item::GOLD_INGOT);
                $r4s5 = Item::get(Item::DIAMOND);
                $r5s5 = Item::get(Item::GOLD_INGOT);
                $r6s5 = Item::get(Item::IRON_INGOT);
                $r7s5 = Item::get(Item::DIAMOND);
                $r8s5 = Item::get(Item::GOLD_INGOT);
                $r9s5 = Item::get(Item::IRON_INGOT);
                $r10s5 = Item::get(Item::DIAMOND);
                # Slot 6
                $r1s6 = Item::get(Item::DIAMOND);
                $r2s6 = Item::get(Item::IRON_INGOT);
                $r3s6 = Item::get(Item::GOLD_INGOT);
                $r4s6 = Item::get(Item::DIAMOND);
                $r5s6 = Item::get(Item::GOLD_INGOT);
                $r6s6 = Item::get(Item::IRON_INGOT);
                $r7s6 = Item::get(Item::DIAMOND);
                $r8s6 = Item::get(Item::GOLD_INGOT);
                $r9s6 = Item::get(Item::IRON_INGOT);
                $r10s6 = Item::get(Item::DIAMOND);
                # Slot 7
                $r1s7 = Item::get(Item::DIAMOND);
                $r2s7 = Item::get(Item::IRON_INGOT);
                $r3s7 = Item::get(Item::GOLD_INGOT);
                $r4s7 = Item::get(Item::DIAMOND);
                $r5s7 = Item::get(Item::GOLD_INGOT);
                $r6s7 = Item::get(Item::IRON_INGOT);
                $r7s7 = Item::get(Item::DIAMOND);
                $r8s7 = Item::get(Item::GOLD_INGOT);
                $r9s7 = Item::get(Item::IRON_INGOT);
                $r10s7 = Item::get(Item::DIAMOND);
                # Slot 8
                $r1s8 = Item::get(Item::DIAMOND);
                $r2s8 = Item::get(Item::IRON_INGOT);
                $r3s8 = Item::get(Item::GOLD_INGOT);
                $r4s8 = Item::get(Item::DIAMOND);
                $r5s8 = Item::get(Item::GOLD_INGOT);
                $r6s8 = Item::get(Item::IRON_INGOT);
                $r7s8 = Item::get(Item::DIAMOND);
                $r8s8 = Item::get(Item::GOLD_INGOT);
                $r9s8 = Item::get(Item::IRON_INGOT);
                $r10s8 = Item::get(Item::DIAMOND);
                # Slot 9
                $r1s9 = Item::get(Item::DIAMOND);
                $r2s9 = Item::get(Item::IRON_INGOT);
                $r3s9 = Item::get(Item::GOLD_INGOT);
                $r4s9 = Item::get(Item::DIAMOND);
                $r5s9 = Item::get(Item::GOLD_INGOT);
                $r6s9 = Item::get(Item::IRON_INGOT);
                $r7s9 = Item::get(Item::DIAMOND);
                $r8s9 = Item::get(Item::GOLD_INGOT);
                $r9s9 = Item::get(Item::IRON_INGOT);
                $r10s9 = Item::get(Item::DIAMOND);
                $item = Item::get(160, 1, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
                $items = array($r1s2, $r2s2, $r3s2, $r4s2, $r5s2, $r6s2, $r7s2, $r8s2, $r9s2, $r10s2);
                $rand = array_rand($items);
                $i = $items[$rand];
                $inv->setItem(40, $i);
                $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
                $level->addSound($sound);
            }
            if ($this->seconds === 6) {
                $unb = Enchantment::getEnchantment(Enchantment::UNBREAKING);
                $prot = Enchantment::getEnchantment(Enchantment::PROTECTION);
                $r1s1 = Item::get(54, 0, 1);
                $r1s1->addEnchantment(new EnchantmentInstance($unb, 7));
                $r1s1->addEnchantment(new EnchantmentInstance($prot, 5));
                $r1s1->setCustomName("§r§7Special Set §b§lYeti");
                $r1s1->setLore([
                    '§r§bThe set of The Yeti.',
                    '§r§b§lYETI SET BONUS',
                    '§r§b* Deal +10% damage to all enemies.',
                    '§r§b* Enemies deal less damage to you.',
                    '§r§b* Frost Ability.',
                    '§r§7(Requires all 4 Yeti Items)',
                    '§r§broyalpe.buycraft.net',

                ]);
                $unb = Enchantment::getEnchantment(Enchantment::UNBREAKING);
                $prot = Enchantment::getEnchantment(Enchantment::PROTECTION);
                $r2s1 = Item::get(54, 0, 1);
                $r2s1->addEnchantment(new EnchantmentInstance($unb, 7));
                $r2s1->addEnchantment(new EnchantmentInstance($prot, 5));
                $r2s1->setCustomName("§r§7Special Set §c§lPhantom");
                $r2s1->setLore([
                    '§r§cThe set of The Phantom.',
                    '§r§c§lPHANTOM SET BONUS',
                    '§r§cDeal +25% damage to all enemies.',
                    '§r§7(Requires all 4 Phantom Items)',
                    '§r§croyalpe.buycraft.net',

                ]);

                $r3s1 = Item::get(Item::GOLD_INGOT);
                $r4s1 = Item::get(Item::DIAMOND);
                $r5s1 = Item::get(Item::GOLD_INGOT);
                $r6s1 = Item::get(Item::IRON_INGOT);
                $r7s1 = Item::get(Item::DIAMOND);
                $r8s1 = Item::get(Item::GOLD_INGOT);
                $r9s1 = Item::get(Item::IRON_INGOT);
                $r10s1 = Item::get(Item::DIAMOND);
                # Slot 2
                $r1s2 = Item::get(Item::DIAMOND);
                $r2s2 = Item::get(Item::IRON_INGOT);
                $r3s2 = Item::get(Item::GOLD_INGOT);
                $r4s2 = Item::get(Item::DIAMOND);
                $r5s2 = Item::get(Item::GOLD_INGOT);
                $r6s2 = Item::get(Item::IRON_INGOT);
                $r7s2 = Item::get(Item::DIAMOND);
                $r8s2 = Item::get(Item::GOLD_INGOT);
                $r9s2 = Item::get(Item::IRON_INGOT);
                $r10s2 = Item::get(Item::DIAMOND);
                # Slot 3
                $r1s3 = Item::get(Item::DIAMOND);
                $r2s3 = Item::get(Item::IRON_INGOT);
                $r3s3 = Item::get(Item::GOLD_INGOT);
                $r4s3 = Item::get(Item::DIAMOND);
                $r5s3 = Item::get(Item::GOLD_INGOT);
                $r6s3 = Item::get(Item::IRON_INGOT);
                $r7s3 = Item::get(Item::DIAMOND);
                $r8s3 = Item::get(Item::GOLD_INGOT);
                $r9s3 = Item::get(Item::IRON_INGOT);
                $r10s3 = Item::get(Item::DIAMOND);
                # Slot 4
                $r1s4 = Item::get(Item::DIAMOND);
                $r2s4 = Item::get(Item::IRON_INGOT);
                $r3s4 = Item::get(Item::GOLD_INGOT);
                $r4s4 = Item::get(Item::DIAMOND);
                $r5s4 = Item::get(Item::GOLD_INGOT);
                $r6s4 = Item::get(Item::IRON_INGOT);
                $r7s4 = Item::get(Item::DIAMOND);
                $r8s4 = Item::get(Item::GOLD_INGOT);
                $r9s4 = Item::get(Item::IRON_INGOT);
                $r10s4 = Item::get(Item::DIAMOND);
                # Slot 5
                $r1s5 = Item::get(Item::DIAMOND);
                $r2s5 = Item::get(Item::IRON_INGOT);
                $r3s5 = Item::get(Item::GOLD_INGOT);
                $r4s5 = Item::get(Item::DIAMOND);
                $r5s5 = Item::get(Item::GOLD_INGOT);
                $r6s5 = Item::get(Item::IRON_INGOT);
                $r7s5 = Item::get(Item::DIAMOND);
                $r8s5 = Item::get(Item::GOLD_INGOT);
                $r9s5 = Item::get(Item::IRON_INGOT);
                $r10s5 = Item::get(Item::DIAMOND);
                # Slot 6
                $r1s6 = Item::get(Item::DIAMOND);
                $r2s6 = Item::get(Item::IRON_INGOT);
                $r3s6 = Item::get(Item::GOLD_INGOT);
                $r4s6 = Item::get(Item::DIAMOND);
                $r5s6 = Item::get(Item::GOLD_INGOT);
                $r6s6 = Item::get(Item::IRON_INGOT);
                $r7s6 = Item::get(Item::DIAMOND);
                $r8s6 = Item::get(Item::GOLD_INGOT);
                $r9s6 = Item::get(Item::IRON_INGOT);
                $r10s6 = Item::get(Item::DIAMOND);
                # Slot 7
                $r1s7 = Item::get(Item::DIAMOND);
                $r2s7 = Item::get(Item::IRON_INGOT);
                $r3s7 = Item::get(Item::GOLD_INGOT);
                $r4s7 = Item::get(Item::DIAMOND);
                $r5s7 = Item::get(Item::GOLD_INGOT);
                $r6s7 = Item::get(Item::IRON_INGOT);
                $r7s7 = Item::get(Item::DIAMOND);
                $r8s7 = Item::get(Item::GOLD_INGOT);
                $r9s7 = Item::get(Item::IRON_INGOT);
                $r10s7 = Item::get(Item::DIAMOND);
                # Slot 8
                $r1s8 = Item::get(Item::DIAMOND);
                $r2s8 = Item::get(Item::IRON_INGOT);
                $r3s8 = Item::get(Item::GOLD_INGOT);
                $r4s8 = Item::get(Item::DIAMOND);
                $r5s8 = Item::get(Item::GOLD_INGOT);
                $r6s8 = Item::get(Item::IRON_INGOT);
                $r7s8 = Item::get(Item::DIAMOND);
                $r8s8 = Item::get(Item::GOLD_INGOT);
                $r9s8 = Item::get(Item::IRON_INGOT);
                $r10s8 = Item::get(Item::DIAMOND);
                # Slot 9
                $r1s9 = Item::get(Item::DIAMOND);
                $r2s9 = Item::get(Item::IRON_INGOT);
                $r3s9 = Item::get(Item::GOLD_INGOT);
                $r4s9 = Item::get(Item::DIAMOND);
                $r5s9 = Item::get(Item::GOLD_INGOT);
                $r6s9 = Item::get(Item::IRON_INGOT);
                $r7s9 = Item::get(Item::DIAMOND);
                $r8s9 = Item::get(Item::GOLD_INGOT);
                $r9s9 = Item::get(Item::IRON_INGOT);
                $r10s9 = Item::get(Item::DIAMOND);
                $item = Item::get(160, 4, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
                $items = array($r1s2, $r2s2, $r3s2, $r4s2, $r5s2, $r6s2, $r7s2, $r8s2, $r9s2, $r10s2);
                $rand = array_rand($items);
                $i = $items[$rand];
                $inv->setItem(40, $i);
                $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
                $level->addSound($sound);
            }
            if ($this->seconds === 8) {
                $unb = Enchantment::getEnchantment(Enchantment::UNBREAKING);
                $prot = Enchantment::getEnchantment(Enchantment::PROTECTION);
                $r1s1 = Item::get(54, 0, 1);
                $r1s1->addEnchantment(new EnchantmentInstance($unb, 7));
                $r1s1->addEnchantment(new EnchantmentInstance($prot, 5));
                $r1s1->setCustomName("§r§7Special Set §b§lYeti");
                $r1s1->setLore([
                    '§r§bThe set of The Yeti.',
                    '§r§b§lYETI SET BONUS',
                    '§r§b* Deal +10% damage to all enemies.',
                    '§r§b* Enemies deal less damage to you.',
                    '§r§b* Frost Ability.',
                    '§r§7(Requires all 4 Yeti Items)',
                    '§r§broyalpe.buycraft.net',

                ]);
                $unb = Enchantment::getEnchantment(Enchantment::UNBREAKING);
                $prot = Enchantment::getEnchantment(Enchantment::PROTECTION);
                $r2s1 = Item::get(54, 0, 1);
                $r2s1->addEnchantment(new EnchantmentInstance($unb, 7));
                $r2s1->addEnchantment(new EnchantmentInstance($prot, 5));
                $r2s1->setCustomName("§r§7Special Set §c§lPhantom");
                $r2s1->setLore([
                    '§r§cThe set of The Phantom.',
                    '§r§c§lPHANTOM SET BONUS',
                    '§r§cDeal +25% damage to all enemies.',
                    '§r§7(Requires all 4 Phantom Items)',
                    '§r§croyalpe.buycraft.net',

                ]);

                $r3s1 = Item::get(Item::GOLD_INGOT);
                $r4s1 = Item::get(Item::DIAMOND);
                $r5s1 = Item::get(Item::GOLD_INGOT);
                $r6s1 = Item::get(Item::IRON_INGOT);
                $r7s1 = Item::get(Item::DIAMOND);
                $r8s1 = Item::get(Item::GOLD_INGOT);
                $r9s1 = Item::get(Item::IRON_INGOT);
                $r10s1 = Item::get(Item::DIAMOND);
                # Slot 2
                $r1s2 = Item::get(Item::DIAMOND);
                $r2s2 = Item::get(Item::IRON_INGOT);
                $r3s2 = Item::get(Item::GOLD_INGOT);
                $r4s2 = Item::get(Item::DIAMOND);
                $r5s2 = Item::get(Item::GOLD_INGOT);
                $r6s2 = Item::get(Item::IRON_INGOT);
                $r7s2 = Item::get(Item::DIAMOND);
                $r8s2 = Item::get(Item::GOLD_INGOT);
                $r9s2 = Item::get(Item::IRON_INGOT);
                $r10s2 = Item::get(Item::DIAMOND);
                # Slot 3
                $r1s3 = Item::get(Item::DIAMOND);
                $r2s3 = Item::get(Item::IRON_INGOT);
                $r3s3 = Item::get(Item::GOLD_INGOT);
                $r4s3 = Item::get(Item::DIAMOND);
                $r5s3 = Item::get(Item::GOLD_INGOT);
                $r6s3 = Item::get(Item::IRON_INGOT);
                $r7s3 = Item::get(Item::DIAMOND);
                $r8s3 = Item::get(Item::GOLD_INGOT);
                $r9s3 = Item::get(Item::IRON_INGOT);
                $r10s3 = Item::get(Item::DIAMOND);
                # Slot 4
                $r1s4 = Item::get(Item::DIAMOND);
                $r2s4 = Item::get(Item::IRON_INGOT);
                $r3s4 = Item::get(Item::GOLD_INGOT);
                $r4s4 = Item::get(Item::DIAMOND);
                $r5s4 = Item::get(Item::GOLD_INGOT);
                $r6s4 = Item::get(Item::IRON_INGOT);
                $r7s4 = Item::get(Item::DIAMOND);
                $r8s4 = Item::get(Item::GOLD_INGOT);
                $r9s4 = Item::get(Item::IRON_INGOT);
                $r10s4 = Item::get(Item::DIAMOND);
                # Slot 5
                $r1s5 = Item::get(Item::DIAMOND);
                $r2s5 = Item::get(Item::IRON_INGOT);
                $r3s5 = Item::get(Item::GOLD_INGOT);
                $r4s5 = Item::get(Item::DIAMOND);
                $r5s5 = Item::get(Item::GOLD_INGOT);
                $r6s5 = Item::get(Item::IRON_INGOT);
                $r7s5 = Item::get(Item::DIAMOND);
                $r8s5 = Item::get(Item::GOLD_INGOT);
                $r9s5 = Item::get(Item::IRON_INGOT);
                $r10s5 = Item::get(Item::DIAMOND);
                # Slot 6
                $r1s6 = Item::get(Item::DIAMOND);
                $r2s6 = Item::get(Item::IRON_INGOT);
                $r3s6 = Item::get(Item::GOLD_INGOT);
                $r4s6 = Item::get(Item::DIAMOND);
                $r5s6 = Item::get(Item::GOLD_INGOT);
                $r6s6 = Item::get(Item::IRON_INGOT);
                $r7s6 = Item::get(Item::DIAMOND);
                $r8s6 = Item::get(Item::GOLD_INGOT);
                $r9s6 = Item::get(Item::IRON_INGOT);
                $r10s6 = Item::get(Item::DIAMOND);
                # Slot 7
                $r1s7 = Item::get(Item::DIAMOND);
                $r2s7 = Item::get(Item::IRON_INGOT);
                $r3s7 = Item::get(Item::GOLD_INGOT);
                $r4s7 = Item::get(Item::DIAMOND);
                $r5s7 = Item::get(Item::GOLD_INGOT);
                $r6s7 = Item::get(Item::IRON_INGOT);
                $r7s7 = Item::get(Item::DIAMOND);
                $r8s7 = Item::get(Item::GOLD_INGOT);
                $r9s7 = Item::get(Item::IRON_INGOT);
                $r10s7 = Item::get(Item::DIAMOND);
                # Slot 8
                $r1s8 = Item::get(Item::DIAMOND);
                $r2s8 = Item::get(Item::IRON_INGOT);
                $r3s8 = Item::get(Item::GOLD_INGOT);
                $r4s8 = Item::get(Item::DIAMOND);
                $r5s8 = Item::get(Item::GOLD_INGOT);
                $r6s8 = Item::get(Item::IRON_INGOT);
                $r7s8 = Item::get(Item::DIAMOND);
                $r8s8 = Item::get(Item::GOLD_INGOT);
                $r9s8 = Item::get(Item::IRON_INGOT);
                $r10s8 = Item::get(Item::DIAMOND);
                # Slot 9
                $r1s9 = Item::get(Item::DIAMOND);
                $r2s9 = Item::get(Item::IRON_INGOT);
                $r3s9 = Item::get(Item::GOLD_INGOT);
                $r4s9 = Item::get(Item::DIAMOND);
                $r5s9 = Item::get(Item::GOLD_INGOT);
                $r6s9 = Item::get(Item::IRON_INGOT);
                $r7s9 = Item::get(Item::DIAMOND);
                $r8s9 = Item::get(Item::GOLD_INGOT);
                $r9s9 = Item::get(Item::IRON_INGOT);
                $r10s9 = Item::get(Item::DIAMOND);
                $item = Item::get(160, 5, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
                $items = array($r1s2, $r2s2, $r3s2, $r4s2, $r5s2, $r6s2, $r7s2, $r8s2, $r9s2, $r10s2);
                $rand = array_rand($items);
                $i = $items[$rand];
                $inv->setItem(40, $i);
                $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
                $level->addSound($sound);
            }
            if ($this->seconds === 10) {
                $unb = Enchantment::getEnchantment(Enchantment::UNBREAKING);
                $prot = Enchantment::getEnchantment(Enchantment::PROTECTION);
                $r1s1 = Item::get(54, 0, 1);
                $r1s1->addEnchantment(new EnchantmentInstance($unb, 7));
                $r1s1->addEnchantment(new EnchantmentInstance($prot, 5));
                $r1s1->setCustomName("§r§7Special Set §b§lYeti");
                $r1s1->setLore([
                    '§r§bThe set of The Yeti.',
                    '§r§b§lYETI SET BONUS',
                    '§r§b* Deal +10% damage to all enemies.',
                    '§r§b* Enemies deal less damage to you.',
                    '§r§b* Frost Ability.',
                    '§r§7(Requires all 4 Yeti Items)',
                    '§r§broyalpe.buycraft.net',

                ]);
                $unb = Enchantment::getEnchantment(Enchantment::UNBREAKING);
                $prot = Enchantment::getEnchantment(Enchantment::PROTECTION);
                $r2s1 = Item::get(54, 0, 1);
                $r2s1->addEnchantment(new EnchantmentInstance($unb, 7));
                $r2s1->addEnchantment(new EnchantmentInstance($prot, 5));
                $r2s1->setCustomName("§r§7Special Set §c§lPhantom");
                $r2s1->setLore([
                    '§r§cThe set of The Phantom.',
                    '§r§c§lPHANTOM SET BONUS',
                    '§r§cDeal +25% damage to all enemies.',
                    '§r§7(Requires all 4 Phantom Items)',
                    '§r§croyalpe.buycraft.net',

                ]);

                $r3s1 = Item::get(Item::GOLD_INGOT);
                $r4s1 = Item::get(Item::DIAMOND);
                $r5s1 = Item::get(Item::GOLD_INGOT);
                $r6s1 = Item::get(Item::IRON_INGOT);
                $r7s1 = Item::get(Item::DIAMOND);
                $r8s1 = Item::get(Item::GOLD_INGOT);
                $r9s1 = Item::get(Item::IRON_INGOT);
                $r10s1 = Item::get(Item::DIAMOND);
                # Slot 2
                $r1s2 = Item::get(Item::DIAMOND);
                $r2s2 = Item::get(Item::IRON_INGOT);
                $r3s2 = Item::get(Item::GOLD_INGOT);
                $r4s2 = Item::get(Item::DIAMOND);
                $r5s2 = Item::get(Item::GOLD_INGOT);
                $r6s2 = Item::get(Item::IRON_INGOT);
                $r7s2 = Item::get(Item::DIAMOND);
                $r8s2 = Item::get(Item::GOLD_INGOT);
                $r9s2 = Item::get(Item::IRON_INGOT);
                $r10s2 = Item::get(Item::DIAMOND);
                # Slot 3
                $r1s3 = Item::get(Item::DIAMOND);
                $r2s3 = Item::get(Item::IRON_INGOT);
                $r3s3 = Item::get(Item::GOLD_INGOT);
                $r4s3 = Item::get(Item::DIAMOND);
                $r5s3 = Item::get(Item::GOLD_INGOT);
                $r6s3 = Item::get(Item::IRON_INGOT);
                $r7s3 = Item::get(Item::DIAMOND);
                $r8s3 = Item::get(Item::GOLD_INGOT);
                $r9s3 = Item::get(Item::IRON_INGOT);
                $r10s3 = Item::get(Item::DIAMOND);
                # Slot 4
                $r1s4 = Item::get(Item::DIAMOND);
                $r2s4 = Item::get(Item::IRON_INGOT);
                $r3s4 = Item::get(Item::GOLD_INGOT);
                $r4s4 = Item::get(Item::DIAMOND);
                $r5s4 = Item::get(Item::GOLD_INGOT);
                $r6s4 = Item::get(Item::IRON_INGOT);
                $r7s4 = Item::get(Item::DIAMOND);
                $r8s4 = Item::get(Item::GOLD_INGOT);
                $r9s4 = Item::get(Item::IRON_INGOT);
                $r10s4 = Item::get(Item::DIAMOND);
                # Slot 5
                $r1s5 = Item::get(Item::DIAMOND);
                $r2s5 = Item::get(Item::IRON_INGOT);
                $r3s5 = Item::get(Item::GOLD_INGOT);
                $r4s5 = Item::get(Item::DIAMOND);
                $r5s5 = Item::get(Item::GOLD_INGOT);
                $r6s5 = Item::get(Item::IRON_INGOT);
                $r7s5 = Item::get(Item::DIAMOND);
                $r8s5 = Item::get(Item::GOLD_INGOT);
                $r9s5 = Item::get(Item::IRON_INGOT);
                $r10s5 = Item::get(Item::DIAMOND);
                # Slot 6
                $r1s6 = Item::get(Item::DIAMOND);
                $r2s6 = Item::get(Item::IRON_INGOT);
                $r3s6 = Item::get(Item::GOLD_INGOT);
                $r4s6 = Item::get(Item::DIAMOND);
                $r5s6 = Item::get(Item::GOLD_INGOT);
                $r6s6 = Item::get(Item::IRON_INGOT);
                $r7s6 = Item::get(Item::DIAMOND);
                $r8s6 = Item::get(Item::GOLD_INGOT);
                $r9s6 = Item::get(Item::IRON_INGOT);
                $r10s6 = Item::get(Item::DIAMOND);
                # Slot 7
                $r1s7 = Item::get(Item::DIAMOND);
                $r2s7 = Item::get(Item::IRON_INGOT);
                $r3s7 = Item::get(Item::GOLD_INGOT);
                $r4s7 = Item::get(Item::DIAMOND);
                $r5s7 = Item::get(Item::GOLD_INGOT);
                $r6s7 = Item::get(Item::IRON_INGOT);
                $r7s7 = Item::get(Item::DIAMOND);
                $r8s7 = Item::get(Item::GOLD_INGOT);
                $r9s7 = Item::get(Item::IRON_INGOT);
                $r10s7 = Item::get(Item::DIAMOND);
                # Slot 8
                $r1s8 = Item::get(Item::DIAMOND);
                $r2s8 = Item::get(Item::IRON_INGOT);
                $r3s8 = Item::get(Item::GOLD_INGOT);
                $r4s8 = Item::get(Item::DIAMOND);
                $r5s8 = Item::get(Item::GOLD_INGOT);
                $r6s8 = Item::get(Item::IRON_INGOT);
                $r7s8 = Item::get(Item::DIAMOND);
                $r8s8 = Item::get(Item::GOLD_INGOT);
                $r9s8 = Item::get(Item::IRON_INGOT);
                $r10s8 = Item::get(Item::DIAMOND);
                # Slot 9
                $r1s9 = Item::get(Item::DIAMOND);
                $r2s9 = Item::get(Item::IRON_INGOT);
                $r3s9 = Item::get(Item::GOLD_INGOT);
                $r4s9 = Item::get(Item::DIAMOND);
                $r5s9 = Item::get(Item::GOLD_INGOT);
                $r6s9 = Item::get(Item::IRON_INGOT);
                $r7s9 = Item::get(Item::DIAMOND);
                $r8s9 = Item::get(Item::GOLD_INGOT);
                $r9s9 = Item::get(Item::IRON_INGOT);
                $r10s9 = Item::get(Item::DIAMOND);
                $item = Item::get(160, 3, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
                $items = array($r1s2, $r2s2, $r3s2, $r4s2, $r5s2, $r6s2, $r7s2, $r8s2, $r9s2, $r10s2);
                $rand = array_rand($items);
                $i = $items[$rand];
                $inv->setItem(40, $i);
                $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
                $level->addSound($sound);
            }
            # Slot 1
            $unb = Enchantment::getEnchantment(Enchantment::UNBREAKING);
            $prot = Enchantment::getEnchantment(Enchantment::PROTECTION);
            $r1s1 = Item::get(54, 0, 1);
            $r1s1->addEnchantment(new EnchantmentInstance($unb, 7));
            $r1s1->addEnchantment(new EnchantmentInstance($prot, 5));
            $r1s1->setCustomName("§r§7Special Set §b§lYeti");
            $r1s1->setLore([
                '§r§bThe set of The Yeti.',
                '§r§b§lYETI SET BONUS',
                '§r§b* Deal +10% damage to all enemies.',
                '§r§b* Enemies deal less damage to you.',
                '§r§b* Frost Ability.',
                '§r§7(Requires all 4 Yeti Items)',
                '§r§broyalpe.buycraft.net',

            ]);
            $unb = Enchantment::getEnchantment(Enchantment::UNBREAKING);
            $prot = Enchantment::getEnchantment(Enchantment::PROTECTION);
            $r2s1 = Item::get(54, 0, 1);
            $r2s1->addEnchantment(new EnchantmentInstance($unb, 7));
            $r2s1->addEnchantment(new EnchantmentInstance($prot, 5));
            $r2s1->setCustomName("§r§7Special Set §c§lPhantom");
            $r2s1->setLore([
                '§r§cThe set of The Phantom.',
                '§r§c§lPHANTOM SET BONUS',
                '§r§cDeal +25% damage to all enemies.',
                '§r§7(Requires all 4 Phantom Items)',
                '§r§croyalpe.buycraft.net',

            ]);

            $r3s1 = Item::get(Item::GOLD_INGOT);
            $r4s1 = Item::get(Item::DIAMOND);
            $r5s1 = Item::get(Item::GOLD_INGOT);
            $r6s1 = Item::get(Item::IRON_INGOT);
            $r7s1 = Item::get(Item::DIAMOND);
            $r8s1 = Item::get(Item::GOLD_INGOT);
            $r9s1 = Item::get(Item::IRON_INGOT);
            $r10s1 = Item::get(Item::DIAMOND);
            # Slot 2
            $r1s2 = Item::get(Item::DIAMOND);
            $r2s2 = Item::get(Item::IRON_INGOT);
            $r3s2 = Item::get(Item::GOLD_INGOT);
            $r4s2 = Item::get(Item::DIAMOND);
            $r5s2 = Item::get(Item::GOLD_INGOT);
            $r6s2 = Item::get(Item::IRON_INGOT);
            $r7s2 = Item::get(Item::DIAMOND);
            $r8s2 = Item::get(Item::GOLD_INGOT);
            $r9s2 = Item::get(Item::IRON_INGOT);
            $r10s2 = Item::get(Item::DIAMOND);
            # Slot 3
            $r1s3 = Item::get(Item::DIAMOND);
            $r2s3 = Item::get(Item::IRON_INGOT);
            $r3s3 = Item::get(Item::GOLD_INGOT);
            $r4s3 = Item::get(Item::DIAMOND);
            $r5s3 = Item::get(Item::GOLD_INGOT);
            $r6s3 = Item::get(Item::IRON_INGOT);
            $r7s3 = Item::get(Item::DIAMOND);
            $r8s3 = Item::get(Item::GOLD_INGOT);
            $r9s3 = Item::get(Item::IRON_INGOT);
            $r10s3 = Item::get(Item::DIAMOND);
            # Slot 4
            $r1s4 = Item::get(Item::DIAMOND);
            $r2s4 = Item::get(Item::IRON_INGOT);
            $r3s4 = Item::get(Item::GOLD_INGOT);
            $r4s4 = Item::get(Item::DIAMOND);
            $r5s4 = Item::get(Item::GOLD_INGOT);
            $r6s4 = Item::get(Item::IRON_INGOT);
            $r7s4 = Item::get(Item::DIAMOND);
            $r8s4 = Item::get(Item::GOLD_INGOT);
            $r9s4 = Item::get(Item::IRON_INGOT);
            $r10s4 = Item::get(Item::DIAMOND);
            # Slot 5
            $r1s5 = Item::get(Item::DIAMOND);
            $r2s5 = Item::get(Item::IRON_INGOT);
            $r3s5 = Item::get(Item::GOLD_INGOT);
            $r4s5 = Item::get(Item::DIAMOND);
            $r5s5 = Item::get(Item::GOLD_INGOT);
            $r6s5 = Item::get(Item::IRON_INGOT);
            $r7s5 = Item::get(Item::DIAMOND);
            $r8s5 = Item::get(Item::GOLD_INGOT);
            $r9s5 = Item::get(Item::IRON_INGOT);
            $r10s5 = Item::get(Item::DIAMOND);
            # Slot 6
            $r1s6 = Item::get(Item::DIAMOND);
            $r2s6 = Item::get(Item::IRON_INGOT);
            $r3s6 = Item::get(Item::GOLD_INGOT);
            $r4s6 = Item::get(Item::DIAMOND);
            $r5s6 = Item::get(Item::GOLD_INGOT);
            $r6s6 = Item::get(Item::IRON_INGOT);
            $r7s6 = Item::get(Item::DIAMOND);
            $r8s6 = Item::get(Item::GOLD_INGOT);
            $r9s6 = Item::get(Item::IRON_INGOT);
            $r10s6 = Item::get(Item::DIAMOND);
            # Slot 7
            $r1s7 = Item::get(Item::DIAMOND);
            $r2s7 = Item::get(Item::IRON_INGOT);
            $r3s7 = Item::get(Item::GOLD_INGOT);
            $r4s7 = Item::get(Item::DIAMOND);
            $r5s7 = Item::get(Item::GOLD_INGOT);
            $r6s7 = Item::get(Item::IRON_INGOT);
            $r7s7 = Item::get(Item::DIAMOND);
            $r8s7 = Item::get(Item::GOLD_INGOT);
            $r9s7 = Item::get(Item::IRON_INGOT);
            $r10s7 = Item::get(Item::DIAMOND);
            # Slot 8
            $r1s8 = Item::get(Item::DIAMOND);
            $r2s8 = Item::get(Item::IRON_INGOT);
            $r3s8 = Item::get(Item::GOLD_INGOT);
            $r4s8 = Item::get(Item::DIAMOND);
            $r5s8 = Item::get(Item::GOLD_INGOT);
            $r6s8 = Item::get(Item::IRON_INGOT);
            $r7s8 = Item::get(Item::DIAMOND);
            $r8s8 = Item::get(Item::GOLD_INGOT);
            $r9s8 = Item::get(Item::IRON_INGOT);
            $r10s8 = Item::get(Item::DIAMOND);
            # Slot 9
            $r1s9 = Item::get(Item::DIAMOND);
            $r2s9 = Item::get(Item::IRON_INGOT);
            $r3s9 = Item::get(Item::GOLD_INGOT);
            $r4s9 = Item::get(Item::DIAMOND);
            $r5s9 = Item::get(Item::GOLD_INGOT);
            $r6s9 = Item::get(Item::IRON_INGOT);
            $r7s9 = Item::get(Item::DIAMOND);
            $r8s9 = Item::get(Item::GOLD_INGOT);
            $r9s9 = Item::get(Item::IRON_INGOT);
            $r10s9 = Item::get(Item::DIAMOND);

            # Slot 1
            if ($this->seconds === 12) {
                $items = array($r1s1, $r2s1, $r3s1, $r4s1, $r5s1, $r6s1, $r7s1, $r8s1, $r9s1, $r10s1);
                $rand = array_rand($items);
                $i = $items[$rand];
                $inv->setItem(40, $i);
                $item = Item::get(160, 2, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
                $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
                $level->addSound($sound);
            }
            if ($this->seconds === 13) {
                $items = array($r1s1, $r2s1, $r3s1, $r4s1, $r5s1, $r6s1, $r7s1, $r8s1, $r9s1, $r10s1);
                $rand = array_rand($items);
                $i = $items[$rand];
                $item = Item::get(160, 3, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
                $inv->setItem(40, $i);
                $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
                $level->addSound($sound);
            }
            if ($this->seconds === 14) {
                $items = array($r1s1, $r2s1, $r3s1, $r4s1, $r5s1, $r6s1, $r7s1, $r8s1, $r9s1, $r10s1);
                $rand = array_rand($items);
                $i = $items[$rand];
                $item = Item::get(160, 5, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
                $inv->setItem(40, $i);
                $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
                $level->addSound($sound);
            }
            if ($this->seconds === 15) {
                $items = array($r1s1, $r2s1, $r3s1, $r4s1, $r5s1, $r6s1, $r7s1, $r8s1, $r9s1, $r10s1);
                $rand = array_rand($items);
                $i = $items[$rand];
                $inv->setItem(40, $i);
                $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
                $level->addSound($sound);
                $item = Item::get(160, 10, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
            }
            if ($this->seconds === 16) {
                $items = array($r1s1, $r2s1, $r3s1, $r4s1, $r5s1, $r6s1, $r7s1, $r8s1, $r9s1, $r10s1);
                $rand = array_rand($items);
                $i = $items[$rand];
                $item = Item::get(160, 2, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
                $inv->setItem(40, $i);
                $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
                $level->addSound($sound);
            }
            if ($this->seconds === 17) {
                $items = array($r1s1, $r2s1, $r3s1, $r4s1, $r5s1, $r6s1, $r7s1, $r8s1, $r9s1, $r10s1);
                $rand = array_rand($items);
                $i = $items[$rand];
                $item = Item::get(160, 14, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
                $inv->setItem(40, $i);
                $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
                $level->addSound($sound);
            }
            if ($this->seconds === 18) {
                $items = array($r1s1, $r2s1, $r3s1, $r4s1, $r5s1, $r6s1, $r7s1, $r8s1, $r9s1, $r10s1);
                $rand = array_rand($items);
                $item = Item::get(160, 12, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
                $i = $items[$rand];
                $inv->setItem(40, $i);
                $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
                $level->addSound($sound);
            }
            if ($this->seconds === 19) {
                $items = array($r1s1, $r2s1, $r3s1, $r4s1, $r5s1, $r6s1, $r7s1, $r8s1, $r9s1, $r10s1);
                $rand = array_rand($items);
                $i = $items[$rand];
                $item = Item::get(160, 14, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
                $inv->setItem(40, $i);
                $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
                $level->addSound($sound);
            }
            if ($this->seconds === 20) {
                $items = array($r1s1, $r2s1, $r3s1, $r4s1, $r5s1, $r6s1, $r7s1, $r8s1, $r9s1, $r10s1);
                $rand = array_rand($items);
                $i = $items[$rand];
                $item = Item::get(160, 10, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
                $inv->setItem(40, $i);
                $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
                $level->addSound($sound);
            }
            if ($this->seconds === 40) {
                $items = array($r1s1, $r2s1, $r3s1, $r4s1, $r5s1, $r6s1, $r7s1, $r8s1, $r9s1, $r10s1);
                $rand = array_rand($items);
                $i1 = $items[$rand];
                $item = Item::get(160, 11, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
                $this->i1 = $i1;
                $inv->setItem(40, $i1);
                $pk = new PlaySoundPacket();
                $pk->x = $player->getX();
                $pk->y = $player->getY();
                $pk->z = $player->getZ();
                $pk->volume = 1;
                $pk->pitch = 1;
                $pk->soundName = 'random.toast';
                $player->dataPacket($pk);
            }
        }
        # Slot 2
        if ($this->seconds === 40) {
            $items = array($r1s2, $r2s2, $r3s2, $r4s2, $r5s2, $r6s2, $r7s2, $r8s2, $r9s2, $r10s2);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 1, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 40) {
            $items = array($r1s2, $r2s2, $r3s2, $r4s2, $r5s2, $r6s2, $r7s2, $r8s2, $r9s2, $r10s2);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 1, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 24) {
            $items = array($r1s2, $r2s2, $r3s2, $r4s2, $r5s2, $r6s2, $r7s2, $r8s2, $r9s2, $r10s2);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 4, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 25) {
            $items = array($r1s2, $r2s2, $r3s2, $r4s2, $r5s2, $r6s2, $r7s2, $r8s2, $r9s2, $r10s2);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 14, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 26) {
            $items = array($r1s2, $r2s2, $r3s2, $r4s2, $r5s2, $r6s2, $r7s2, $r8s2, $r9s2, $r10s2);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 6, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 27) {
            $items = array($r1s2, $r2s2, $r3s2, $r4s2, $r5s2, $r6s2, $r7s2, $r8s2, $r9s2, $r10s2);
            $rand = array_rand($items);
            $i = $items[$rand];
             $item = Item::get(160, 12, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 28) {
            $items = array($r1s2, $r2s2, $r3s2, $r4s2, $r5s2, $r6s2, $r7s2, $r8s2, $r9s2, $r10s2);
            $rand = array_rand($items);
            $i = $items[$rand];
             $item = Item::get(160, 13, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 29) {
            $items = array($r1s2, $r2s2, $r3s2, $r4s2, $r5s2, $r6s2, $r7s2, $r8s2, $r9s2, $r10s2);
            $rand = array_rand($items);
            $i = $items[$rand];
             $item = Item::get(160, 14, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 40) {
            $items = array($r1s2, $r2s2, $r3s2, $r4s2, $r5s2, $r6s2, $r7s2, $r8s2, $r9s2, $r10s2);
            $rand = array_rand($items);
            $i = $items[$rand];
             $item = Item::get(160, 4, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 40) {
            $items = array($r1s2, $r2s2, $r3s2, $r4s2, $r5s2, $r6s2, $r7s2, $r8s2, $r9s2, $r10s2);
            $rand = array_rand($items);
            $i2 = $items[$rand];
             $item = Item::get(160, 2, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
            $this->i2 = $i2;
            $inv->setItem(40, $i2);
            $pk = new PlaySoundPacket();
            $pk->x = $player->getX();
            $pk->y = $player->getY();
            $pk->z = $player->getZ();
            $pk->volume = 1;
            $pk->pitch = 1;
            $pk->soundName = 'random.toast';
            $player->dataPacket($pk);
      
        }
        # Slot 3
        if ($this->seconds === 40) {
            $items = array($r1s3, $r2s3, $r3s3, $r4s3, $r5s3, $r6s3, $r7s3, $r8s3, $r9s3, $r10s3);
            $rand = array_rand($items);
            $i = $items[$rand];
             $item = Item::get(160, 7, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 33) {
            $items = array($r1s3, $r2s3, $r3s3, $r4s3, $r5s3, $r6s3, $r7s3, $r8s3, $r9s3, $r10s3);
            $rand = array_rand($items);
            $i = $items[$rand];
             $item = Item::get(160, 5, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 34) {
            $items = array($r1s3, $r2s3, $r3s3, $r4s3, $r5s3, $r6s3, $r7s3, $r8s3, $r9s3, $r10s3);
            $rand = array_rand($items);
            $i = $items[$rand];
            $inv->setItem(40, $i);
             $item = Item::get(160, 7, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 35) {
             $item = Item::get(160, 3, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
            $items = array($r1s3, $r2s3, $r3s3, $r4s3, $r5s3, $r6s3, $r7s3, $r8s3, $r9s3, $r10s3);
            $rand = array_rand($items);
            $i = $items[$rand];
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 36) {
            $items = array($r1s3, $r2s3, $r3s3, $r4s3, $r5s3, $r6s3, $r7s3, $r8s3, $r9s3, $r10s3);
            $rand = array_rand($items);
             $item = Item::get(160, 2, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
            $i = $items[$rand];
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 37) {
            $items = array($r1s3, $r2s3, $r3s3, $r4s3, $r5s3, $r6s3, $r7s3, $r8s3, $r9s3, $r10s3);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 2, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 38) {
            $items = array($r1s3, $r2s3, $r3s3, $r4s3, $r5s3, $r6s3, $r7s3, $r8s3, $r9s3, $r10s3);
            $rand = array_rand($items);
            $i = $items[$rand];
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 40) {
            $items = array($r1s3, $r2s3, $r3s3, $r4s3, $r5s3, $r6s3, $r7s3, $r8s3, $r9s3, $r10s3);
            $rand = array_rand($items);
            $i = $items[$rand];
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 40) {
            $items = array($r1s3, $r2s3, $r3s3, $r4s3, $r5s3, $r6s3, $r7s3, $r8s3, $r9s3, $r10s3);
            $rand = array_rand($items);
            $i = $items[$rand];
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 40) {
            $items = array($r1s3, $r2s3, $r3s3, $r4s3, $r5s3, $r6s3, $r7s3, $r8s3, $r9s3, $r10s3);
            $rand = array_rand($items);
            $i3 = $items[$rand];
            $this->i3 = $i3;
            $inv->setItem(40, $i3);
            $pk = new PlaySoundPacket();
            $pk->x = $player->getX();
            $pk->y = $player->getY();
            $pk->z = $player->getZ();
            $pk->volume = 1;
            $pk->pitch = 1;
            $pk->soundName = 'random.toast';
            $player->dataPacket($pk);
          
        }
        if ($this->seconds === 42) {
            $items = array($r1s4, $r2s4, $r3s4, $r4s4, $r5s4, $r6s4, $r7s4, $r8s4, $r9s4, $r10s4);
            $rand = array_rand($items);
            $i = $items[$rand];
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 43) {
            $items = array($r1s4, $r2s4, $r3s4, $r4s4, $r5s4, $r6s4, $r7s4, $r8s4, $r9s4, $r10s4);
            $rand = array_rand($items);
            $i = $items[$rand];
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 44) {
            $items = array($r1s4, $r2s4, $r3s4, $r4s4, $r5s4, $r6s4, $r7s4, $r8s4, $r9s4, $r10s4);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 2, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
        
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 45) {
            $items = array($r1s4, $r2s4, $r3s4, $r4s4, $r5s4, $r6s4, $r7s4, $r8s4, $r9s4, $r10s4);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 0, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 46) {
            $items = array($r1s4, $r2s4, $r3s4, $r4s4, $r5s4, $r6s4, $r7s4, $r8s4, $r9s4, $r10s4);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 2, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 47) {
            $items = array($r1s4, $r2s4, $r3s4, $r4s4, $r5s4, $r6s4, $r7s4, $r8s4, $r9s4, $r10s4);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 9, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 48) {
            $items = array($r1s4, $r2s4, $r3s4, $r4s4, $r5s4, $r6s4, $r7s4, $r8s4, $r9s4, $r10s4);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 8, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 49) {
            $items = array($r1s4, $r2s4, $r3s4, $r4s4, $r5s4, $r6s4, $r7s4, $r8s4, $r9s4, $r10s4);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 7, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 50) {
            $items = array($r1s4, $r2s4, $r3s4, $r4s4, $r5s4, $r6s4, $r7s4, $r8s4, $r9s4, $r10s4);
            $rand = array_rand($items);
            $item = Item::get(160, 6, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $i = $items[$rand];
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 51) {
            $items = array($r1s4, $r2s4, $r3s4, $r4s4, $r5s4, $r6s4, $r7s4, $r8s4, $r9s4, $r10s4);
            $rand = array_rand($items);
            $i4 = $items[$rand];
            $item = Item::get(160, 5, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $this->i4 = $i4;
            $inv->setItem(40, $i4);
            $pk = new PlaySoundPacket();
            $pk->x = $player->getX();
            $pk->y = $player->getY();
            $pk->z = $player->getZ();
            $pk->volume = 1;
            $pk->pitch = 1;
            $pk->soundName = 'random.toast';
            $player->dataPacket($pk);
           
            
        }
        if ($this->seconds === 52) {
            $items = array($r1s5, $r2s5, $r3s5, $r4s5, $r5s5, $r6s5, $r7s5, $r8s5, $r9s5, $r10s5);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 2, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 53) {
            $items = array($r1s5, $r2s5, $r3s5, $r4s5, $r5s5, $r6s5, $r7s5, $r8s5, $r9s5, $r10s5);
            $rand = array_rand($items);
            $i = $items[$rand];
            $inv->setItem(40, $i);
            $item = Item::get(160, 14, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 54) {
            $items = array($r1s5, $r2s5, $r3s5, $r4s5, $r5s5, $r6s5, $r7s5, $r8s5, $r9s5, $r10s5);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 8, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 55) {
            $items = array($r1s5, $r2s5, $r3s5, $r4s5, $r5s5, $r6s5, $r7s5, $r8s5, $r9s5, $r10s5);
            $rand = array_rand($items);
            $item = Item::get(160, 7, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $i = $items[$rand];
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 56) {
            $items = array($r1s5, $r2s5, $r3s5, $r4s5, $r5s5, $r6s5, $r7s5, $r8s5, $r9s5, $r10s5);
            $rand = array_rand($items);
            $item = Item::get(160, 6, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $i = $items[$rand];
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 57) {
            $items = array($r1s5, $r2s5, $r3s5, $r4s5, $r5s5, $r6s5, $r7s5, $r8s5, $r9s5, $r10s5);
            $rand = array_rand($items);
            $item = Item::get(160, 12, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $i = $items[$rand];
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 58) {
            $items = array($r1s5, $r2s5, $r3s5, $r4s5, $r5s5, $r6s5, $r7s5, $r8s5, $r9s5, $r10s5);
            $rand = array_rand($items);
            $item = Item::get(160, 14, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $i = $items[$rand];
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 59) {
            $items = array($r1s5, $r2s5, $r3s5, $r4s5, $r5s5, $r6s5, $r7s5, $r8s5, $r9s5, $r10s5);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 4, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 60) {
            $items = array($r1s5, $r2s5, $r3s5, $r4s5, $r5s5, $r6s5, $r7s5, $r8s5, $r9s5, $r10s5);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 3, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 61) {
            $items = array($r1s5, $r2s5, $r3s5, $r4s5, $r5s5, $r6s5, $r7s5, $r8s5, $r9s5, $r10s5);
            $rand = array_rand($items);
            $i5 = $items[$rand];
            $item = Item::get(160, 2, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $this->i5 = $i5;
            $inv->setItem(40, $i5);
            $pk = new PlaySoundPacket();
            $pk->x = $player->getX();
            $pk->y = $player->getY();
            $pk->z = $player->getZ();
            $pk->volume = 1;
            $pk->pitch = 1;
            $pk->soundName = 'random.toast';
            $player->dataPacket($pk);
           
        }
        if ($this->seconds === 62) {
            $items = array($r1s6, $r2s6, $r3s6, $r4s6, $r5s6, $r6s6, $r7s6, $r8s6, $r9s6, $r10s6);
            $rand = array_rand($items);
            $i = $items[$rand];
             $item = Item::get(160, 2, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 63) {
            $items = array($r1s6, $r2s6, $r3s6, $r4s6, $r5s6, $r6s6, $r7s6, $r8s6, $r9s6, $r10s6);
            $rand = array_rand($items);
            $i = $items[$rand];
             $item = Item::get(160, 0, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 64) {
            $items = array($r1s6, $r2s6, $r3s6, $r4s6, $r5s6, $r6s6, $r7s6, $r8s6, $r9s6, $r10s6);
            $rand = array_rand($items);
            $i = $items[$rand];
             $item = Item::get(160, 2, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 65) {
            $items = array($r1s6, $r2s6, $r3s6, $r4s6, $r5s6, $r6s6, $r7s6, $r8s6, $r9s6, $r10s6);
            $rand = array_rand($items);
            $i = $items[$rand];
             $item = Item::get(160, 10, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 66) {
            $items = array($r1s6, $r2s6, $r3s6, $r4s6, $r5s6, $r6s6, $r7s6, $r8s6, $r9s6, $r10s6);
            $rand = array_rand($items);
            $i = $items[$rand];
             $item = Item::get(160, 7, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 67) {
            $items = array($r1s6, $r2s6, $r3s6, $r4s6, $r5s6, $r6s6, $r7s6, $r8s6, $r9s6, $r10s6);
            $rand = array_rand($items);
            $i = $items[$rand];
             $item = Item::get(160, 1, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 68) {
            $items = array($r1s6, $r2s6, $r3s6, $r4s6, $r5s6, $r6s6, $r7s6, $r8s6, $r9s6, $r10s6);
            $rand = array_rand($items);
            $i = $items[$rand];
             $item = Item::get(160, 2, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 69) {
            $items = array($r1s6, $r2s6, $r3s6, $r4s6, $r5s6, $r6s6, $r7s6, $r8s6, $r9s6, $r10s6);
            $rand = array_rand($items);
            $i = $items[$rand];
             $item = Item::get(160, 9, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 70) {
            $items = array($r1s6, $r2s6, $r3s6, $r4s6, $r5s6, $r6s6, $r7s6, $r8s6, $r9s6, $r10s6);
            $rand = array_rand($items);
            $i = $items[$rand];
             $item = Item::get(160, 14, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 71) {
            $items = array($r1s6, $r2s6, $r3s6, $r4s6, $r5s6, $r6s6, $r7s6, $r8s6, $r9s6, $r10s6);
            $rand = array_rand($items);
             $item = Item::get(160, 13, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
            $i6 = $items[$rand];
            $this->i6 = $i6;
            $inv->setItem(40, $i6);
            $pk = new PlaySoundPacket();
            $pk->x = $player->getX();
            $pk->y = $player->getY();
            $pk->z = $player->getZ();
            $pk->volume = 1;
            $pk->pitch = 1;
            $pk->soundName = 'random.toast';
         
           
        }
        if ($this->seconds === 72) {
            $items = array($r1s7, $r2s7, $r3s7, $r4s7, $r5s7, $r6s7, $r7s7, $r8s7, $r9s7, $r10s7);
            $rand = array_rand($items);
            $item = Item::get(160, 12, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
            $i = $items[$rand];
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 73) {
            $items = array($r1s7, $r2s7, $r3s7, $r4s7, $r5s7, $r6s7, $r7s7, $r8s7, $r9s7, $r10s7);
            $rand = array_rand($items);
            $item = Item::get(160, 14, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
            $i = $items[$rand];
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 74) {
            $items = array($r1s7, $r2s7, $r3s7, $r4s7, $r5s7, $r6s7, $r7s7, $r8s7, $r9s7, $r10s7);
            $rand = array_rand($items);
            $item = Item::get(160, 8, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
            $i = $items[$rand];
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 75) {
            $items = array($r1s7, $r2s7, $r3s7, $r4s7, $r5s7, $r6s7, $r7s7, $r8s7, $r9s7, $r10s7);
            $rand = array_rand($items);
            $item = Item::get(160, 2, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
            $i = $items[$rand];
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 76) {
            $items = array($r1s7, $r2s7, $r3s7, $r4s7, $r5s7, $r6s7, $r7s7, $r8s7, $r9s7, $r10s7);
            $rand = array_rand($items);
            
            $item = Item::get(160, 6, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
            $i = $items[$rand];
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 77) {
            $items = array($r1s7, $r2s7, $r3s7, $r4s7, $r5s7, $r6s7, $r7s7, $r8s7, $r9s7, $r10s7);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 5, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 78) {
            $items = array($r1s7, $r2s7, $r3s7, $r4s7, $r5s7, $r6s7, $r7s7, $r8s7, $r9s7, $r10s7);
            $rand = array_rand($items);
            $item = Item::get(160, 3, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
            $i = $items[$rand];
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 79) {
            $items = array($r1s7, $r2s7, $r3s7, $r4s7, $r5s7, $r6s7, $r7s7, $r8s7, $r9s7, $r10s7);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 2, 1)->setCustomName(" ");

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


                $inv->setItem(24, $item);
                $inv->setItem(25, $item);
                $inv->setItem(26, $item);
                $inv->setItem(27, $item);
                $inv->setItem(28, $item);
                $inv->setItem(29, $item);;
                $inv->setItem(33, $item);
                $inv->setItem(34, $item);
                $inv->setItem(35, $item);
                $inv->setItem(36, $item);
                $inv->setItem(37, $item);
                $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 80) {
            $items = array($r1s7, $r2s7, $r3s7, $r4s7, $r5s7, $r6s7, $r7s7, $r8s7, $r9s7, $r10s7);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 4, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 81) {
            $items = array($r1s7, $r2s7, $r3s7, $r4s7, $r5s7, $r6s7, $r7s7, $r8s7, $r9s7, $r10s7);
            $rand = array_rand($items);
            $item = Item::get(160, 2, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $i7 = $items[$rand];
            $this->i7 = $i7;
            $inv->setItem(40, $i7);
            $pk = new PlaySoundPacket();
            $pk->x = $player->getX();
            $pk->y = $player->getY();
            $pk->z = $player->getZ();
            $pk->volume = 1;
            $pk->pitch = 1;
            $pk->soundName = 'random.toast';
            $player->dataPacket($pk);

            }

        if ($this->seconds === 82) {
            $items = array($r1s8, $r2s8, $r3s8, $r4s8, $r5s8, $r6s8, $r7s8, $r8s8, $r9s8, $r10s8);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 8, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 83) {
            $items = array($r1s8, $r2s8, $r3s8, $r4s8, $r5s8, $r6s8, $r7s8, $r8s8, $r9s8, $r10s8);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 6, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 84) {
            $items = array($r1s8, $r2s8, $r3s8, $r4s8, $r5s8, $r6s8, $r7s8, $r8s8, $r9s8, $r10s8);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 5, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 85) {
            $items = array($r1s8, $r2s8, $r3s8, $r4s8, $r5s8, $r6s8, $r7s8, $r8s8, $r9s8, $r10s8);
            $rand = array_rand($items);
            $item = Item::get(160, 10, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $i = $items[$rand];
            $item = Item::get(160, 2, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 86) {
            $items = array($r1s8, $r2s8, $r3s8, $r4s8, $r5s8, $r6s8, $r7s8, $r8s8, $r9s8, $r10s8);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 3, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 87) {
            $items = array($r1s8, $r2s8, $r3s8, $r4s8, $r5s8, $r6s8, $r7s8, $r8s8, $r9s8, $r10s8);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 5, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 88) {
            $items = array($r1s8, $r2s8, $r3s8, $r4s8, $r5s8, $r6s8, $r7s8, $r8s8, $r9s8, $r10s8);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 8, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 89) {
            $items = array($r1s8, $r2s8, $r3s8, $r4s8, $r5s8, $r6s8, $r7s8, $r8s8, $r9s8, $r10s8);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 7, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 90) {
            $items = array($r1s8, $r2s8, $r3s8, $r4s8, $r5s8, $r6s8, $r7s8, $r8s8, $r9s8, $r10s8);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 6, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 91) {
            $items = array($r1s8, $r2s8, $r3s8, $r4s8, $r5s8, $r6s8, $r7s8, $r8s8, $r9s8, $r10s8);
            $rand = array_rand($items);
            $i8 = $items[$rand];
            $this->i8 = $i8;
            $inv->setItem(40, $i8);
            $pk = new PlaySoundPacket();
            $pk->x = $player->getX();
            $pk->y = $player->getY();
            $pk->z = $player->getZ();
            $pk->volume = 1;
            $pk->pitch = 1;
            $pk->soundName = 'random.toast';
            $player->dataPacket($pk);
           
        }
        if ($this->seconds === 92) {
            $items = array($r1s9, $r2s9, $r3s9, $r4s9, $r5s9, $r6s9, $r7s9, $r8s9, $r9s9, $r10s9);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 5, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 93) {
            $items = array($r1s9, $r2s9, $r3s9, $r4s9, $r5s9, $r6s9, $r7s9, $r8s9, $r9s9, $r10s9);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 4, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 94) {
            $items = array($r1s9, $r2s9, $r3s9, $r4s9, $r5s9, $r6s9, $r7s9, $r8s9, $r9s9, $r10s9);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 2, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 95) {
            $items = array($r1s9, $r2s9, $r3s9, $r4s9, $r5s9, $r6s9, $r7s9, $r8s9, $r9s9, $r10s9);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 1, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 96) {
            $items = array($r1s9, $r2s9, $r3s9, $r4s9, $r5s9, $r6s9, $r7s9, $r8s9, $r9s9, $r10s9);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 0, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 97) {
            $items = array($r1s9, $r2s9, $r3s9, $r4s9, $r5s9, $r6s9, $r7s9, $r8s9, $r9s9, $r10s9);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 5, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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


            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 98) {
            $items = array($r1s9, $r2s9, $r3s9, $r4s9, $r5s9, $r6s9, $r7s9, $r8s9, $r9s9, $r10s9);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 2, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 99) {
            $items = array($r1s9, $r2s9, $r3s9, $r4s9, $r5s9, $r6s9, $r7s9, $r8s9, $r9s9, $r10s9);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 10, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 100) {
            $items = array($r1s9, $r2s9, $r3s9, $r4s9, $r5s9, $r6s9, $r7s9, $r8s9, $r9s9, $r10s9);
            $rand = array_rand($items);
            $i = $items[$rand];
            $item = Item::get(160, 13, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i);
            $sound = SoundModuleAPI::createSoundToPlayer(Sound::CLICK, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 101) {
            $items = array($r1s9, $r2s9, $r3s9, $r4s9, $r5s9, $r6s9, $r7s9, $r8s9, $r9s9, $r10s9);
            $rand = array_rand($items);
            $i9 = $items[$rand];
            $this->i9 = $i9;
            $item = Item::get(160, 2, 1)->setCustomName(" ");

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


            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);;
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
            $inv->setItem(38, $item);

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
            $inv->setItem(40, $i9);
            $pk = new PlaySoundPacket();
            $pk->x = $player->getX();
            $pk->y = $player->getY();
            $pk->z = $player->getZ();
            $pk->volume = 1;
            $pk->pitch = 1;
            $pk->soundName = 'random.toast';
            $player->dataPacket($pk);
            if ($player->getInventory()->canAddItem($i9)) {
                $player->getInventory()->addItem($i9);
            } else {
                $this->retrieve($player, $i9);
            }
        }
        if ($this->seconds === 103) {
            $item = $gray;
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
            $inv->setItem(15, $item);
            $inv->setItem(16, $item);
            $inv->setItem(17, $item);
            $inv->setItem(18, $item);
            $inv->setItem(19, $item);
            $inv->setItem(20, $item);
            $inv->setItem(24, $item);
            $inv->setItem(25, $item);
            $inv->setItem(26, $item);
            $inv->setItem(27, $item);
            $inv->setItem(28, $item);
            $inv->setItem(29, $item);
            $inv->setItem(33, $item);
            $inv->setItem(34, $item);
            $inv->setItem(35, $item);
            $inv->setItem(36, $item);
            $inv->setItem(37, $item);
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
        }
        if ($this->seconds === 105) {
            # Left Side


            $sound = SoundModuleAPI::createSoundToPlayer(Sound::ANVIL_FALL, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 107) {
            # Left Side

            $sound = SoundModuleAPI::createSoundToPlayer(Sound::ANVIL_FALL, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 109) {
            # Left Side


            $sound = SoundModuleAPI::createSoundToPlayer(Sound::ANVIL_FALL, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 111) {
            # Left Side


            $sound = SoundModuleAPI::createSoundToPlayer(Sound::ANVIL_FALL, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 113) {
            # Left Side


            $sound = SoundModuleAPI::createSoundToPlayer(Sound::ANVIL_FALL, $player);
            $level->addSound($sound);
        }
        if ($this->seconds === 140) {
            
        }

        $this->seconds++;
    }



    /**
     * @return Main
     */
    public function getPlugin(): Main {
        return $this->plugin;
    }
}
