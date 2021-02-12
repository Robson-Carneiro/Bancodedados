<?php

class Audi extends carro {
  public function intro() : string {
    return "Escolha a qualidade alemã! Eu sou um $this->name!";
  }
}

