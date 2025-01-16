<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
            font-size: 28px;
        }
        p {
            text-align: center;
            font-size: 16px;
            color: #555;
        }
        label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
            color: #333;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }
        textarea {
            height: 150px;
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
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .contact-info {
            margin-top: 30px;
            text-align: center;
        }
        .contact-info a {
            color: #4CAF50;
            text-decoration: none;
        }
        .contact-info a:hover {
            text-decoration: underline;
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
        <h2>Contact Us</h2>
        <p>If you have any questions or feedback, feel free to contact us using the form below. We'll get back to you as soon as possible.</p>
        
        <!-- Contact Form -->
        <form action="thankyou.php" method="POST">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Your Name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Your Email" required>

            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="Subject of your message" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Your Message" required></textarea>

            <input type="submit" value="Send Message">
        </form>

        <!-- Contact Information Section -->
        <div class="contact-info">
            <h3>Our Contact Information</h3>
            <p>We are available at the following address and contacts:</p>
            <p><strong>Email:</strong> support@bookmyspot.com</p>
            <p><strong>Phone:</strong> +1 234 567 890</p>
            <p><strong>Address:</strong> 1234 Main Street, Liverpool</p>
        </div>

        <!-- Back to Home Link -->
        <a href="index.php" class="back-link">Back to Home</a>
    </div>
</body>
</html>
