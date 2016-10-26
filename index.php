<!DOCTYPE html>

<html>
    <head>
        <meta charset="ISO-8859-1">
        <title></title>
    </head>
    <body>
        <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
                
        echo date('h:i:s') . " Executando processo...  <br>";
        //sleep for 5 seconds
        sleep(6);
        //start again
        echo date('h:i:s') . " Finalizando processo...  <br>";
        
        

        /*
        
        function getAllDateCurrentMonth() {
            $list = array();
            for ($d = 1; $d <= 31; $d++) {
                $time = mktime(12, 0, 0, date('m'), $d, date('Y'));
                if (date('m', $time) == date('m'))
                    $list[] = date('Y-m-d', $time) . " 10:00:00";
            }
            return $list;
        }

        function formatListTimestamp($list) {
            $listWorkTimestamp = array();
            foreach ($list as $value) {                
                if ($value <= date('Y-m-d 10:00:00')) {
                    array_push($listWorkTimestamp, date_timestamp_get(date_create($value)));                    
                }
            }
            return $listWorkTimestamp;
        }
        
        /*
        function getListWsDate($listWorkTimestamp) {
            $wsDateList = array();
            foreach ($listWorkTimestamp as $key => $value) {
                array_push($wsDateList, date('Y-m-d\TH:i:s', $value));
            }
            return $wsDateList;
        }
         * 
         */
        
        
        /*
        
        
        $list = getAllDateCurrentMonth();
        $listWorkTimestamp = formatListTimestamp($list);  
        //$wsDateList = getListWsDate($listWorkTimestamp);

        var_dump($wsDateList);
     





        //$workTimestamp = time();

        /*

          $list[] = date('Y-M-D', $time);

          var_dump($list);

          /*


          $workTimestamp = time();
          //$workTimestamp2 = date_timestamp_get(date_create('2016-06-23 10:00:00'));

          $workTimestamp2 = date_timestamp_get(date_create('2016-10-26 10:00:00'));


          var_dump($workTimestamp);

          var_dump($workTimestamp2);


          if ($timestamp == null) {
          $timestamp = time();
          }

          echo date('Y-m-d\TH:i:s', $workTimestamp);
          echo '<br />';
          echo date('Y-m-d\TH:i:s', $workTimestamp2);
         * 
         */



        ////include_once './util.php';

        /*
         * BEHAVIORAL
         */

        /**
         * OBSERVER PATTERN
         */
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

        /*
         * STRUCTURAL
         */

        /**
         * DECORATOR PATTERN
         */
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
        ?>
    </body>
</html>
