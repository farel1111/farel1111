    <?php
    $koneksi = new mysqli('localhost', 'root', '', 'db_uhddg2');
    if ($koneksi) {
        echo "Koneksi Berhasil";
    }else{
        echo $koneksi->error;
    }

    ?>