<?php

//inheritance
//menciptakan hierarki antar kelas (parent child)
//class child dari parent nya bisa menggunakan property dan method dari parent nya

//kali ini menggunakan inheritance
//dengan cara meng extends class dari parent 

class produk {


    public  $judul ,
            $penulis,
            $penerbit ,
            $harga,
            $jhal,
            $jjam;



    public function __construct($judul = "judul" , $penulis = "penulis" , $penerbit = "penerbit", $harga  = 0, $jhal = 0, $jjam = 0) {
        

        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jhal = $jhal;
        $this->jjam = $jjam;
    }

    public function katabijakD(){


        return "Mending beli nasduk";
    }

    public function infoproduk(){
        $str = "{$this->tipebrg} : {$this->judul} | {$this->getlabel()} Rp . ({$this->harga})";

        if($this->tipebrg = "Komik"){
            $str .= " {$this->jhal} halaman";
        }else if ($this->tipebrg = "Game"){
            $str .= " {$this->jjam} Jam";
        }

        return $str;
    }
    public function getlabel(){

        return "$this->penulis, $this->penerbit";
    }
}
//nah disini kita akan meng extends class produk

class komik extends produk {
    public function infoproduk(){
        $str = "Komik: {$this->judul} | {$this->getlabel()} Rp . ({$this->harga}) | {$this->jhal} Halaman";

        return $str;
    }
}

class game extends produk {
    public function infoproduk(){
        $str = "Game : {$this->judul} | {$this->getlabel()} Rp . ({$this->harga}) | {$this->jjam} Jam";

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

$produk1 = new komik("Seni Menjadi bomat", "Bliyas Bandringa", "angkasa ngaret", 5000, 100,0);
$produk2 = new game("neken", "briyan","laptop riyan", 10000,0, 76);

//misi membuat format
// komik : narto | bliyas barindra , angkasa ngaret | Rp. (30000) - 100 halaman 
// game : narto | bliyas barindra , angkasa ngaret | Rp. (30000) - 100 jam 


echo $produk1->infoproduk();
echo "<br>";
echo  $produk2->infoproduk();

?>