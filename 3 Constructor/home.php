<?php


//constructor / constructor method
//adalah magic method dimana setiap kita menginstans sebuah class maka objek tersebut
//akan langsung terpanggil tanpa memanggil nya


class produk {

    // public  $judul = "judul",
    //         $penulis = "penulis",
    //         $penerbit = "penerbit",
    //         $harga = 0;
    public  $judul ,
            $penulis,
            $penerbit ,
            $harga ;

    //membuat constructor method
    //misal nya kita ingin setiap produk mengganti propertynya
    //tanpa memanggil property 1 dengan menggunakan parameter
    //dan juga kita bisa memberikan nilai default langsung dalam parameter nya
    public function __construct($judul = "judul" , $penulis = "penulis" , $penerbit = "penerbit", $harga  = 0) {
        
        //mengganti property lama dengan baru
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function katabijakD(){

        //karena fuction berati menembalikan nilai
        return "Mending beli nasduk";
    }

    public function getlabel(){

        return "$this->penulis, $this->penerbit";
    }
}

//cara lama
// $produk1 = new produk();
// $produk1->judul = "Seni Menjadi bomat";
// $produk1->penulis = "Bliyas Bandringa";
// $produk1->penerbit = "angkasa ngaret";
// $produk1->harga = 5000;

// $produk2 = new produk();
// $produk2->judul = "neken";
// $produk2->penulis = "briyan";
// $produk2->penerbit = "laptop riyan";
// $produk2->harga = 10000;

// cara baru
$produk1 = new produk("Seni Menjadi bomat", "Bliyas Bandringa", "angkasa ngaret", 5000);
$produk2 = new produk("neken", "briyan","laptop riyan", 10000);

//atau hanya menggunakan 1 parameter
$produk3 = new produk("filem kaq friza");


//memanggil method
echo "game : " . $produk2->getlabel();

echo "<br>";

echo "komik :" . $produk1->getlabel() . "  harga : " . $produk1->harga, $produk1->katabijakD();

echo "<br>";

var_dump($produk3);


?>