<?php

namespace behavioral\observer;

abstract class AbstractObserver {

    abstract function update(AbstractSubject $subject_in);
}
