<?php
include('koneksi.php');
$email = $_POST['email'];
$sql = "SELECT * from penjualan_header where (email = '$email' or kode_jual = '$email')";
$query =mysqli_query($koneksi,$sql);

while ($d = mysqli_fetch_array($query)) {
    echo '<div class="card" style="margin-bottom:8px">
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td>Nomor Penjualan</td>
                        <td>:</td>
                        <td>'.$d[1].'</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>'.ucwords($d['first_name'].' '.$d['last_name']).'</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td>'.$d['email'].'</td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>:</td>
                        <td>'.$d['no_telp'].'</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td>'.$d['alamat'].' '.$d['zip'].' '.$d['kota'].' '.$d['provinsi'].'</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>:</td>
                        <td> IDR '.number_format($d['grand_total'],2).'</td>
                    </tr>
                </table>
            </div>
        </div>';
}


?>