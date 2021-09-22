<?php


include("class.php");
$sayi1 = $_POST["sayi1"];
$sayi2 = $_POST["sayi2"];
$islem = $_POST["islem"];
$hesapla = new hesapMakinesi($sayi1,$sayi2,$islem);
$sonuc = $hesapla->$islem();





/*
include("class.php");

$sayi1 = $_POST['sayi1'];
$sayi1 = $_POST['sayi2'];
$islem = $_POST['islem'];

if(isset($_POST['submit']))
{
    // Check number values
    if(is_numeric($sayi1) && is_numeric($sayi2]))
    {
        // Calculate total
        if($_POST['islem'] == 'topla')
        {
            $hesapla = new hesapMakinesi($sayi1,$sayi2,$islem);
            echo $hesapla->$islem();
        }
        if($_POST['islem'] == 'cikar')
        {
            $total = $_POST['sayi1'] - $_POST['sayi2'];	
        }
        if($_POST['islem'] == 'carp')
        {
            $total = $_POST['sayi1'] * $_POST['sayi2'];	
        }
        if($_POST['islem'] == 'bol')
        {
            $total = $_POST['sayi1'] / $_POST['sayi2'];	
        }
        
        // Print total to the browser
        echo "<h1>{$_POST['sayi1']} {$_POST['islem']} {$_POST['sayi2']} eşittir: {$total}</h1>";
    
    } else {
        
        // Print error message to the browser
        echo 'Sayısal değer girmeniz gerekiyor.';
    
    }
}


*/
?>