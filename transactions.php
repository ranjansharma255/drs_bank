<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRS Bank</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/customer.css">
    <link rel="stylesheet" href="css/table.css">
</head>
<body>
    <?php include 'php/navbar.php'; ?>
    <section class = "container">
        <div class="content">
            <h1 class = "c-heading">All Transactions</h1>
            <hr>
            <table id = "customers-table">
                <thead>
                    <th>Id</th>
                    <th>Sender</th>
                    <th>Receiver</th>
                    <th>Amount</th>
                    <th>Date and Time</th>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ranjan Sharma</td>
                        <td>ranjansharma@gmail.com</td>
                        <td>5500</td>
                        <td><?php echo date("h:i:sA",time()); ?></td>
                    </tr>

                </tbody>
            </table>
            </div>    
        </div>
    </section>
    <?php include 'php/footer.php'; ?>
</body>
</html>