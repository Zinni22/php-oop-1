<?php
class Movie{
    public $name;
    public $genre;
    public $description;
    public $duration;
    public $director;

    // costruttore
    public function __construct(
        string $name,
        string $genre,
        string $description,
        int $duration,
        string $director
        )
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->description = $description;
        $this->duration = $duration;
        $this->director = $director;
    }

    //stampare in pagina
    public function printMovie(){
        echo '<h3>';
        echo $this->name;
        echo '</h3>';

        echo '<p>';
        echo $this->description;
        echo '</p>';

        echo '<ul>';
        echo '<li> Regista: ';
        echo $this->director;
        echo '</li>';

        echo '<li> Genere: ';
        echo $this->genre;
        echo '</li>';

        echo '<li> Durata: ';
        echo $this->duration;
        echo '</li>';
        echo '</ul>';
    }
}
?>