<?php

class Movie {

    /**
     * @var integer
     */
    protected $rating;

    /**
     * @var bool
     */
    protected $watched = false;

    /**
     * @var string
     */
    protected $title;

    /**
     * @param $title
     */
    function __construct($title)
    {
        $this->title = $title;
    }

    /**
     * Get the title of the movie
     *
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the movie to watched
     */
    public function watch()
    {
        $this->watched = true;
    }

    /**
     * Has the movie been watched?
     *
     * @return bool
     */
    public function isWatched()
    {
        return $this->watched;
    }

    /**
     * Set a rating for the movie
     *
     * @param integer $rating
     */
    public function setRating($rating)
    {
        $this->validateRatingRange($rating);

        $this->rating = $rating;
    }

    /**
     * Get the rating
     *
     * @return integer
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Validate rating range
     *
     * @param integer $rating
     *
     * @throws InvalidArgumentException
     */
    protected function validateRatingRange($rating)
    {
        if ($rating > 5) throw new InvalidArgumentException;
    }

}
