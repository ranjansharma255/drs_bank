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
    <link rel="stylesheet" href="css/transfer.css">
    <link rel="stylesheet" href="css/customer.css">

</head>
<body>
    <?php include 'php/navbar.php'; ?>
    <section class = "container">
        <div class="content">
            <h1 class = "c-heading">Transfer</h1>
            <hr>
            <form action="transferdata.php" method = "post">
            <h2>From<h2>
            <table id = "form-table">
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
            <h2>To</h2>
            <select class = "drop-down">
                <options


            </select>
            <a href="transactions.php" ><button class = "btn2">View All Transactions</button> </a>
            </form>   
        </div>
    </section>
    <?php include 'php/footer.php'; ?>
</body>
</html>