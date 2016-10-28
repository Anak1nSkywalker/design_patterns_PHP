<?php

class BookStarsOffCommand extends BookCommand {

    function execute() {
        $this->bookCommandee->setStarsOff();
    }

}
