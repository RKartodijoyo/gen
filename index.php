<?php
$variabel = array(1,2,3,4);
error_reporting(0);
$lasttotalfitnes=0;
$totalfitnes=0;
$fitnes=array();
$chrome=array();
$fungsi_objektif=array();
$probabilitas=array();
$cumulative=array();
$rouletewheel=array();
$newpopulation=array();
$clonechrome=array();
$crossover=array();
$crossoverdata=array();
$chromebaru=0;
$sortcrossoverdata=array();
for( $a=0;$a<=5;$a++)
{
    for ( $b=0;$b<4;$b++){
        if($b==0) {
            $chrome[$a][$b]=rand()%30;
        }else{
            $chrome[$a][$b]=rand()%10;
        }
    }
}
$clonechrome=$chrome;
for( $a=0;$a<=5;$a++)
{
    for ( $b=0;$b<4;$b++){
        echo $chrome[$a][$b];
        echo "\n";
    }
    echo "<br>";
}
echo "<br>";
echo "<br>";
$fungsi_objektif[0]=0;
for( $a=0;$a<=5;$a++)
{
    for ( $b=0;$b<4;$b++){
        $fungsi_objektif[$a]=$fungsi_objektif[$a]+($chrome[$a][$b]*$variabel[$b]);
    }
    $fungsi_objektif[$a] =abs($fungsi_objektif[$a]-30);
}
for( $a=0;$a<=5;$a++)
{
    echo $fungsi_objektif[$a];
    echo "<br>";
}
echo "<br>";echo "<br>";
for( $a=0;$a<=5;$a++)
{
    $fitnes[$a]=1/($fungsi_objektif[$a]+1);
    $totalfitnes+=$fitnes[$a];
}
for( $a=0;$a<=5;$a++)
{
    echo $fitnes[$a];
    echo "<br>";
}
      echo "<br>";
      echo "<br>";
      echo $totalfitnes;
      echo "<br>";
          echo "<br>";
for( $a=0;$a<=5;$a++)
{
    $probabilitas[$a]=$fitnes[$a]/$totalfitnes;
}
for( $a=0;$a<=5;$a++)
{
    echo $probabilitas[$a];
    echo "<br>";
}
echo "<br>";
$lastcumulative=0;
for( $a=0;$a<=5;$a++)
{
    $cumulative[$a]=$lastcumulative+$probabilitas[$a];
    $lastcumulative=$cumulative[$a];
}
echo "<br>";echo "<br>";
for( $a=0;$a<=5;$a++)
{
    echo $cumulative[$a];
    echo "<br>";
}
echo "<br>";echo "<br>";
for( $a=0;$a<=5;$a++)
{
    $rouletewheel[$a]=(rand()%1000)/1000;
}
for( $a=0;$a<=5;$a++)
{
    echo $rouletewheel[$a];
    echo "<br>";
}
for( $a=0;$a<=5;$a++)
{
    for( $b=0;$b<=5;$b++)
    {
        if($rouletewheel[$a]>$cumulative[$b]&&$rouletewheel[$a]<$cumulative[$b+1]) {
            $newpopulation[$a]=$b+1;
        }
        if($rouletewheel[$a]<$cumulative[0]) {
            $newpopulation[$a]=0;
        }
    }
}
echo "<br>";
for( $a=0;$a<=5;$a++)
{
    echo $newpopulation[$a];

    echo "<br>";
}

    echo "<br>";
for( $a=0;$a<=5;$a++)
{
    $chromebaru=$newpopulation[$a];
    for ( $b=0;$b<4;$b++){
            $chrome[$a][$b]=$clonechrome[$chromebaru][$b];
    }

}
for( $a=0;$a<=5;$a++)
{
    for ( $b=0;$b<4;$b++){
        echo $chrome[$a][$b];
        echo "\n";
    }
    echo "<br>";
}
for( $a=0;$a<=5;$a++)
{
    echo $cumulative[$a];
    echo "<br>";
}

      echo "<br>";
for( $a=0;$a<=5;$a++)
{
    $rouletewheel[$a]=(rand()%1000)/1000;
    echo $rouletewheel[$a];
    echo "<br>";
}
    echo "<br>";
$crossover=$rouletewheel;
sort($crossover);
for( $a=0;$a<=2;$a++)
{for( $b=0;$b<=5;$b++)
    {
        if($crossover[$a]==$rouletewheel[$b]) {
            $crossoverdata[$a]=$b;
        }
}
echo $crossover[$a];
echo "<br>";
echo "<br>";
echo $crossoverdata[$a];
echo "<br>";
echo "<br>";
}
sort($sortcrossoverdata);
$sortcrossoverdata=$crossoverdata;
$clonechrome=$chrome;
for( $a=0;$a<=2;$a++)
{
    $sortcrossoverdatabaru=$sortcrossoverdata[$a];
    for ( $b=0;$b<4;$b++){
            $chrome[$a][$b]=$clonechrome[$sortcrossoverdatabaru][$b];
    }

}
for( $a=0;$a<=5;$a++)
{
    for ( $b=0;$b<4;$b++){
        echo $chrome[$a][$b];
        echo "\n";
    }
    echo "<br>";
}
$mutasi=array();
$mutasidata=array();
$mutasichrome=array();
for( $a=0;$a<=1;$a++)
{
    $mutasi[$a]=rand()%24;
    if($mutasi[$a]>3) {
        $mutasichrome[$a]=($mutasi[$a]);
    }
    else{
        $mutasichrome[$a]=$mutasi[$a];
    }
    if ($mutasi%4==0) {
        $mutasidata[$a]=rand()%30;
    }
    else{
        $mutasidata[$a]=rand()%10;
    }
}
if($mutasidata[0]==$mutasidata[1]){
  $mutasidata[1]+=1;
}

echo "<br>";
echo "<br>";
$mutasichrome[0]=round($mutasichrome[0]);
$mutasichrome[1]=round($mutasichrome[1]);
echo $mutasichrome[0];
echo "<br>";
echo $mutasidata[0];
echo "<br>";
echo "<br>";
echo $mutasichrome[1];
echo "<br>";
echo $mutasidata[1];
?>
