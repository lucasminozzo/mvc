<?php
    class Curso {
        private ?int $id;
        private ?string $nome;
        private ?string $turno;

        public function getId(): ?int {
            return $this->id;
        }
        public function setId(?int $id): void {
            $this->id = $id;
        }
        public function getNome(): ?string {
            return $this->nome;
        }
        public function setNome(?string $nome): void {
            $this->nome = $nome;
        }
        public function getTurno(): ?string {
            return $this->turno;
        }
        public function setTurno(?string $turno): void {
            $this->turno = $turno;
        }
    }
?>