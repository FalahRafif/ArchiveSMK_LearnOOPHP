<?php

//inheritance
//menciptakan hierarki antar kelas (parent child)


class produk {


    public  $judul ,
            $penulis,
            $penerbit ,
            $harga,
            $tipebrg,
            $tipehalgam;



    public function __construct($tipebrg = "",$judul = "judul" , $penulis = "penulis" , $penerbit = "penerbit", $harga  = 0, $tipehalgam = 0) {
        

        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->tipebrg = $tipebrg;
        $this->tipehalgam = $tipehalgam;
    }

    public function katabijakD(){


        return "Mending beli nasduk";
    }

    public function infodetail(){
        $str = "{$this->tipebrg} : {$this->judul} | {$this->getlabel()} Rp . ({$this->harga})";

        if($this->tipebrg = "Komik"){
            $str .= " {$this->tipehalgam} halaman";
        }else if ($this->tipebrg = "Game"){
            $str .= " {$this->tipehalgam} Jam";
        }

        return $str;
    }
    public function getlabel(){

        return "$this->penulis, $this->penerbit";
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

$produk1 = new produk("Komik","Seni Menjadi bomat", "Bliyas Bandringa", "angkasa ngaret", 5000, 100);
$produk2 = new produk("Game","neken", "briyan","laptop riyan", 10000, 76);

//misi membuat format
// komik : narto | bliyas barindra , angkasa ngaret | Rp. (30000) - 100 halaman 
// game : narto | bliyas barindra , angkasa ngaret | Rp. (30000) - 100 jam 


echo $produk1->infodetail();
echo "<br>";
echo  $produk2->infodetail();

?>