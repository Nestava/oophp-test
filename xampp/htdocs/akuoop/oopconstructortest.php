<?php 

class Waifu {
    public $nama = "Error: Data tidak terinput.";
    public $asalGameAtauAnime = "Error: Data tidak terinput.";
    public $tipePesona = "Error: Data tidak terinput.";

    public function __construct( $nama, $asalGameAtauAnime, $tipePesona ) {
        $this->nama = $nama;
        $this->asalGameAtauAnime = $asalGameAtauAnime;
        $this->tipePesona = $tipePesona;

        echo "Waifu: <br> $this->nama <br> $this->asalGameAtauAnime <br> $this->tipePesona <br>";

    }

    public function sumpahSerapah() {
        if ($this->nama === "Error: Data tidak terinput.") {
            return "Error: Data tidak terinput.<br><br>";
        } else {
            return "Saya bersumpah akan mencintai $this->nama selama-lamanya.<br><br>";
        }
    }

    public function sumpahSampah() {
        if ($this->nama === "Error: Data tidak terinput.") {
            return "Error: Data tidak terinput.<br><br>";
        } else {
            return "Saya bersumpah tidak akan mencintai $this->nama selama-lamanya.<br><br>";
        }
    }
}


$waifu1 = new Waifu("Ryou Yamada", "Bocchi The Rock!", "Imut" );
echo $waifu1->sumpahSerapah();

$waifu2 = new Waifu("Astolfo", "Fate Series", "Imut, Lanang" );
echo $waifu2->sumpahSampah();

?>