<?php
    require_once('config/db.php');
    require_once('lib/pdo_db.php');
    require_once('models/Customer.php');

    // Instantiate Customer
    $customer = new Customer();

    //Get Customer
    $customers = $customer->getCustomers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Customers</title>
    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
    <div class="btn-group" role="group">
    <a href="customers.php" class="btn btn-primary">Customers</a>
    <a href="transactions.php" class="btn btn-secondary">Transactions</a>
    </div>
    <hr>
       <h2>Customers</h2>
      <table class="table table-striped">
        <thead>
            <tr>
                <th>Customer ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($customers as $c): ?>
                <tr>
                    <td><?php echo $c->id; ?></td>
                    <td><?php echo $c->first_name; ?> <?php echo $c->last_name; ?></td>
                    <td><?php echo $c->email; ?>
                    <td><?php echo $c->created_at; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
      </table>
      <br>
      <p><a href="index.php">Pay Page</a></p>
    </div>
    
</body>
</html>