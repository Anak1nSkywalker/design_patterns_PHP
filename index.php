<!DOCTYPE html>

<html>
    <head>
        <meta charset="ISO-8859-1">
        <title></title>
    </head>
    <body>
        <?php
        // <editor-fold defaultstate="collapsed" desc="HEADER">

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        include_once './util.php';

        // </editor-fold>

        /*
         * BEHAVIORAL
         */

        // <editor-fold defaultstate="collapsed" desc="OBSERVER PATTERN">

        /*
          include_once './behavioral/observer/PatternSubject.php';
          include_once './behavioral/observer/PatternObserver.php';

          util\util::writeln('BEGIN TESTING OBSERVER PATTERN');
          util\util::writeln('');

          $patternGossiper = new \behavioral\observer\PatternSubject();
          $patternGossipFan = new \behavioral\observer\PatternObserver();
          $patternGossiper->attach($patternGossipFan);
          $patternGossiper->updateFavorites('abstract factory, decorator, visitor');
          $patternGossiper->updateFavorites('abstract factory, observer, decorator, mock, dock');
          $patternGossiper->updateFavorites('thunder');
          $patternGossiper->detach($patternGossipFan);
          $patternGossiper->updateFavorites('abstract factory, observer, paisley');

          util\util::writeln('END TESTING OBSERVER PATTERN');
         * 
         */

        // </editor-fold>
        // <editor-fold defaultstate="collapsed" desc="COMMAND PATTERN">

        include_once './behavioral/command/BookCommandee.php';
        include_once './behavioral/command/BookCommand.php';
        include_once './behavioral/command/BookStarsOnCommand.php';
        include_once './behavioral/command/BookStarsOffCommand.php';

        util\util::writeln("BEGIN TESTING COMMAND PATERN");
        util\util::writeln("");

        $book = new BookCommandee("Design Patterns", "Gamma, Helm, Johnson, and Vlissides");
        util\util::writeln("book after cration: ");
        util\util::writeln($book->getAuthorAndTitle());
        util\util::writeln("");

        $starsOn = new BookStarsOnCommand($book);
        callCommand($starsOn);
        util\util::writeln("book after stars on: ");
        util\util::writeln($book->getAuthorAndTitle());
        util\util::writeln("");

        $starsOff = new BookStarsOffCommand($book);
        callCommand($starsOff);
        util\util::writeln("boof after stars off: ");
        util\util::writeln($book->getAuthorAndTitle());
        util\util::writeln("");

        util\util::writeln("END TESTING COMMAND PATTERN");

        //the callCommand function demonstrates that a apecified 
        //function in BokCommandee can be executed with only 
        //an instance of BookCommand. 
        function callCommand(BookCommand $bookCommand_in) {
            $bookCommand_in->execute();
        }

        // </editor-fold>

        /*
         * STRUCTURAL
         */

        // <editor-fold defaultstate="collapsed" desc="DECORATOR PATTERN">

        /*
          include_once './structural/decorator/Book.php';
          include_once './structural/decorator/BookTitleDecorator.php';
          include_once './structural/decorator/BookTitleStarDecorator.php';
          include_once './structural/decorator/BookTitleExclaimDecorator.php';

          util\util::writeln("BEGIN TESTING DECORATOR PATERN");
          util\util::writeln("");

          $pattenBook = new Book('Gamma, Helm, Johnson and Vlissides', 'Design Patterns');

          $decorator = new BookTitleDecorator($pattenBook);
          $starDecorator = new BookTitleStarDecorator($decorator);
          $exclaimDecorator = new BookTitleExclaimDecorator($decorator);

          util\util::writeln("showing title");
          util\util::writeln($decorator->showTitle());
          util\util::writeln("");

          util\util::writeln("showing title after two exclaims added : ");
          $exclaimDecorator->exclaimTitle();
          $exclaimDecorator->exclaimTitle();
          util\util::writeln($decorator->showTitle());
          util\util::writeln("");

          util\util::writeln("showing title after star added : ");
          $starDecorator->starTitle();
          util\util::writeln($decorator->showTitle());
          util\util::writeln("");

          util\util::writeln("showing title after reset: ");
          $decorator->resetTitle();
          util\util::writeln($decorator->showTitle());
         * 
         */

        // </editor-fold>
        ?>
    </body>
</html>
