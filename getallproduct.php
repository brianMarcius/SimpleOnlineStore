<?php
include('koneksi.php');
$sql = "SELECT * from product";
$query = mysqli_query($koneksi,$sql);
$i=1;
$html = "<div class='row'>";
while ($r = mysqli_fetch_array($query)) {
        $html .= '<div class="col-md-3 product" style="display:none">
        <div class="card">
            <img class="card-img-top" src="img/'.$r['img'].'" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title"><a>'.$r['title'].'</a></h4>
                <p class="card-text">IDR '.number_format($r['price'],2).'</p>
                <a href="buy.php?id='.$r['id'].'" class="btn btn-danger"><i class="fa fa-shopping-cart"></i> Buy it!</a>
            </div>
        </div>
    </div>';
    if ($i % 4 ==0 && $i>=4) {
        $html .= '</div><div class="row">';
    }
    $i++;
}
echo $html;



?>