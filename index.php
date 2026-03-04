<?php
if (isset($_POST["submit"])) {

    $_SESSION['BOUQUETS'] = $_POST['BOUQUETS'];
    $_SESSION['ARRANGEMENTS'] = $_POST['ARRANGEMENTS'];
    $_SESSION['SINGLE_FLOWERS'] = $_POST['SINGLE_FLOWERS'];
    $_SESSION['ADD_ONS'] = $_POST['ADD_ONS'];
    $_SESSION['SPECIAL_OCCASION'] = $_POST['SPECIAL_OCCASION'];

    Bouquets();
    Arrangements();
    Single_Flowers();
    Add_Ons();
    Special_Occasion();
    TOTAL();
}

function Bouquets(): void {
    switch ($_SESSION['BOUQUETS']) {
        case 'Rose Bouquet': 
            $_SESSION['Bouquets-cost'] = 1500; 
            break;
        case 'Tulip Bouquet': 
            $_SESSION['Bouquets-cost'] = 1800; 
            break;
        case 'Sunflower Bouquet': 
            $_SESSION['Bouquets-cost'] = 1200; 
            break;
        case 'Mixed Flower Bouquet': 
            $_SESSION['Bouquets-cost'] = 2000; 
            break;
        case 'Carnation Bouquet': 
            $_SESSION['Bouquets-cost'] = 1300; 
            break;
            
        default: $_SESSION['Bouquets-cost'] = 0;
    }
}

function Arrangements(): void {
    switch ($_SESSION['ARRANGEMENTS']) {
        case 'Vase Arrangement': 
            $_SESSION['Arrangements-cost'] = 1300; 
            break;
        case 'Basket Arrangement': 
            $_SESSION['Arrangements-cost'] = 1000; 
            break;
        case 'Box Arrangement': 
            $_SESSION['Arrangements-cost'] = 4500; 
            break;
        case 'Heart Arrangement': 
            $_SESSION['Arrangements-cost'] = 2500; 
            break;
        case 'Standing Spray': 
            $_SESSION['Arrangements-cost'] = 1600; 
            break;

        default: $_SESSION['Arrangements-cost'] = 0;
    }
}

function Single_Flowers(): void {
    switch ($_SESSION['SINGLE_FLOWERS']) {
        case 'Red Rose': 
            $_SESSION['Single_Flowers-cost'] = 200; 
            break;
        case 'White Rose': 
            $_SESSION['Single_Flowers-cost'] = 200; 
            break;
        case 'Pink Tulip': 
            $_SESSION['Single_Flowers-cost'] = 250; 
            break;
        case 'Sunflower Stem': 
            $_SESSION['Single_Flowers-cost'] = 180; 
            break;
        case 'Lily Stem': 
            $_SESSION['Single_Flowers-cost'] = 220; 
            break;
            
        default: $_SESSION['Single_Flowers-cost'] = 0;
    }
}

function Add_Ons(): void {
    switch ($_SESSION['ADD_ONS']) {
        case 'Greeting Card': 
            $_SESSION['Add_Ons-cost'] = 150; 
            break;
        case 'Chocolates': 
            $_SESSION['Add_Ons-cost'] = 300; 
            break;
        case 'Teddy Bear': 
            $_SESSION['Add_Ons-cost'] = 600; 
            break;
        case 'Balloon': 
            $_SESSION['Add_Ons-cost'] = 200; 
            break;
        case 'Fairy Lights': 
            $_SESSION['Add_Ons-cost'] = 250; 
            break;

        default: $_SESSION['Add_Ons-cost'] = 0;
    }
}

function Special_Occasion(): void {
    switch ($_SESSION['SPECIAL_OCCASION']) {
        case 'Wedding Package': 
            $_SESSION['Special_Occasion-cost'] = 6500; 
            break;
        case 'Birthday Package': 
            $_SESSION['Special_Occasion-cost'] = 3000; 
            break;
        case 'Anniversary Package': 
            $_SESSION['Special_Occasion-cost'] = 3500; 
            break;
        case 'Valentine Package': 
            $_SESSION['Special_Occasion-cost'] = 4000; 
            break;
        case 'Funeral Package': 
            $_SESSION['Special_Occasion-cost'] = 4500; 
            break;

        default: $_SESSION['Special_Occasion-cost'] = 0;
    }
}

