<?php

//objek type 
// menggunakan objek type dalam oop
//studi kasus membuat class cetak info produk


class produk {


    public  $judul ,
            $penulis,
            $penerbit ,
            $harga ;


    public function __construct($judul = "judul" , $penulis = "penulis" , $penerbit = "penerbit", $harga  = 0) {
        

        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function katabijakD(){


        return "Mending beli nasduk";
    }

    public function getlabel(){

        return "$this->penulis, $this->penerbit";
    }
}

//fmembuat function infoproduk
class infoproduk {
    //dan tugas nya hanya 1 yaitu mencetak detail produk
    //dlm parameter nya hanya untuk mencetak produk

    //supaya yang di input itu berasal dari class produk maka
    //gunakan nama class di samping parameter nya
    public function cetak(produk $produk ){

        //hasil cetak
        //gunakan kurung kurawal supaya property dan method dpt di tulis
        $hasil =    "<br>
                     nama : {$produk->judul} <br>
                     penulis dan Pengarang : {$produk->getlabel()} <br>
                     harga : {$produk->harga}      
                ";

        //kembalikan hasil dari property hasil
        return $hasil;
    } 

}

// cara baru
$produk1 = new produk("Seni Menjadi bomat", "Bliyas Bandringa", "angkasa ngaret", 5000);
$produk2 = new produk("neken", "briyan","laptop riyan", 10000);





echo "game : " . $produk2->getlabel();

echo "<br>";

echo "komik :" . $produk1->getlabel() . "  harga : " . $produk1->harga, $produk1->katabijakD();

echo "<br>";

//cara mengaplikasikan nya

//instan class infoproduk
$infoproduk1 = new infoproduk;

//lalu echo
//yang isi parameter nya adalah produk yang ingin di tampilkan
echo $infoproduk1->cetak($produk1);

//tetapi bagaimana jika parameter nya bukan produk


?>