    <!DOCTYPE html>
<html>
    <body>
        <h1>Halaman PHP Pertama Bryant</h1>
        <?php
            echo "Modul_1</p>";
        ?>
    </body>
</html>

<?php
    echo '<br />';
    echo "Daftar Nama-nama nya:</p>"; // menghasilkan keluaran yang sama dengan perintah cetak diatas

    //Nomor 1 nya
    $nama = array("Bryant Aprilian Bahan","Chief","Grandy");
    for($x=0;$x<count($nama);$x++){
        echo $nama[$x]."</p>";
        //Nomor 2 nya
        echo("Jumlah kata : ".str_word_count($nama[$x])."<p/>");
        echo "Jumlah huruf: ".$huruf = strlen(preg_replace('/[^a-zA-Z]/', '', $nama[$x]))."</p>";
        //Nomor 3 nya
        echo "Kebalikannya: ".strrev($nama[$x])."</p>";
        //Nomor 4 nya
        $a = substr_count($nama[$x], "a"); //hitung jumlah huruf “a”
        $i = substr_count($nama[$x], "i"); //hitung jumlah huruf “i”
        $u = substr_count($nama[$x], "u"); //hitung jumlah huruf “u”
        $e = substr_count($nama[$x], "e"); //hitung jumlah huruf “e”
        $o = substr_count($nama[$x], "o"); //hitung jumlah huruf “o”
        $vocal = $a+$i+$u+$e+$o; //hitung total jumlah huruf vocal
        $konsonan = (integer) $huruf-$vocal; // Di sini waktu di check tipe data yang $huruf itu string, makanya di ubah jadi integer dulu
        echo "jumlah huruf vocal: $vocal</p>";
        echo "Jumlah huruf kosonan: $konsonan</p>";
        echo '<br />';
    }
?>