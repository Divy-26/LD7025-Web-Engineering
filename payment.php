<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            margin-top: 20px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .back-link {
            display: block;
            margin-top: 20px;
            text-align: center;
            text-decoration: none;
            color: #4CAF50;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Payment Page</h2>
        <form action="success.php" method="POST">
            <!-- Billing Information -->
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="John Doe" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="john.doe@example.com" required>

            <label for="address">Billing Address</label>
            <input type="text" id="address" name="address" placeholder="123 Main Street" required>

            <!-- Card Details -->
            <label for="card-name">Name on Card</label>
            <input type="text" id="card-name" name="card-name" placeholder="John Doe" required>

            <label for="card-number">Card Number</label>
            <input type="text" id="card-number" name="card-number" placeholder="1111-2222-3333-4444" required>

            <label for="expiry">Expiry Date</label>
            <input type="text" id="expiry" name="expiry" placeholder="MM/YY" required>

            <label for="cvv">CVV</label>
            <input type="text" id="cvv" name="cvv" placeholder="123" required>

            <!-- Submit Button -->
            <input type="submit" value="Submit Payment">
        </form>

        <!-- Back to Home -->
        <a href="index.php" class="back-link">Back to Home</a>
    </div>
</body>
</html>
