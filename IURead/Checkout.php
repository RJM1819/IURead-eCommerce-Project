<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Checkout</title>


    <!--CSS for the fonts, background, button, and labels-->

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: white;
        }

        header {
            background-color: #333;
            color: white;
            padding: 1em;
            text-align: center;
        }

        section {
            padding: 20px;
            text-align: center;
        }

        .checkout-form {
            max-width: 400px;
            margin: auto;
            background-color: white;
            border: 1px solid #ddd;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #333;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

    </style>
</head>
<body>

    <header>
        <h1>Checkout</h1>
    </header>

    <section>
        <div class="checkout-form">
            <h2>Billing Information</h2>
            <form>
                <label for="fullName">Full Name</label>
                <input type="text" id="fullName" name="fullName" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <label for="address">Address</label>
                <input type="text" id="address" name="address" required>

                <label for="city">City</label>
                <input type="text" id="city" name="city" required>

                <label for="zip">ZIP Code</label>
                <input type="text" id="zip" name="zip" required>

                <label for="cardNumber">Credit Card Number</label>
                <input type="text" id="cardNumber" name="cardNumber" required>

                <label for="expiryDate">Expiry Date</label>
                <input type="text" id="expiryDate" name="expiryDate" placeholder="MM/YYYY" required>

                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" required>

                <button type="submit">Place Order</button>
            </form>

            <!--Takes you back to homepage or cart page-->
            <a class="nav-link active" aria-current="page" href="cart.php"><b>Cart</b></a>
            <a class="nav-link active" aria-current="page" href="home.php"><b>Home</b></a>
        </div>
    </section>


</body>
</html>