<?php
include './db.php';

$offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;
$limit = 6; // how many products to load each time

$sql = "SELECT * FROM products LIMIT $offset, $limit";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '
        <div class="bg-green-800 p-6 rounded-2xl shadow-xl">
            <h3 class="text-xl font-bold text-yellow-400">'. $row["name"] .'</h3>
            <p class="text-white/80 mt-2">'. $row["description"] .'</p>
            <div class="mt-4 flex justify-between items-center">
                <span class="text-lg font-bold">'. $row["price"] .' Ft</span>
                <button class="px-4 py-2 bg-yellow-400 text-green-900 rounded-full font-bold hover:bg-yellow-300">Kosárba</button>
            </div>
        </div>';
    }
} else {
    echo '0'; // signal no more products
}
?>
