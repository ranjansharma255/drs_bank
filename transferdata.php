<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRS Bank</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/content.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/customer.css">
    <link rel="stylesheet" href="css/transfersuccess.css">
</head>
<body>
    <?php include 'php/navbar.php'; ?>
    <section class = "container">
        <div class="content">
            <h1 class = "c-heading">Transaction Successful</h1>
            <hr>
            <p>Amount Rs. <span id = "amt-sent"><strong>2500</strong></span> /- has being successfuly transfered to <span id = "rep-name"><strong>Varshith</strong></span> 
            <a href="customers.php" ><button class = "btn1">View All Customer</button> </a>
        </div>
    </section>
    <?php include 'php/footer.php'; ?>
</body>
</html>