<?php 

class Waifu {
    public $nama = "Error: Data tidak terinput.";
    public $asalGameAtauAnime = "Error: Data tidak terinput.";
    public $tipePesona = "Error: Data tidak terinput.";

    public function waifu() {
        return "<br> $this->nama <br> $this->asalGameAtauAnime <br> $this->tipePesona";
    }

    public function sumpahSerapah() {
        return "<br>Saya bersumpah akan mencintai $this->nama dalam tempo selama-lamanya.<br><br>";
    }

    public function sumpahSampah() {
        return "<br>Saya bersumpah tidak akan mencintai $this->nama selama-lamanya.<br><br>";
    }
}


$waifu1 = new Waifu();
$waifu1->nama = "Ryou Yamada";
$waifu1->asalGameAtauAnime = "Bocchi The Rock!";
$waifu1->tipePesona = "Imut";

echo "Waifu: " . $waifu1->waifu();
echo $waifu1->sumpahSerapah();


$waifu2 = new Waifu();
$waifu2->nama = "Astolfo";
$waifu2->asalGameAtauAnime = "Fate Series";
$waifu2->tipePesona = "Imut, Lanang";

echo "Waifu: " . $waifu2->waifu();
echo $waifu2->sumpahSampah();


?>