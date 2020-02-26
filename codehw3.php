<!DOCTYPE html>

<html>
<body>
  <style>
body {
  background-color: lightyellow;
}
</style>
​
<h1>CODE HW 3</h1>

</body>
</html>
<?php


$books = array(
        array("PHP and MySQL Web Development","Luke Welling",144,"Paperback", "$31.63"), 
        array("Web Design with HTML, CSS, JavaScript and jQuery","Jon Duckett", 135, "Paperback", "$41.23"),
        array("PHP Cookbook: Solutions & Examples for PHP Programmers","David Sklar",14,"Paperback","22.09"),
        array("JavaScript and JQuery: Interactive Front-End Web Development","Jon Duckett", 251, "Paperback", "$22.09"),
        array("Modern PHP: New Features and Good Practices","Josh Lockhart",7,"Paperback","28.49"),
        array("MProgramming PHP","Kevin Tatroe",26,"Paperback","28.96"),

);

#print_r($books);

echo '<table border="8">';
echo '<tr><th>Title</th><th>First Name</th><th>Last Name</th><th>Number of pages</th><th>Type</th><th>Price</th></tr>';
foreach ($books as $bookData) {
	  #$totalPrice = $totalPrice + key(array $bookData[4];
    #print($bookData[4]);
    #$abc = $bookData[4];
    #print($abc);
    #$totalPrice = $totalPrice + substr($abc,1,15);
   #$title = $bookData[0];
    #echo($title);
    #$t1 = urlencode(($title));
    #$bookData[0] = "https://www.google.com/search?q=".$t1; 
    #$bookData[0] = '<a href="https://www.google.com/search?q=', urlencode($title), '">';
    echo('<tr>');
    echo('<tr>');
    echo('<td>');
    echo implode('</td><td>', $bookData);
    echo('</td>');
    echo('</tr>');
    #print($bookData);
}
echo '</table>';

?>

<?php
// Your code here!
//<?php
function flipcoin () {

        return mt_rand(0,1);

}

$number = 3;
$ftoss = null;
$stoss = null;
$htoss = null;

while($htoss < $number){
    $stoss = flipcoin(); 
    if($stoss == 0){
        $htoss = 0;
    }
    else{
        $htoss = $htoss + 1;
    }

    echo ($stoss ? '<img src="heads.png" style="width:70px;height:70px"/>' : '<img src="tails.png" style="width:70px;height:70px"/>') , "\n";

}


?>
