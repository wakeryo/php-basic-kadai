<?php
  $vegetables_data =['名前' => '玉ねぎ','値段' => 200,'産地' =>'北海道'];
  foreach ($vegetables_data as $vegetable_data => $value) {
    echo $vegetable_data." : ".$value."<br>";
  }
  $names_data =['id' => 1,'名前'=> '侍太郎','年齢' =>30];
  foreach ($names_data as $name_data => $value) {
    echo $name_data." : ".$value."<br>";
  }
  ?>