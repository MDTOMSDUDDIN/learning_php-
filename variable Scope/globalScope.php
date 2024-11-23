<?PHP
$name="tomas";

function greats(){
    global $name;
    echo "This is $name";
}

greats();
echo "<br>";
echo "hello mr. $name";