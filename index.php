<?Php
$distance = rand(0,300);
$fuel_cons = 7.5; // Kiek litru sunaudojama 100 km.
$fuel_price = 1.3;//Litro kaina
$my_money = 100; //Kiek turime pinigu
$sunaudos = $fuel_cons/100*$distance; //Kiek llitru reikia kelioneje
$kaina =$sunaudos*$fuel_price;


print "nuvaziavus $distance km,masina sunaudos $sunaudos l. visa tai kainuos $kaina ";

?>
