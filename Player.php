<?php

class Player {
    private string $nickname;
    private int $nivel;
    private Inventario $inventario;

    public function __construct(string $nickname) {
        $this->setNickname($nickname);
        $this->setNivel(1);
        $this->inventario = new Inventario();
    }

    public function getNickname(): string {
        return $this->nickname;
    }

    public function setNickname(string $nickname): void {
        if (empty($nickname)) {
            echo 'Insira um Nome por favor<br>';
        } else {
            $this->nickname = $nickname;
        }
    }

    public function getNivel(): int {
        return $this->nivel;
    }

    public function setNivel(int $nivel): void {
        if ($nivel <= 0) {
            echo 'Nivel Abaixo do normal, chame o suporte<br>';
        } else {
            $this->nivel = $nivel;
        }
    }

    public function subirNivel(): void {
        $this->nivel++;
        $novaCapacidade = $this->inventario->getCapacidadeMaxima() + ($this->nivel * 3);
        $this->inventario->setCapacidadeMaxima($novaCapacidade);

        echo "Olá {$this->nickname}, você acabou de subir de nível! Agora está no nível {$this->nivel}. Com isso, seu inventário aumentou para {$novaCapacidade}<br>";
    }

    public function coletarItem(Item $item): void {
        $this->inventario->adicionarItem($item);
    }

    public function soltarItem(Item $item): void {
        $this->inventario->removerItem($item);
    }

    public function checarCapacidade(): void {
        $this->inventario->capacity();
    }
}
