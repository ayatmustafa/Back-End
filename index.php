
<?php

?>

       


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>product</title>
</head>
<body class="alert-dark ">
 <section class=" ">
    <div class="container bg-dark pb-3">
        <div class="row">
        
            <div class="col-md-6   text-light pt-5 pb-5 mt-5">
                <h2 class="text-center pb-3"> Discount calculation program </h2>
                <form action="" method="POST">
                <div class="form-group pb-2">
                <label for="price">Price</label>
                <input type="number" required 
                    class="form-control" name="price" id="" aria-describedby="priceId" placeholder="plz enter price of product">
                <small hidden id="priceId" class="form-text text-muted">some thing error in price</small>
                </div>
                <div class="form-group pb-2">
                <label for="numberp">Number of products</label>
                <input type="number" required 
                    class="form-control" name="numberp" id="" aria-describedby="numberpId" placeholder="plz enter number of products ">
                <small hidden id="numberpId" class="form-text text-muted">some thing error in number of products</small>
                </div>
                <button class=" btn btn-danger float-right btn-lg " type="submit">Calculate</button>
                </form>

            </div>
          


            <div class="col-md-6 pt-5 text-light text-center">
            <?php if(isset($_POST['price']) && isset( $_POST['numberp'])){ 
                $price=$_POST['price'];
                $numberp=$_POST['numberp'];
                if (is_numeric($price)&& is_numeric($numberp ) ) { 
                    if ($price>0 && $numberp>0){?>
            <h2>Total Price Befor discount  <?php  echo  $price *  $numberp ;  ?> </h2>
           <h2>Total Price aftar discount  <?php  if(($price*  $numberp)<=1000){ 
               echo  (($price *  $numberp ) -(($price *  $numberp)*(10/100))); 

            }
            elseif(($price *  $numberp)>1000){

                echo  (($price*  $numberp ) -(($_POST['price'] *  $numberp)*(15/100))); 
            }elseif(($price *  $numberp)<0){
                echo '<h4 class="text-info  text-center w-100 text-captlized ">plz enter the price and number of products
                  and it  should be more than 0</h4><hr>';

            }
?>
 </h2>
                <p>number of prodacts:
                    <?php echo $numberp; ?>
                </p>
                <p>price for one is :
                    <?php echo $price; ?>
                </p>
            
            <?php } else{
               echo '<h4 class="text-danger  text-center w-100 text-captlized ">  price and number of products should be more than 0 </h4><hr>';

            }
            }else{
                                echo '<h4 class="text-info  text-center w-100 text-captlized ">  price and number of products should be numbers </h4><hr>';

            }
            } else{
                echo '<h4 class="text-info  text-center w-100 text-captlized ">plz enter the price and number of products </h4><hr>';

            }
            ?>
</div>


        </div>
        </div>
    </div>
</section>   


<script src="js/popper.min.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>