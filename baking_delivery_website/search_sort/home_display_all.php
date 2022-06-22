<?php

$temp = 0;


$prod_counter= 0;



while ($prod_counter < count($products)){
    $temp = $products[$prod_counter][Product_ID];?>
 
    <li class="item">       
        <div>
        <a class="item-link">
            <div class="item-details"> 
            <a href="product.php?prodid=<?php echo $temp;?>"><img src="products/product_images/<?php echo $products[$prod_counter][Prod_Image];?>" class="item-img"></a>
           
                <div class="item-info">
                <span class="item-title"><?php echo $products[$prod_counter][Prod_Name]; ?>
                <br><small><?php echo substr($products[$prod_counter][Prod_Desc], 0, 34); ?> ... <br></small>
                </span>
                </div>
            </div>
        </a>
            <div class="cart-container">
            <button class="cart-button" id="btn<?php echo $prodcounter;?>" data-hover="ADD" onclick="location.href='home.php?prodid=<?php echo $temp; ?>'">
            <span>£ <?php echo $products[$prod_counter][Prod_Price];?></span></button>
            
            </div>
        </div>
        </li>
        <?php         $prod_counter++;
        
   }

    
        
       
    
        ?>

