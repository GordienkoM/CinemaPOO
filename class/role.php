<?php

class Role {
    protected $roleName;            
    
    public function __construct(string $roleName = "N/A") {
        $this->roleName = $roleName;    // nom de role
        $this->castList = [];           // liste des acteurs ayant incarné le rôle
        
    }
} 