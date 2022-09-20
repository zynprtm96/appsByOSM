
        <?php
        $no = 1;
        include('../config/koneksi.php');
        $nonota = $_POST['nonota'];
        $id = $_POST['id'];
        $jumlah = $_POST['jumlah'];
        $diskon = $_POST['diskon'];
       

        $query = mysqli_query($konek,"SELECT * FROM master_barang WHERE id='$id' ");
        $data = mysqli_fetch_array($query);
        $kode = $data['kode'];
        $jenis = $data['jenis'];
        $produk = $data['produk'];
        $merk = $data['merk'];
        $detil = $data['detil'];
        $harga = $data['harga'];
        $stok = $data['stok'];


        $mk = "INSERT INTO produk_kontan (nonota,kode_barang,produk,harga,jumlah,merk,detil,jenis,diskon)values('$nonota', '$kode','$produk','$harga','$jumlah','$merk','$detil','$jenis','$diskon')";
        $masuk =mysqli_query($konek,$mk);

        $pengurangan = $stok - $jumlah;
        $barang =  "UPDATE master_barang set stok='$pengurangan' where id='$id'";
        $masukbarang = mysqli_query($konek,$barang);

        ?>

    