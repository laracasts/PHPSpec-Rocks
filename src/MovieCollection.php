<?php

class MovieCollection implements Countable {

    /**
     * Collection of movies
     *
     * @var array
     */
    protected $collection;

    /**
     * Add a movie(s) to collection
     *
     * @param Movie|array $movie
     *
     * @return void
     */
    public function add($movie)
    {
        if (is_array($movie))
        {
            return array_map([$this, 'add'], $movie);
        }

        $this->collection[] = $movie;
    }

    /**
     * Get number of movies in collection
     *
     * @return int
     */
    public function count()
    {
        return count($this->collection);
    }

    /**
     * Mark all movies as watched
     */
    public function markAllAsWatched()
    {
        foreach($this->collection as $movie)
        {
            $movie->watch();
        }
    }

}
