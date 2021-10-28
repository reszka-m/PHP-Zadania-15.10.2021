<div class="flex flex-row flex-wrap w-full justify-center font-bold text-3xl mb-2">
  Pętle
</div>
<div class="flex flex-row flex-wrap w-full justify-center text-xl mb-2">
  <?php
    for ($i=0; $i<10; $i++){
        echo "$i";
    }
    echo '</br>';

    $k = 0;
    $j = 5; 
    while($suma < 20){
        $suma = $k + $j;
        echo $suma . " ";
        $k++;
        $j++;
    }
    echo '</br>';
    
    
    for ($n=0; $n<4; $n++){
        echo "<tr>This is number {$n}.</tr>";
    }
  ?>
</div>