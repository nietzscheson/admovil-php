<?php

namespace Nietzscheson\Admovil;

interface NotesInterface
{

    /**
     * @return string
     */
    public function getNotes(): string;

    /**
     * @param string $notes
     */
    public function setNotes(string $notes): void;

}