<?php
//Napisz program który oblicze pole prostokątu, użytkownik podaję dane z klawiatury w formularzu
//1) Definicja klasy
//2) Strona z formularzem
//3) Dolączenia definicji klasy do strony ze skryptem
//4) wyświetlenia rezultatu

?>

<form method="post" action="script.php">
    <input type="text" placeholder="Podaj strone A" name="sideA"><br>
    <input type="text" placeholder="Podaj strone B" name="sideB"><br>
    <input type="submit" value="Zatwierdż">
</form>

<?php
if(isset($_GET['result'])){
    echo 'Resultat: ' . $_GET['result'];
}
?>
