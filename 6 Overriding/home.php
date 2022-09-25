<?php

//overrinding
// menindih , mengganti , mengambilalih method lama dari parent class 
//menggunakan parent::



class produk {

    //skrg produk isinya lebih general
    public  $judul ,
            $penulis,
            $penerbit ,
            $harga;



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

        // if($this->tipebrg = "Komik"){
        //     $str .= " {$this->jhal} halaman";
        // }else if ($this->tipebrg = "Game"){
        //     $str .= " {$this->jjam} Jam";
        // }

        return $str;
    }
    public function getlabel(){

        return "$this->penulis, $this->penerbit";
    }
}


class komik extends produk {
    // menambah objek khusus di child class 1
    public $jhal;

    //menggunakan contruct dan OverRiding construct parent
    public function __construct($judul = "judul" , $penulis = "penulis" , $penerbit = "penerbit", $harga  = 0 , $jhal = 0){

        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jhal = $jhal;
    }

    //mengOverRiding method infoproduk dari parent class
    public function infoproduk(){
        $str = "Komik: |" . parent::infoproduk() . " {$this->jhal} Halaman";

        return $str;
    }
}

class game extends produk {

    //menambah objek khusus di chikd class 2
    public $jjam;

    //menggunakan contruct dan OverRiding construct parent
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

?>