<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
  Warunki
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php
    $liczba = 8;
    if ($liczba < 10){
        echo 'True' . '</br>';
    } else {
        echo 'False' . '</br>';
    }
    
    $liczbaInna = 10;
    if ($liczbaInna < 10){
        echo 'Mniejsze niż 10' . '</br>';
    } else if ($liczbaInna == 10) {
        echo 'Równe do 10' . '</br>';
    } else {
        echo 'Musi byc wieksze niz 10' . '</br>';
    }
    $liczbaSwitch = 8;
    switch($liczbaSwitch){
        case 7: echo 'To musi być siedem!' . '</br>';
            break;
        case 8: echo 'To musi być osiem!' . '</br>';
            break;
        case 9: echo 'To musi być dziewięć!' . '</br>';
            break;
    }
  ?>
</div>