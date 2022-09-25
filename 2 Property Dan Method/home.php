<?php

//property
//data dalam objek (variabel dalam objek)

//Method
//prilaku data dalam objek (function dalam objek)

//mmebuat toko dengan produk komik dan game

class produk {
    //property
    //di setting nilai default
    public  $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;
    //atau bisa juga dengan
    // public $judul;
    // public $penulis;
    // public $penerbit;r
    // public $harga;

    //method
    //sama seperti membuat function
    public function katabijakD(){

        //karena fuction berati menembalikan nilai
        return "Mending beli nasduk";
    }

    public function getlabel(){
        //dalam lingkup scope function property dalama function
        //dan luar function akan berbeda walau tulisan nya sama

        //maka dari itu harus mengdefinisikan untuk menjadi global
        //dengan menggunakan this->

        // return $penulis,$penerbit;
        return "$this->penulis, $this->penerbit";
    }
}

//membuat objek
//menimpa property objek
$produk1 = new produk();
$produk1->judul = "Seni Menjadi bomat";
$produk1->penulis = "Bliyas Bandringa";
$produk1->penerbit = "angkasa ngaret";
$produk1->harga = 5000;

$produk2 = new produk();
$produk2->judul = "neken";
$produk2->penulis = "briyan";
$produk2->penerbit = "laptop riyan";
$produk2->harga = 10000;
//cara memanggil objek property 
// echo "komik :". $produk1->judul,$produk1->harga;

// echo "<br>";

//memanggil method
echo "game : " . $produk2->getlabel();

echo "<br>";

echo "komik :" . $produk1->getlabel() . "  harga : " . $produk1->harga, $produk1->katabijakD();





?>