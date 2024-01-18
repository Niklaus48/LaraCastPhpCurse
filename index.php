<?php

$Persons = [
  [
      'name' => 'amin',
      'family' => 'alipoor',
      'age' => 20
  ],
  [
      'name' => 'negin',
      'family' => 'baziar',
      'age' => 19
  ],
  [
      'name' => 'mahseyn',
      'family' => 'azarpara',
      'age' => 20
  ],
];

 function Filter($items,$function):array{
     $filteredItems = [];

     foreach ($items as $item){
         if ($function($item)){
             $filteredItems[] = $item;
         }
     }
     return $filteredItems;
 }


 $filteredPerson = Filter($Persons, function($person) {
     return $person['age'] === 19;
 });

 //or we can use this function that php provide us and it will do a filter on a given array with a spcific function

// $filteredPerson = array_filter($Persons, function($person) {
//    return $person['age'] === 19;
//});

//by this we dont need our Filter function cuase array_filter do its job for us

?>

<ul>
    <?php foreach ($filteredPerson as $item) :  ?>
    <li>
        <a href="#">
            <?= $item['name'] ?>
        </a>
    </li>
    <?php endforeach; ?>
</ul>
