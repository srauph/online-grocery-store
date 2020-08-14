<html>
	<head>
	<head>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/aisle_beverage.css">
    <title id="productTitle">Sprite (355mL Can)</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script type="text/javascript" src="../scripts/Util.js"></script>
    <script type="text/javascript" src="../scripts/Cart.js"></script>
    <script type="text/javascript" src="../scripts/Item.js"></script>
    <script type="text/javascript" src="../scripts/Sales.js"></script>
    <script type="text/javascript" src="../scripts/AbstractComponent.js"></script>
    <script type="text/javascript" src="../scripts/Beverage.js"></script>
    <script type="text/javascript" src="../scripts/main.js"></script>
</head>

<body>
	<?php
    $header = file_get_contents('../common/headerbackend.php');
	echo $header;
    ?>
    <script>
        document.getElementById("helloUser").innerHTML="Hello, <?php echo $_SESSION["currentLogin"][0]; ?>!";
	</script>
		
		<div class="cart_left">
        <div class="border4">

        <table style="width:100%" >
             <tr>
      
             <th height="100" width="360" style="text-align:center"><h2 class="grey">Product Image</h2></th>

             <th height="100" width="360" style="text-align:center"><h2 class="grey">Product name</h2></th>
     
             <th height="100" width="360" style="text-align:center"><h2 class="grey">Quantity</h2></th>

             <th height="100" width="360" style="text-align:center"><h2 class="grey">Category</h2></th>

             <th height="100" width="360" style="text-align:center"><h2 class="grey">In Stock Inventory</h2></th>
        
             <th style="text-align:center"><h2 class="grey">Total Price</h2></th>

            <td><pre>  </pre></td>
            <td><pre>  </pre></td>
            <td><pre>  </pre></td>

              </tr>
              <tr>

                  <td style="text-align:center"> <image src="assets/images/apple.jpg" alt="green apples image"  width="150" height="100"></td>
          
                  <td width="100" style="text-align:center"><h2 >Green Apples</h2></td>
          
                  <td  style=  "text-align:center;"><input type="number" style="text-align:center; width:90; height:45;" placeholder="QUANTITY"/></td>

                  <td style="text-align:center;"><h2>Fruits</h2></td>

                  <td style="text-align:center;"><input type="text" style="text-align:center; width:90; height:45;" placeholder="STOCK"/></td>
                  
                  <td style="text-align:center;"><input type="text" style="text-align:center; width:90; height:45;" placeholder="PRICE"/></td>

                  <td style="text-align:center;">
                    <form method="POST">
                      <ul>
                        <input type="submit" name="__tag_search_btn" value="save" formaction="productlist.php">
                      </ul>
                    </form>
                  </td>

			  </tr>
    	</table>
	    
	    </div>
		<div class="border4">
		
		<table style="width:100%" >
      		 <tr>
      
      		 <th height="100" width="360" style="text-align:center"><h2 class="grey">Product Image</h2></th>

      		 <th height="100" width="360" style="text-align:center"><h2 class="grey">Product name</h2></th>
     
      		 <th height="100" width="360" style="text-align:center"><h2 class="grey">Quantity</h2></th>

      		 <th height="100" width="360" style="text-align:center"><h2 class="grey">Category</h2></th>

      		 <th height="100" width="360" style="text-align:center"><h2 class="grey">In Stock Inventory</h2></th>
        
      		 <th style="text-align:center"><h2 class="grey">Total Price</h2></th>
        
        
     		<td><pre>  </pre></td>
     		<td><pre>  </pre></td>
     		<td><pre>  </pre></td>

      		  </tr>
      		  <tr>

          		  <td style="text-align:center"> <image src="assets/images/carrots.jpg" alt="carrots image"  width="150" height="100"></td>
          
          		  <td width="100" style="text-align:center"><h2 >Carrots</h2></td>
          
          		  <td  style=  "text-align:center;"><input type="number" style="text-align:center; width:90; height:45;" placeholder="QUANTITY"/></td>

          		  <td style="text-align:center;"><h2>Vegetables</h2></td>

          		  <td style="text-align:center;"><input type="text" style="text-align:center; width:90; height:45;" placeholder="STOCK"/></td>
          
          		  <td style="text-align:center;"><input type="text" style="text-align:center; width:90; height:45;" placeholder="PRICE"/></td>

                <td style="text-align:center;">
                    <form method="POST">
                      <ul>
                        <input type="submit" name="__tag_search_btn" value="save" formaction="productlist.php">
                      </ul>
                    </form>
                  </td>

     		  </tr>
        </table>

        </div>
        <div class="border4">
		
		<table style="width:100%" >
      		 <tr>
      
      		 <th height="100" width="360" style="text-align:center"><h2 class="grey">Product Image</h2></th>

      		 <th height="100" width="360" style="text-align:center"><h2 class="grey">Product name</h2></th>
     
      		 <th height="100" width="360" style="text-align:center"><h2 class="grey">Quantity</h2></th>

      		 <th height="100" width="360" style="text-align:center"><h2 class="grey">Category</h2></th>

      		 <th height="100" width="360" style="text-align:center"><h2 class="grey">In Stock Inventory</h2></th>
        
      		 <th style="text-align:right"><h2 class="grey">Total Price</h2></th>
        
        
     		<td><pre>  </pre></td>
     		<td><pre>  </pre></td>
     		<td><pre>  </pre></td>

      		  </tr>
      		  <tr>

          		  <td style="text-align:center"> <image src="assets/images/strawberry.jpg" alt="strawberries image"  width="150" height="100"></td>
          
          		  <td width="100" style="text-align:center"><h2 >Strawberries</h2></td>
          
          		  <td  style=  "text-align:center;"><input type="number" style="text-align:center; width:90; height:45;" placeholder="QUANTITY"/></td>

          		  <td style="text-align:center;"><h2>Fruits</h2></td>

          		  <td style="text-align:center;"><input type="text" style="text-align:center; width:90; height:45;" placeholder="STOCK"/></td>
          
          		  <td style="text-align:center;"><input type="text" style="text-align:center; width:90; height:45;" placeholder="PRICE"/></td>

                <td style="text-align:center;">
                    <form method="POST">
                      <ul>
                        <input type="submit" name="__tag_search_btn" value="save" formaction="productlist.php">
                      </ul>
                    </form>
                  </td>

     		  </tr>
        </table>

        </div>

	<?php
    $footer = file_get_contents('../common/footerbackend.php');
    echo $footer;
    ?>
</html>