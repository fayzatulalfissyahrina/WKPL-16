<?php 
class Wordcount { //Kelas ini digunakan untuk menghitung jumlah kata dalam kalimat
    public function countWords($sentence) { //Deklarasi method countWords yang memiliki parameter $sentence
        return count(explode(" ",$sentence));
         //count digunakan untuk menghitung jumlah elemen dalam array
        //explode digunakan untuk memisahkan string menjadi array menggunakan spasi sebagai pemisah
        //kemudian hasil perhitungan dikembalikan menggunakan return
    }
}
?>