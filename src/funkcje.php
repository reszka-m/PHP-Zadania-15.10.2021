<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
    Funkcje
  </div>
  <div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
    <?php
        function pierwszaFunkcja(){
            return "Wiadomość z pierwszej funkcji";
        }
        echo pierwszaFunkcja();

        echo "</br>";

        function  funkcjaZArgumentami($imie, $nazwisko="Nowak"){
            return "$imie" . " " . "$nazwisko" . "</br>";
        }
        echo funkcjaZArgumentami("Maciek");
        echo funkcjaZArgumentami("Michał", "Reszka");

        echo "</br>";

        function funkcjaZNieznanaLiczbaArgumentow(){
            $numargs = func_num_args();
            $args = implode(", ",func_get_args());
            return "Liczba argumentów: " . $numargs . "</br>" . "Argumenty to: " . $args;
        }

        echo funkcjaZNieznanaLiczbaArgumentow("Maciek", "Stefan");

        echo "</br>";

        $imieDoReferencji = "Jacek";
        function funkcjaZReferencja(&$imie){
            $imie = "Dariusz";
        }
        echo $imieDoReferencji;
        funkcjaZReferencja($imieDoReferencji);
        echo $imieDoReferencji;
    ?>
  </div>