<?php 
  include('header.php');  


?>
<div class="container" style="margin-top:30px;margin-bottom:30px;background-color:#fff">
    <div class="row">
        <div class="col-md-12">
            <div class="input-group mb-3">
                <input id="email" type="text" class="form-control" placeholder="Put Your email or Transaction number here!">
                <div class="input-group-append">
                    <button id="find-transaction" class="btn btn-danger" type="submit">Find!</button>
                </div>
            </div>
            <div id="list-container">
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $("#find-transaction").click(function(){
        $("#list-container").html('');
        email = $("#email").val();
        $.ajax({
            type:"POST",
            data:{
                email:email
            },
            url:"gettransactionlist.php",
            success:function(result){
                $("#list-container").append(result);
            },
        })
    })

</script>