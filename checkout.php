<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="icon" href="images\icon.png" type="image/gif" />
    <title> Checkout</title>
    <link rel="stylesheet" href="css\style.css" >
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <script src="http://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>

</head>

<body>
    
    <section id="checkout">
        <div class="checkout-caption">
            Checkout
        </div>
        <div class="checkout-form">
        <form action="orders.php" method="POST">
        <label for="customerName">Customer Name</label><br>
        <input type="text" class="form-control" id="customerName" name="customerName" required><br>
        <label for="address">Billing Address</label><br>
        <input type="text" class="form-control-1" id="address" name="address" required><br>
        <label for="contact">Contact Number</label><br>
        <input type="text" class="form-control" id="contact-no" name="contact-no" required><br>


        <div class="checkbox-area">
            <table class ="checkbox-tbl">
                <tr>
                    <td> <input class="form-check-input" type="checkbox" id="product1" name="productItems[]" value="Spaghetti" data-price="1500">
                    <label class="form-check-label" for="product1">Spaghetti</label> </td>
                    <td><input type="number" class="form-control-quantity-input" id="quantity2" name="quantity[Spaghetti]" placeholder="Quantity">
                    </td>
                </tr>
                <tr>
                    <td><input class="form-check-input" type="checkbox" id="product2" name="productItems[]" value="Chicken-Fried-Rice" data-price="1200">
                    <label class="form-check-label" for="product2">Chicken Fried Rice</label> </td>
                    <td><input type="number" class="form-control-quantity-input" id="quantity2" name="quantity[Chicken-Fried-Rice]" placeholder="Quantity">
                    </td>
                </tr>
                <tr>
                    <td><input class="form-check-input" type="checkbox" id="product3" name="productItems[]" value="Chicken-Noodles" data-price="1200">
                    <label class="form-check-label" for="product3">Chicken Noodles</label> </td>
                    <td><input type="number" class="form-control-quantity-input" id="quantity2" name="quantity[Chicken-Noodles]" placeholder="Quantity">
                    </td>
                </tr>
                <tr>
                    
                    <td><label>Total Price</label></td>
                    <td><input type="text" class="form-control-quantity-input" id="totalPrice" name="totalPrice" readonly></td>
                </tr>

                <tr>
                    
                    <td> <button type="button" class="clear-btn" id="clearFormButton">Clear</button></td>
                    <td><button type="submit" class="submit-checkout-btn">Submit Order</button>
                    <button type="submit" class="checkout-back-btn"><a href="services.php">Back</a></button></td>
                </tr>

            </table>
        

        </div>
        </form>
        

    </section>

 
    <script>
    document.querySelectorAll('input[type="number"]').forEach(function(input) {
        input.addEventListener('input', function() {
            if (this.value < 0) {
                this.value = 0;
            }
        });
    });

    // Function to calculate the total price
    function calculateTotalPrice() {
        let totalPrice = 0;
        const checkboxes = document.querySelectorAll('.form-check-input');
        
        checkboxes.forEach(function(checkbox) {
            if (checkbox.checked) {
                const quantityInput = checkbox.closest('tr').querySelector('.form-control-quantity-input');
                const quantity = parseInt(quantityInput.value) || 0;
                const price = parseInt(checkbox.getAttribute('data-price'));
                totalPrice += quantity * price;
            }
        });

        document.getElementById('totalPrice').value = totalPrice;
    }

    // Function to clear the form
    function clearForm() {
        document.querySelector('form').reset();
        document.getElementById('totalPrice').value = '';
    }

    // Event listeners
    document.querySelectorAll('.form-check-input').forEach(function(checkbox) {
        checkbox.addEventListener('change', calculateTotalPrice);
    });

    document.querySelectorAll('.form-control-quantity-input').forEach(function(input) {
        input.addEventListener('input', calculateTotalPrice);
    });

    document.getElementById('clearFormButton').addEventListener('click', clearForm);
</script>




</body>
</html>