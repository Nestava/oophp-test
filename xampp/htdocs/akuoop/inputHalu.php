<?php 

class Halu {
    public $tipe = "Error: Data tidak terinput.";
    public $nama = "Error: Data tidak terinput.";
    public $asalGameAtauAnime = "Error: Data tidak terinput.";
    public $ganteng = "Error: Data tidak terinput.";
    public $cantik = "Error: Data tidak terinput.";


    public function __construct( $tipe, $nama, $asalGameAtauAnime, $ganteng, $cantik ) {
        $this->tipe = $tipe;
        $this->nama = $nama;
        $this->asalGameAtauAnime = $asalGameAtauAnime;
        // $this->tipePesona = $tipePesona;
        $this->ganteng = $ganteng;
        $this->cantik = $cantik;
    }

    public function getLabel() {
        $str = "Nama: {$this->nama}<br> Asal Game/Anime: {$this->asalGameAtauAnime}<br>";
        return $str;
        }

    public function getInfoLengkap() {
        $str = "{$this->tipe}:<br> {$this->getLabel()}";
        if($this->tipe == "Husbu") {
            $str .= "Level Kegantengan: {$this->ganteng}<br><br>";
        } else if($this->tipe == "Waifu") {
            $str .= "Level Kecantikan: {$this->cantik}<br><br>";
        }

        return $str;
    }


    // public function sumpahSerapah() {
    //     if ($this->nama ===  "Error: Data tidak terinput.") {
    //         return "Error: Data tidak terinput.<br><br>";
    //     } else {
    //         return "Saya bersumpah akan mencintai $this->nama selama-lamanya.<br><br>";
    //     }
    // }

    // public function sumpahSampah() {
    //     if ($this->nama === "Error: Data tidak terinput.") {
    //         return "Error: Data tidak terinput.<br><br>";
    //     } else {
    //         return "Saya bersumpah tidak akan mencintai $this->nama selama-lamanya.<br><br>";
    //     }
    // }
}

// class CetakInfo {
//     public function __construct( Halu $halu ) {
//         $cetak = "Tipe: {$halu->tipe} <br> Nama: {$halu->nama} <br> Asal Game/Anime: {$halu->asalGameAtauAnime} <br> Tipe Pesona: {$halu->tipePesona}<br><br>";
//         echo $cetak;
//     }
// }


$halu1 = new Halu( "Waifu", "Ryou Yamada", "Bocchi The Rock!", "0", "100"  );
$halu2 = new Halu( "Husbu", "Astolfo", "Fate Series", "0", "100" );

// echo $halu1->sumpahSerapah();
// echo $halu2->sumpahSampah();

echo $halu1->getInfoLengkap();
echo $halu2->getInfoLengkap();



?>