<?php #Scrip 3.4- index.php
//Funcion que da por culo creando un ad
function create_ad(){
    echo '<p class="ad">Esto es un ad de los cojones!Esto es un ad de los cojones!Esto es un ad de los cojones!</p>';
}
$page_title= 'Bienvenido a este Site!';
include('header.html');
create_ad();
?>

<h1>Content Header</h1>
<p>This is where the page-specific content goes. Thissection, and the corresponding header, will change from one page to the next.</p>
<p>Volutpat at varius sed sollicitudin et, arcu. Vivamus viverra. Nullam turpis.
Vestibulum sed etiam. Lorem ipsum sit amet dolore. Nulla facilisi. Sed tortor. Aenean felis.
Quisque eros. Cras lobortis commodo metus. Vestibulum vel purus. In eget odio in sapien
adipiscing blandit. Quisque augue tortor, facilisis sit amet, aliquam, suscipit vitae, cursus
sed, arcu lorem ipsum dolor sit amet.</p>
<?php
create_ad();
include ('footer.html');
?>