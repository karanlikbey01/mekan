<?php

namespace mekan;

use pocketmine\plugin\PluginBase;
use pocketmine\{Player, Server};
use mekan\cmd;

class main extends PluginBase{
    
    public function onEnable(){
        $this->getLogger()->info("§aPlugin Aktif ~ By Berkay");
        $this->getServer()->getCommandMap()->register("mekan", new cmd());
        $this->getServer()->loadlevel("Lobi");
        $this->getServer()->loadlevel("Arena");
        $this->getServer()->loadlevel("Arsalar");
        $this->getServer()->loadlevel("1vs1");
        $this->getServer()->loadlevel("RutbeMadde");
		$this->getServer()->loadlevel("Hammadde");
        $this->getServer()->loadlevel("VipMadde");
        $this->getServer()->loadlevel("Zumrutmadde");
        $this->getServer()->loadlevel("LapisMadde");
        $this->getServer()->loadlevel("Pulmadde");
    }
}