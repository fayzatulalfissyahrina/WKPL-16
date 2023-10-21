<?php //Untuk mengeksekusi kode menggunakan path ./vendor/bin/phpunit --bootstrap/autolod.php FileName.php 
use PHPUnit\Framework\TestCase; //Digunakan untuk mengimpor kelas/framework TestCase
require_once "wordcount.php"; //Class yang akan dilakukan test
//Class untuk run Testing
class SimpleTest extends TestCase { //Deklarasi class SimpleTest yang meng extends dari TestCase
    public function testCountWords() { //Deklarasi method untuk pengujian
        $Wc = new Wordcount(); //Membuat objek dari class Wordcount
        $TestSentence = "My name is Fina"; //Deklarasi variabel yang di dalamnya terdapat kalimat untuk ditest
        $Wordcount = $Wc->countWords($TestSentence); //Memanggil method countWords untuk pengujian kata 
        //kemudian menyimpan hasilnya di variabel $Wordcount
        $this->assertEquals(4, $Wordcount);//assertEquals digunakan untuk membandingkan hasil perhitungan dengan nilai yang diharapkan
        //Dalam pengujian ini kita mengharapkan angka 4 karena kalimat yang diuji berjumlah 4 kata
    }
}
?>