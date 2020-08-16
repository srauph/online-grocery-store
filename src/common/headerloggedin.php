<div id="__top_banner">
    <div class="white">
        <div style="display: inline;" id="helloUser">You are currently logged in.</div>
        <a class="white" href="php/logout.php" title="Log out of your account">Logout</a>
    </div>
    
    

    <!-- cart -->
    <form action="cart.php">
        <button id="cart_button" style="padding-top:3.5%;">
            <img src="../assets/Icons/cart.png" style="float:left; margin-right:0.5em" width="25" height="25">
            <span id="cart_total_value">
                $0.00
            </span>
        </button>
    </form>
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
        <form action="aisle_category_selected.php" method="GET">
            <ul>
                <li><input type="submit" name="category" style="color:white; font-weight:bold" value="Bakery"></li>
                <li><input type="submit" name="category" style="color:white; font-weight:bold" value="Beauty Products"></li>
                <li><input type="submit" name="category" style="color:white; font-weight:bold" value="Beverages"></li>
                <li><input type="submit" name="category" style="color:white; font-weight:bold" value="Frozen"></li>
                <li><input type="submit" name="category" style="color:white; font-weight:bold" value="Fruits"></li>
                <li><input type="submit" name="category" style="color:white; font-weight:bold" value="Vegetables"></li>
                <li><input type="submit" name="category" style="color:white; font-weight:bold" value="Dairy Products"></li>
                <li><input type="submit" name="category" style="color:white; font-weight:bold" value="Snacks"></li>
            </ul>
        </form>
    </div>
</div>