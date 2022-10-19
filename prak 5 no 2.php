<!-- Affandika  -->
<!-- Praktikum 5 no.2 -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 5</title>
</head>
<body>
    <div class="container">
        <h2>Praktikum 5</h2>
		<h2>Nomor 2</h2>

        <?php
class Pegawai
{
	public  $nama;
	public $gaji;
	public	function __construct($nama, $gaji)
	{
		$this->nama = $nama;
		$this->gaji = $gaji;
	}
	public	function infoGaji()
	{
		return $this->gaji;
	}
}
class Manajer extends Pegawai
{
	private $tunjangan;
	public	function __construct($nama, $gaji, $tunjangan)
	{
		parent::__construct($nama, $gaji);
		$this->tunjangan = $tunjangan;
	}
	public	function infoGaji()
	{
		return $this->gaji;
	}
	public	function infoTunjangan()
	{
		return $this->tunjangan;
	}
}
class Programmer extends Pegawai
{
	private $bonus;
	public	function __construct($nama, $gaji, $bonus)
	{
		parent::__construct($nama, $gaji);
		$this->bonus = $bonus;
	}
	public	function infoGaji()
	{
		return $this->gaji;
	}
	public	function infoBonus()
	{
		return $this->bonus;
	}
}
class Bayaran
{
	public function hitungBayaran($peg)
	{
		$uang = $peg->infoGaji();
		
		return $uang;
	}
	public static function main($args)
	{
		echo "Affandika Febrian Putra Yunanto", "\n";
		echo "21091397030", "\n"; 
        echo "<br>";
		$man = new Manajer("Shinta", 10000000, 1000000);
        echo "<br>", "<br>";
		$prog = new Programmer("Dita", 7500000, 540000); 
        echo "<br>", "<br>";
		$hr = new Bayaran();
		echo "<br> Gaji untuk Manajer ". $man->nama." : Rp. ".strval($hr->hitungBayaran($man)) , "\n";
        echo "<br>", "<br>";
		echo "<br>Gaji untuk Programmer ".$prog->nama. " : Rp. ".strval($hr->hitungBayaran($prog)) , "\n";
      
	}
}
Bayaran::main(array());
        ?>
        <!-- END PHP  -->
    </div>
</body>
</html>