function TOTAL() {
    $_SESSION['TOTAL'] =
        ($_SESSION['Bouquets-cost'] ?? 0) +
        ($_SESSION['Arrangements-cost'] ?? 0) +
        ($_SESSION['Single_Flowers-cost'] ?? 0) +
        ($_SESSION['Add_Ons-cost'] ?? 0) +
        ($_SESSION['Special_Occasion-cost'] ?? 0);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Flower Shop</title>
<style>

body {
    background: linear-gradient(135deg, #FCE4EC, #F8BBD0);
    font-family: 'Segoe UI', sans-serif;
    color: #C2185B;
}

.container {
    max-width: 1100px;
    margin: 30px auto;
    padding: 40px;
    background: rgba(255, 255, 255, 0.9);
    border: 1px solid #F48FB1;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(194, 24, 91, 0.15);
}

h1 {
    text-align: center;
    color: #E91E63;
    letter-spacing: 3px;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

thead th {
    background: linear-gradient(180deg, #EC407A, #E91E63);
    padding: 15px;
    color: white;
}

tbody td {
    padding: 12px;
    border: 1px solid #F8BBD0;
}

tr:hover {
    background-color: #FCE4EC;
}

input[type="radio"] {
    accent-color: #E91E63;
}

input[type="submit"] {
    margin-top: 20px;
    padding: 12px 30px;
    background: linear-gradient(135deg, #EC407A, #C2185B);
    border: none;
    border-radius: 8px;
    color: white;
    cursor: pointer;
    font-weight: bold;
    transition: 0.3s ease;
}

input[type="submit"]:hover {
    background: linear-gradient(135deg, #F48FB1, #E91E63);
    transform: scale(1.05);
}

.result input {
    width: 100%;
    margin: 8px 0;
    padding: 10px;
    background: #FFF0F5;
    border: 1px solid #F8BBD0;
    color: #C2185B;
    border-radius: 6px;
}

hr {
    border: 1px solid #F8BBD0;
    margin: 25px 0;
}

.button-container {
    text-align: center;
    width: 100%;
    margin-top: 20px;
}

</style>
</head>
<body>

<div class="container">
<h1>FLOWER SHOP</h1>

<form method="post">
<table>
<thead>
<tr>
<th>Bouquets</th>
<th>Arrangements</th>
<th>Single Flowers</th>
<th>Add-Ons</th>
<th>Special Occasion</th>
</tr>
</thead>
<tbody>

<?php
$BOUQUETS = ['Rose Bouquet','Tulip Bouquet','Sunflower Bouquet','Mixed Flower Bouquet','Carnation Bouquet'];
$ARRANGEMENTS = ['Vase Arrangement','Basket Arrangement','Box Arrangement','Heart Arrangement','Standing Spray'];
$SINGLE_FLOWERS = ['Red Rose','White Rose','Pink Tulip','Sunflower Stem','Lily Stem'];
$ADD_ONS = ['Greeting Card','Chocolates','Teddy Bear','Balloon','Fairy Lights'];
$SPECIAL_OCCASION = ['Wedding Package','Birthday Package','Anniversary Package','Valentine Package','Funeral Package'];

for ($i=0;$i<5;$i++){
echo "<tr>
<td><input type='radio' name='BOUQUETS' value='{$BOUQUETS[$i]}'> {$BOUQUETS[$i]}</td>
<td><input type='radio' name='ARRANGEMENTS' value='{$ARRANGEMENTS[$i]}'> {$ARRANGEMENTS[$i]}</td>
<td><input type='radio' name='SINGLE_FLOWERS' value='{$SINGLE_FLOWERS[$i]}'> {$SINGLE_FLOWERS[$i]}</td>
<td><input type='radio' name='ADD_ONS' value='{$ADD_ONS[$i]}'> {$ADD_ONS[$i]}</td>
<td><input type='radio' name='SPECIAL_OCCASION' value='{$SPECIAL_OCCASION[$i]}'> {$SPECIAL_OCCASION[$i]}</td>
</tr>";
}
?>

</tbody>
</table>

<div class="button-container">
    <input type="submit" name="submit" value="Submit">
</div>
</form>

<hr>

<div class="result">
<input type="text" value="<?= ($_SESSION['BOUQUETS'] ?? '') . ' - ₱' . ($_SESSION['Bouquets-cost'] ?? 0) ?>" disabled>
<input type="text" value="<?= ($_SESSION['ARRANGEMENTS'] ?? '') . ' - ₱' . ($_SESSION['Arrangements-cost'] ?? 0) ?>" disabled>
<input type="text" value="<?= ($_SESSION['SINGLE_FLOWERS'] ?? '') . ' - ₱' . ($_SESSION['Single_Flowers-cost'] ?? 0) ?>" disabled>
<input type="text" value="<?= ($_SESSION['ADD_ONS'] ?? '') . ' - ₱' . ($_SESSION['Add_Ons-cost'] ?? 0) ?>" disabled>
<input type="text" value="<?= ($_SESSION['SPECIAL_OCCASION'] ?? '') . ' - ₱' . ($_SESSION['Special_Occasion-cost'] ?? 0) ?>" disabled>

<hr>
<input type="text" value="TOTAL: ₱<?= $_SESSION['TOTAL'] ?? 0 ?>" disabled>
</div>

</div>

</body>
</html>