

<?php
//propuesta 1
for ($i=0; $i < 101; $i++) { 
    echo $i."-";
};

echo "<br/>";

//propuesta 2
for ($i=100; $i >= 0; $i--) { 
    echo $i."-";
};

echo "<br/>";

//propuesta 3
for ($i=0; $i <= 100; $i++) {

    if(($i % 2)==0){
        echo $i."-";
    }
};
echo "<br/>";
//propuesta 4

for ($i=0; $i <= 100; $i++) {

    if(($i % 2)==0){
        
    }else{
        echo $i."-";
    };
};

echo "<br/>";

//propuesta 5

for ($i=1; $i <= 20; $i++) {
    $suma = $i + $i;
    echo $suma;
};

//propuesta 6
echo "<br/>";

for ($i=1; $i <= 20; $i++) {

    if(($i % 2) == 0 && $i < 20){
        $suma = $i + $i;
        echo $suma;
    };
};
?>