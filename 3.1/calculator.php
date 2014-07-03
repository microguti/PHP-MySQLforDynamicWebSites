<?php #Script 3.5 - calculator.php
$page_title='Calculador de Coste de Viajes';
include('header.html');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['distance'], $_POST['gallon_price'], $_POST['efficiency']) &&
            is_numeric($_POST['distance']) && is_numeric($_POST['gallon_price']) && is_numeric($_POST['efficiency'])
            ){
        $gallons = $_POST['distance']/$_POST['efficiency'];
        $dollars = $gallons * $_POST['gallon_price'];
        $hours = $_POST['distance']/65;
        echo '<h1>Coste Total Estimado </h1> '
        . '<p>El coste total del viajar '.$_POST['distance']. ' miles, averaging '.$_POST['efficiency']
                . ' millas por galon, y pagando una media de $'. $_POST['gallon_price'].' por galon, son $'.number_format($dollars, 2).
                '. Si viajas una media de 65 millas por hora, el viaje te llevara '.number_format($hours, 2).' horas.</p>';
        }else {
    echo '<h1>Error!</h1> <p class="error">Por favor introudce los valores correctors.</p>';
}

}
?>
<h1>Trip Cost Calculator</h1>
<form action="calculator.php" method="post">
    <p>Distancia (en millas): 
        <input type="text" name="distance" value="<?php if (isset($_POST['distance'])) echo $_POST['distance'];?>">
    </p>
    <p>Media de Precio por Galon: 
        <span class='input'>
            <input type="radio" name='gallon_price' value="3.00" 
                    <?php if (isset($_POST['gallon_price']) && ($_POST['gallon_price']=='3.00')) echo 'checked="checked"';?>>3.00
            <input type="radio" name='gallon_price' value="3.50"
                   <?php if (isset($_POST['gallon_price']) && ($_POST['gallon_price']=='3.50')) echo 'checked="checked"';?>>3.50
            <input type="radio" name='gallon_price' value="4.00"
                   <?php if (isset($_POST['gallon_price']) && ($_POST['gallon_price']=='4.00')) echo 'checked="checked"';?>>4.00
        </span>
    </p>
    <p>Fuel Efficiency:
        <select name="efficiency">
            <option value="10"
                    <?php if (isset($_POST['efficiency']) && ($_POST['efficiency']=='10')) echo 'selected="selected"';?>>Terrible</option>
            <option value="20"
                    <?php if (isset($_POST['efficiency']) && ($_POST['efficiency']=='20')) echo 'selected="selected"';?>>Decent</option>
            <option value="30"
                    <?php if (isset($_POST['efficiency']) && ($_POST['efficiency']=='30')) echo 'selected="selected"';?>>Very Good</option>
            <option value="50"
                    <?php if (isset($_POST['efficiency']) && ($_POST['efficiency']=='50')) echo 'selected="selected"';?>>Outstanding</option>
        </select></p>
        <p><input type="submit" name="submit" value="Calcula!"></p>
            
</form>
<?php include('footer.html');?>