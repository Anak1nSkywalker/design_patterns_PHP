<?php

namespace behavioral\observer;

include_once './behavioral/observer/AbstractObserver.php';

use util\util;

class PatternObserver extends AbstractObserver {

    public function __construct() {
	
    }

    public function update(AbstractSubject $subject) {
	util::writeln('*IN PATTERN OBSERVER - NEW PATTERN GOSSIP ALERT*');
	util::writeln(' new favorite patterns: ' . $subject->getFavorites());
	util::writeln('*IN PATTERN OBSERVER - PATTERN GOSSIP ALERT OVER*');
    }

}
