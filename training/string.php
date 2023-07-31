<?php
// Variable (start with CH or _)
$name1 = "Ali";
echo 'hello $name1';
echo "hello $name1";
echo "Sujoud";

echo "<br>";

echo 'Hello
Sujoud
Mohammad
';
echo "<br>";

echo nl2br('Hello
Sujoud
Mohammad
');
echo "<br>";
//Escaping \
echo 'love \'php\' ';
echo "<br>";

// Heredoc & Nowdoc
$name = "Sara";
echo <<< "Here"
Hello 
Ali $$$ "" '' \\\\
my name is $name
Here; 

echo "<br>";

$name2 = "Mera";
echo <<< 'Now'
Hello 
Ali $$$ "" '' \\\\
my name is $name2
Now; 

echo "<br>";

// echo "<li>".$name."</li>";
echo <<<"namelist"
<ul>
<li>$name</li> 
<li>$name2</li>
</ul>
namelist;

