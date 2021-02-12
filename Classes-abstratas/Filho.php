<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Filho
 *
 * @author 12179943601
 */
class Filho extends Pai {
    public function  prefixoNome($nome){
        if ($nome == "joão"){
            $prefixo = "Sr: ";
        } elseif ($nome == "Maria"){
            $prefixo = "Mrs: ";
        } else {
        $prefixo = "";    
        }
        return "{$prefixo} {$nome}";
        
    }
}    

