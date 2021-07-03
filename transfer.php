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
    <link rel="stylesheet" href="css/transferstyle.css">

</head>
<body>
    <?php include 'php/navbar.php'; ?>
    <section class = "container">
        <div class="content">
            <h1 class = "c-heading">Transfer</h1>
            <hr>
            <form action="transferdata.php" method = "post" class = "transfer-frm">
            <h2 id = "from">From<h2>
            <table id = "customers-table">
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Gmail</th>
                    <th>Available Balance</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ranjan Sharma</td>
                        <td>ranjansharma@gmail.com</td>
                        <td>5500</td>
                    </tr>
                </tbody>
            </table>
            <h2 id="to">To</h2>
            <select class = "drop-down">
                <option value = "" selected disabled>Select Recipient</option>
                <option value = "1">Ranjan Sharma</option>
                <option value = "2">Varshith</option>
            </select>
            <input type="submit" value="Transfer" class = "transfer-btn">
            <input type="text" placeholder="Amount" required id ="amount">
            <div id = "msg">
            <h3>Message</h3>
            <p>
                Balance insufficient
            </p>
            </div>
            </form>   
        </div>
    </section>
    <?php include 'php/footer.php'; ?>
</body>
</html>