<?php include('header.php'); ?>
<div class="container slideanim" style="margin-top:30px;margin-bottom:30px;background-color:#fff">
  <div class="content-wrapper">
    <div id="product-container">

    </div>
    <div class="load-more">
      <a href="#" class="btn btn-primary" id="loadMore"> Load more..</a>
        <p class="totop"> 
            <a class="btn btn-dark" href="#top" >Back to top</a> 
        </p>
    </div>
  </div>
</div>
<script type="text/javascript">
    $(function(){
        loadData();
        $(window).scroll(function() {
            $(".slideanim").each(function(){
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
                if (pos < winTop + 600) {
                $(this).addClass("slide");
                }
            });
        });     
    });

    function loadData(){
        $.ajax({
            url:"getallproduct.php",
            type:"POST",
            success:function(data){
                $("#product-container").append(data);
                    if (data.length%4==0) {
                        $("#product-container .row:last-child").remove();
                    }
                    console.log(data);
                    $(".product").slice(0, 4).show();
                    $("#loadMore").on('click', function (e) {
                        e.preventDefault();
                        $(".product:hidden").slice(0, 4).slideDown();
                        if ($(".product:hidden").length == 0) {
                            $("#load").fadeOut('slow');
                            $("#loadMore").hide();
                        }
                        $('html,body').animate({
                            scrollTop: $(this).parent().parent().find("div .product:visible:last").offset().top
                        }, 1000);
                    });
            }
        })
    }
</script>