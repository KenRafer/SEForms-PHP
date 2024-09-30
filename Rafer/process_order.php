<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $order = $_POST['order'];
    $quantity = intval($_POST['quantity']);
    $cash = floatval($_POST['cash']);

    // Prices
    $prices = [
        "Burger" => 50,
        "Fries" => 75,
        "Steak" => 150
    ];

    if (array_key_exists($order, $prices)) {
        $total_cost = $prices[$order] * $quantity;

        if ($cash >= $total_cost) {
            $change = $cash - $total_cost;
            echo "You ordered $quantity $order(s). Total cost: $total_cost. Cash: $cash. Change: $change.";
        } else {
            $shortage = $total_cost - $cash;
            echo "Insufficient cash. You need $shortage more.";
        }
    } else {
        echo "Invalid order.";
    }
} else {
    echo "Invalid request.";
}
?>
