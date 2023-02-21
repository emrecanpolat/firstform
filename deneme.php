<?php

error_reporting(E_ALL);


/*if ($_POST['sayi'] %3 == 0){
    echo "girdiğiniz sayi:".$_POST['sayi']." 3'e bölünebilir.";
}elseif($_POST['sayi']==""){
    echo "lütfen bir değer giriniz";
}
else{
    echo "girdiğiniz sayi:".$_POST['sayi']." 3'e bölünemez."."<br>";
    $deger = $_POST['sayi'];
    while ($deger %3 != 0){
        $deger+=1;

    }
    echo "3'e bölünecek en yakın sayı:" . $deger; 

}*/
if ($_POST['sayi']==""){
    echo "lütfen bir değer giriniz";
}elseif($_POST['sayi'] %3 == 0){
    echo "girdiğiniz sayi:".$_POST['sayi']." 3'e bölünebilir.";
}else{
    echo "girdiğiniz sayi:".$_POST['sayi']." 3'e bölünemez."."<br>";
    $deger = $_POST['sayi'];
    while ($deger %3 != 0){
        $deger+=1;

    }
    echo "3'e bölünecek en yakın sayı:" . $deger; 

}
?>
