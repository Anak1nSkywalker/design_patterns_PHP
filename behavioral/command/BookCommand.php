<?php

abstract class BookCommand {

    protected $bookCommandee;

    function __construct(BookCommandee $bookCommandee_in) {
        $this->bookCommandee = $bookCommandee_in;
    }

    abstract function execute();
}
