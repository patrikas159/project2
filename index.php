<?php

//$data = [
   // 'komp1' =>'items1',
   // 'komp2' =>'item2',
   // 'komp3' =>'item3',
   // 'komp4' =>'item4',
   // 'komp5' =>'item5'
//];

//==================================
//for($i=0;$i<count($data);$i++){
  //  if($data[$i]=="item2"){
     //   echo "elementas surastas";
     //   break;
       // continue;
   // }
 // echo"$data[$i]<br>";
//}
//================================
//for($i=0;$i<count($data);$i++){
  //echo"$data[$i]<br>";
//}

//$i=0;
//==============================

//while($i<count($data)){
   // echo "$data[$i]<br>";
   // $i++;
//}

//==================================

//do{
   // echo"$data[$i]<br>";
   // $i++;
//}while($i<count($data));


//foreach($data as $key => $item){
 //   echo "$key : $item <br>";
//}

$data = [
    'studentai:',
    '1c:',
    '1pogrupis:',
    'Petras',
    'Jonas',
    'Ieva',
    '2c:',
    '2pogrupis',
    'Karolis',
    'Tomas',
    'Simas'
];
$i =0;

do{
   echo"$data[$i]<br>";
   $i++;
}while($i<count($data));
