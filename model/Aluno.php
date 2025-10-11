<?php

    include_once(__DIR__."/Curso.php");

    class Aluno {
        private ?int $id;
        private ?string $nome;
        private ?int $idade;
        private ?string $estrangeiro;
        private ?Curso $curso;
    
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
    public function getIdade(): ?int {
        return $this->idade;
    }
    public function setIdade(?string $idade): void {
        $this->idade = $idade;
    }
    public function getEstrangeiro(): ?string {
        return $this->estrangeiro;
    }
    public function setEstrangeiro(?string $estrangeiro): void {
        $this->estrangeiro = $estrangeiro;
    }
    public function getCurso(): ?Curso {
        return $this->curso;
    }
    public function setCurso(?Curso $curso): void {
        $this->curso = $curso;
    }
}

?>