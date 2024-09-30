<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order System</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Menu</h1>
    <table>
        <tr>
            <th>Order</th>
            <th>Amount</th>
        </tr>
        <tr>
            <td>Burger</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Fries</td>
            <td>75</td>
        </tr>
        <tr>
            <td>Steak</td>
            <td>150</td>
        </tr>
    </table>

    <h2>Select an order</h2>
    <form action="process_order.php" method="POST">
        <label for="order">Select an order: </label>
        <select name="order" id="order">
            <option value="Burger">Burger</option>
            <option value="Fries">Fries</option>
            <option value="Steak">Steak</option>
        </select><br><br>

        <label for="quantity">Quantity: </label>
        <input type="number" name="quantity" id="quantity" min="1" required><br><br>

        <label for="cash">Cash: </label>
        <input type="number" name="cash" id="cash" min="0" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
