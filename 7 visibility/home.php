<?php

//visibility
//mengatur akses terhadap property dan method pd sebiah objek

//public bisa di pakai di parent,child class dan di luar class

//protected hanya bisa di pakai di parent dan child class nya saja

//private hanya bisa di pakai di parent class saja


//misal studi kasus yang lebih mantapmantap
//menambahkan fitur diskon 


class produk {


    public  $judul ,
            $penulis,
            $penerbit;
    
    protected $diskon = 0;

        //public
        // public $harga;


    //protected
    protected $harga;

    //private
    // private $harga;



    public function __construct($judul = "judul" , $penulis = "penulis" , $penerbit = "penerbit", $harga  = 0) {
        

        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function katabijakD(){


        return "Mending beli nasduk";
    }

    public function infoproduk(){
        $str = " {$this->judul} | {$this->getlabel()} Rp . ({$this->harga})";



        return $str;
    }
    public function getlabel(){

        return "$this->penulis, $this->penerbit";
    }


    //nih dia
    
    public function getHarga(){

        return $this->harga - ($this->harga * $this->diskon / 100);
    }
}


class komik extends produk {

    public $jhal;

    
    public function __construct($judul = "judul" , $penulis = "penulis" , $penerbit = "penerbit", $harga  = 0 , $jhal = 0){

        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jhal = $jhal;
    }

    
    public function infoproduk(){
        $str = "Komik: |" . parent::infoproduk() . " {$this->jhal} Halaman";

        return $str;
    }
}

class game extends produk {

    public $jjam;

    
    public function __construct($judul = "judul" , $penulis = "penulis" , $penerbit = "penerbit", $harga  = 0 , $jjam = 0){

        parent::__construct($judul,$penulis,$penerbit,$harga);

        $this->jjam = $jjam;
    }
    public function infoproduk(){
        $str = "Game :" . parent::infoproduk() . "| {$this->jjam} Jam";

        return $str;
    }
    public function setDiskon($diskon){
        $this->diskon = $diskon;

    }

    
}

class infoproduk {

    public function cetak(produk $produk ){

        $hasil =    "<br>
                     nama : {$produk->judul} <br>
                     penulis dan Pengarang : {$produk->getlabel()} <br>
                     harga : {$produk->harga}      
                ";

        return $hasil;
    } 

}

$produk1 = new komik("Seni Menjadi bomat", "Bliyas Bandringa", "angkasa ngaret", 5000, 100);
$produk2 = new game("neken", "briyan","laptop riyan", 10000, 76);

//misi membuat format
// komik : narto | bliyas barindra , angkasa ngaret | Rp. (30000) - 100 halaman 
// game : narto | bliyas barindra , angkasa ngaret | Rp. (30000) - 100 jam 


echo $produk1->infoproduk();
echo "<br>";
echo  $produk2->infoproduk();
echo "<hr>";

//contoh public
//bisa di pakai di luar class tetapi kelemahan nya
//harga nya bisa di ubah2
//yang seharus nya harus sudah di tetapkan saat membuat objek

// $produk2->harga = 5000;
// echo $produk2->harga;

//contoh protected
//lebih aman 
//dam method getharga dpt di akses parent child
// echo $produk2->getHarga();

//hasil studi kasus
$produk2->setDiskon(50);
echo $produk2->getHarga();


?>