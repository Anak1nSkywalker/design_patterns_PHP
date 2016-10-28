<?php

class BookCommandee {

    private $author;
    private $title;

    function __construct($title_in, $author_in) {
        $this->setAuthor($author_in)
                ->setTitle($title_in);
    }

    function getAuthor() {
        return $this->author;
    }

    function getTitle() {
        return $this->title;
    }

    function setAuthor($author) {
        $this->author = $author;
        return $this;
    }

    function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    function setStarsOn() {
        $this->setAuthor(str_replace(' ', '*', $this->getAuthor()))
                ->setTitle(str_replace(' ', '*', $this->getTitle()));
        return $this;
    }

    function setStarsOff() {
        $this->setAuthor(str_replace('*', ' ', $this->getAuthor()))
                ->setTitle(str_replace('*', ' ', $this->getTitle()));
        return $this;
    }

    function getAuthorAndTitle() {
        return $this->getTitle() . ' by ' . $this->getAuthor();
    }

}
