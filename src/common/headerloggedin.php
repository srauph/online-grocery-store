<div id="__top_banner">
    <div class="white">You are logged in | 
        <a class="white" href="php/logout.php" title="Log out of your account">Logout</a>
    </div>

    <!-- cart -->
    <a href="cart.php">
        <button id="cart_button">
            <br>
            <br>
            <img src="../assets/Icons/cart.png" style="float:left; margin-right:0.5em" width="25" height="25">
            <span id="cart_total_value">
                $0.00
            </span>
        </button>
    </a>
</div>

<div style="text-align:center;">
    <div id="menu">
        <div class="menu_item" onclick="goto('index.php')">
            <div>Home</div>
        </div>
        <div class="menu_item" onclick="goto('all_items.php')">
            <div>All products</div>
        </div>
        <div class="menu_item" onclick="goto('aisle.php')">
            <div onmouseover="void_showElement('menu_aisle');" onmouseout="void_hideElement('menu_aisle');">Aisle</div>
        </div>
        <div class="menu_item" onclick="goto('contactus.php')">
            <div>Contact us</div>
        </div>
    </div>
</div>
<div>
    <div class="sub_menus" id="menu_aisle" onmouseover="void_showElement('menu_aisle');"
        onmouseout="void_hideElement('menu_aisle');">
        <form action="register.php" method="POST">
            <ul>
                <li><input type="submit" name="__tag_search_btn" value="Bakery" formaction="bakery.php" style="color:white; font-weight:bold"></li>
                <li><input type="submit" name="__tag_search_btn" value="Beauty Products"
                        formaction="beautyproducts.php" style="color:white; font-weight:bold"></li>
                <li><input type="submit" name="__tag_search_btn" value="Beverages" formaction="beverages.php" style="color:white; font-weight:bold"></li>
                <li><input type="submit" name="__tag_search_btn" value="Frozen" formaction="frozen.php" style="color:white; font-weight:bold"></li>
                <li><input type="submit" name="__tag_search_btn" value="Fruits" formaction="fruits.php" style="color:white; font-weight:bold"></li>
                <li><input type="submit" name="__tag_search_btn" value="Vegetables" formaction="vegetables.php" style="color:white; font-weight:bold">
                </li>
                <li><input type="submit" name="__tag_search_btn" value="Dairy Products"
                        formaction="dairyproducts.php" style="color:white; font-weight:bold"></li>
                <li><input type="submit" name="__tag_search_btn" value="Snacks" formaction="snacks.php" style="color:white; font-weight:bold"></li>
            </ul>
        </form>
    </div>
</div>