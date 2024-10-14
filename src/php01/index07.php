<?php
$people = [
    ['Taro', 25,'men'],
    ['Jiro', 20, 'men'],
    ['hanako',16, 'women'],
];
foreach($people as $name){
    echo $name[0]. '('.$name[1].'歳'. $name[2]. ')';
    echo'<br />';

}