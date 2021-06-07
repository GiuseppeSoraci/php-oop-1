<?php
class Movie
{
    // Attributes
    public $title;
    public $genre;
    public $release_date;
    public $cowntry;
    public $plot;


    // Constructs
    function __construct($title, $genre, $release_date, $cowntry, $plot)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->releasedate = $release_date;
        $this->cowntry = $cowntry;
        $this->plot = $plot;
    }

    // Get Excerpt
    public function getExcerpt()
    {
        return substr($this->plot, 0, 300);
    }
}

// Movie 1
$movie1 = new Movie('Donnie Darko', 'Sci-fi', 'January 19, 2001', 'USA', 'Set in October 1988, the film follows Donnie Darko, a troubled teenager who narrowly escapes a bizarre accident and has visions of Frank, a mysterious figure in a rabbit costume who informs him that the world will end in 28 days. Frank begins to manipulate Donnie to commit several crimes.');
echo "<h2> Title: $movie1->title</h2>";
echo "<div> Genre: $movie1->genre</div>";
echo "<div> Release Date: $movie1->releasedate</div>";
echo "<div> Cowntry: $movie1->cowntry</div>";
echo '<p>Plot: </strong>' . $movie1->getExcerpt() . '</p>';

// Movie 2
$movie2 = new movie('Back to the Future', 'Comedy/Sci-fi', 'July 3, 1985', 'USA', 'Set in 1985, the story follows Marty McFly (Fox), a teenager accidentally sent back to 1955 in a time-traveling DeLorean automobile built by his eccentric scientist friend Doctor Emmett "Doc" Brown (Lloyd). Trapped in the past, Marty inadvertently prevents his future parents meeting—threatening his very existence—and is forced to reconcile the pair and somehow get back to the future.');
echo "<h2>Title: $movie2->title</h2>";
echo "<div>Genre: $movie2->genre</div>";
echo "<div>Release Date: $movie2->releasedate</div>";
echo "<div>Cowntry: $movie2->cowntry</div>";
echo '<p>Plot: ' . $movie2->getExcerpt() . '</p>';
