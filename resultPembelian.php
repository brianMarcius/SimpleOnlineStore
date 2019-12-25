<?php 
include('koneksi.php');

$id = $_GET['id'];
$sql = "SELECT * from penjualan_header as a, penjualan_detail as b where a.id = $id and a.kode_jual = b.kode_jual";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query);

include('header.php');

?>


<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="card" id="section-to-print">
            <div class="card-img-top" style="text-align:center"><img src="img/logo/logo.png" style="width:100%"/></div>
            <div class="card-body">
                <h4>Terimakasih <?php echo ucwords($data['first_name']); ?>,</h4><p>Telah melakukan pembelian di toko kami<p>
                <div class="alert alert-success">
                    <strong>Success!</strong> Pembelian anda sudah kami proses.
                </div>
                <table class="table">
                    <tr>
                        <td>Nomor Penjualan</td>
                        <td>:</td>
                        <td><?php echo $data['kode_jual'];?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?php echo ucwords($data['first_name'].' '.$data['last_name']);?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?php echo $data['email'];?></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>:</td>
                        <td><?php echo $data['no_telp'];?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?php echo $data['alamat'].' '.$data['zip'].' '.$data['kota'].' '.$data['provinsi'];?></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>:</td>
                        <td><?php echo 'IDR '.number_format($data['grand_total'],2);?></td>
                    </tr>


                </table>
                <a href="home.php" class="btn btn-danger">Oke <i class="fa fa-thumbs-up"></i></a>
                <a onclick="window.print()" class="btn btn-light pull-right"><i class="fa fa-print"></i> Cetak</a>
            </div>
        </div>
    <div>
    <div class="col-md-4"></div>
</div>