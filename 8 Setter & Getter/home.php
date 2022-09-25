<?php

//setter dan getter
//membuat validasi atau apalah itu


class produk {


    private  $judul ,
            $penulis,
            $penerbit,
            $diskon = 0,
            $harga;




    public function __construct($judul = "judul" , $penulis = "penulis" , $penerbit = "penerbit", $harga  = 0) {
        

        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }



    public function infoproduk(){
        $str = " {$this->judul} | {$this->getlabel()} Rp . ({$this->harga})";



        return $str;
    }
    public function getlabel(){

        return "$this->penulis, $this->penerbit";
    }


    //setter getter
    public function setJudul($judul){
        $this->judul = $judul;
    }

    public function getJudul(){

        return $this->judul;
    }


    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }

    public function getPenulis(){

        return $this->penulis;
    }
    

    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }

    public function getPenerbit(){

        return $this->penerbit;
    }


    public function setHarga($harga){
        $this->harga = $harga;
    }

    public function getHarga(){

        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;

    }

    public function getDiskon(){

        return $this->diskon;
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

//hasil studi kasus
$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

//setter getter
$produk2->setJudul("wow");
echo $produk2->getJudul();

echo "<br>";
$produk1->setDiskon(50);
echo $produk1->getHarga();
?>