<?php

class BookTitleStarDecorator extends BookTitleDecorator {

    private $btd;

    public function __construct(BookTitleDecorator $btd_in) {
	$this->btd = $btd_in;
    }

    function starTitle() {
	$this->btd->title = str_replace(" ", "*", $this->btd->title);
    }

}
