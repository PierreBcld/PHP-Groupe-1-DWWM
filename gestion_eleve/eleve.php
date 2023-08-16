<?php
class eleve {
    private string $nom;
    private array $listNote;
    private ?float $moyenne;
    private int $note; 
    private int $nombreDeNotes; 
    public function __construct($nom, $listNote , $moyenne , $note, $nombreDeNotes ) {
        $this -> nom = $nom ;
        $this -> listNote = $listNote;
        $this -> moyenne = $moyenne;
        $this -> note = $note;
        $this -> nombreDeNotes = $nombreDeNotes;
    }
    /**
     * Get the value of nom
     *
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param string $nom
     *
     * @return self
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of listNote
     *
     * @return array
     */
    public function getListNote(): array
    {
        return $this->listNote;
    }

    /**
     * Set the value of listNote
     *
     * @param array $listNote
     *
     * @return self
     */
    public function setListNote(array $listNote): self
    {
        $this->listNote = $listNote;

        return $this;
    }

    /**
     * Get the value of moyenne
     *
     * @return ?float
     */
    public function getMoyenne(): ?float
    {
        return $this->moyenne;
    }

    /**
     * Set the value of moyenne
     *
     * @param ?float $moyenne
     *
     * @return self
     */
    public function setMoyenne(?float $moyenne): self
    {
        $this->moyenne = $moyenne;

        return $this;
    }

    /**
     * Get the value of note
     *
     * @return int
     */
    public function getNote(): int
    {
        return $this->note;
    }

    /**
     * Set the value of note
     *
     * @param int $note
     *
     * @return self
     */
    public function setNote(int $note): self
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get the value of nombreDeNotes
     *
     * @return int
     */
    public function getNombreDeNotes(): int
    {
        return $this->nombreDeNotes;
    }

    /**
     * Set the value of nombreDeNotes
     *
     * @param int $nombreDeNotes
     *
     * @return self
     */
    public function setNombreDeNotes(int $nombreDeNotes): self
    {
        $this->nombreDeNotes = $nombreDeNotes;

        return $this;
    }
}


