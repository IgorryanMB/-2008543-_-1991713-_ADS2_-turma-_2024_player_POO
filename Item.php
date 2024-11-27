<?php

class Item {
    private string $name;
    private int $tamanho;
    private string $classe;

    public function __construct(string $name, int $tamanho, string $classe) {
        $this->setName($name);
        $this->setTamanho($tamanho);
        $this->setClasse($classe);
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name) {
        if(empty($name)) {
            $this->name = 'Insira um Nome por Favor<br>';
        } else {
            $this->name = $name;
        }
    }

    public function getTamanho(): int {
        return $this->tamanho;
    }

    public function setTamanho(int $tamanho): void {
        $this->tamanho = $tamanho;
        
    }

    public function getClasse(): string {
        return $this->classe;
    }

    public function setClasse(string $classe): void {
        if(empty($classe)) {
            $this->classe = 'Classe Invalida<br>';
        } else {
            $this->classe = $classe;
        }
    }
}