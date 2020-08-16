<div id="__top_banner">
    <div class="white">
        <div id="helloUser">Hello, !</div>
        <a class="white" href="php/logout.php" title="Log out of your account">Logout</a>
    </div>

    <!-- <a href="cart.php">
        <button id="cart_button">
            <br>
            <br>
            <img src="../assets/Icons/cart.png" style="float:left; margin-right:0.5em" width="25" height="25">
            <span id="cart_total_value">
                $0.00
            </span>
        </button>
    </a> -->
</div>

<div style="text-align:center;">
    <div id="menu">
        <div class="menu_item" onclick="goto('../index.php')">
            <div>Home</div>
        </div>
        <div class="menu_item" onclick="goto('productlist.php')">
            <div>Product List</div>
        </div>
        <div class="menu_item" onclick="goto('userlist.php')">
            <div>User List</div>
        </div>
        <div class="menu_item" onclick="goto('orderlist.php')">
            <div>Order List</div>
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