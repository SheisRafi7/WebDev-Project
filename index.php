<?php include "templates/header.php"; ?>
    <ul>
        <li>
            <a href="create.php"><strong>Register</strong></a> - become a member!
        </li>
        <li>
            <a href="read.php"><strong>Read</strong></a> - find a user
        </li>
    </ul>
    <section class="featured-products">
        <div class="container">
            <h2>Featured Products</h2>
            <div class="product">
                <img src="images\tshirt.jpg" alt="T-Shirt">
                <div class="product-info">
                    <h3>T-Shirt</h3>
                    <p>€19.99</p>
                    <p>Red slim-fit t-shirt </p>
                    <form action="add_to_cart.php" method="post">
                        <input type="hidden" name="product_id" value="1">
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" value="1" min="1">
                        <button type="submit">Add to Cart</button>
                    </form>
                </div>
            </div>
            <img src="images\denim.jpg" alt="Jeans">
            <div class="product-info">
                <h3>Jeans</h3>
                <p>€29.99</p>
                <p>Blue Stretch Fit Denim Jeans</p>
                <form action="add_to_cart.php" method="post">
                    <input type="hidden" name="product_id" value="1">
                    <label for="quantity">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" value="1" min="1">
                    <button type="submit">Add to Cart</button>
                </form>
            </div>
    </section>
<?php include "templates/footer.php"; ?>