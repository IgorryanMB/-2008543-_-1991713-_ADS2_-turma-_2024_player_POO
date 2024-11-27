<?php

require_once ('Item.php');

class Inventario {
    private int $capacidadeMaxima;
    private  $itens;

    public function __construct() {
        $this->setCapacidadeMaxima($capacidadeMaxima = 20);
        $this->itens = [];
    }

    public function getCapacidadeMaxima(): int {
        return $this->capacidadeMaxima;
    }

    public function setCapacidadeMaxima($novaCapacidade): void {
        $this->capacidadeMaxima = $novaCapacidade;
    }

    public function adicionarItem(Item $item): void {
        $ocupado = $this->capacidadeLivre();
        if ($ocupado + $item->getTamanho() <= $this->capacidadeMaxima) {
            $this->itens[] = $item;
            echo "Item Adicionado: {$item->getName()}<br>";
            if ($item instanceof Ataque) {
                echo "- Ataque Nome: {$item->getName()}, Tamanho: {$item->getTamanho()}, Tipo: {$item->getClasse()}<br>";
            } elseif ($item instanceof Defesa) {
                echo "- Defesa Nome: {$item->getName()}, Tamanho: {$item->getTamanho()}, Tipo: {$item->getClasse()}<br>";
            } elseif ($item instanceof Magia) {
                echo "- Magia Nome: {$item->getName()}, Tamanho: {$item->getTamanho()}, Tipo: {$item->getClasse()}<br>";
            }
        } else {
            echo "Inventário cheio! Não foi possível adicionar o {$item->getName()}<br>";
        }
    }

    public function removerItem(Item $Item): void {
        $itemRemovido = false;
        foreach ($this->itens as $itenza => $item) {
            if ($item->getName() === $Item->getName()) {
                unset($this->itens[$itenza]);
                $this->itens = array_values($this->itens);
                echo "O item '{$Item->getName()}' foi removido do inventário.<br>";
                $itemRemovido = true;
                break;
            }
        }
        if (!$itemRemovido) {
            echo "O item '{$Item->getName()}' não foi encontrado no inventário.<br>";
        }
    }
    

    public function capacidadeLivre(): float {
        $ocupado = 0;
        foreach ($this->itens as $item) {
            $ocupado += $item->getTamanho();
        }
        return $ocupado;
    }

    public function capacity(): void {
        $novo = $this->capacidadeMaxima - $this->capacidadeLivre();
        echo "A sua capacidade livre é de {$novo}<br>";
    }
}
