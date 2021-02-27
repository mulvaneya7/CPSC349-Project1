<?php
 $db = mysqli_connect("mariadb","cs431s15","ahShut3I","cs431s15");
 if(mysqli_connect_errno()) {

    echo"<p>Error: Could not connect to database.<br/>
    Please try again later.</p>";
    exit;
}
// //cURL is a library that lets you make HTTP requests in PHP.
// //1)Create cURL resource
// $curl = curl_init();
// //2)Set cURL options
// curl_setopt($curl,CURLOPT_URL,'http://www.google.com' );
// //3) Run cURL(exectue http request)
// curl_exec($curl);
// //4)Close cURL resource
// curl_close($curl);

//https://www.foodnetwork.com/recipes/packages/comfort-foods/easy-comfort-food-recipes/easy-comfort-food-recipes
$curl = curl_init();//$curl is going to be data type curl resource 
$search_string = "american";
$url = "https://www.allrecipes.com/search/results/?wt=$search_string&sort=re";
$recipe = array();
curl_setopt($curl,CURLOPT_URL,$url);
//curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
$result = curl_exec($curl);
//image
preg_match_all('!https://images.media-allrecipes.com/userphotos/300x300/[^\s]*g!',$result,$matches);
//print_r($matches[0]);
$recipe['image'] = array_values(array_unique($matches[0],SORT_REGULAR));
preg_match_all('!<span class="fixed-recipe-card__title-link">(.*?)<\/span>!',$result,$matches);

$recipe['title'] = $matches[0];
preg_match_all('!<span class="fixed-recipe-card__title-link">(.*?)<\/span>!',$result,$matches);

preg_match_all('!<div data-ellipsis class="fixed-recipe-card__description" ng-cloak>(.*?)<\/div>!',$result,$matches);

$recipe['content'] = $matches[0];

curl_close($curl);
for($i =0; $i < count($matches[0]); $i++){
   
    if(preg_match('!>(.*?)<!',$recipe['title'][$i],$test2)){
        $recipe['title'][$i] = $test2[1];
      
    }
}
for($i =0; $i < count($matches[0]); $i++){
   
    if(preg_match('!>(.*?)<!',$recipe['content'][$i],$test2)){
        $recipe['content'][$i] = $test2[1];
      
    }
}

if(is_array($recipe)){
        for($i=0; $i< count($matches[0]); $i++){
            $imageNameNew = $recipe['image'][$i];
            $title = $recipe['title'][$i];
            $content = $recipe['content'][$i];
            echo $imageNameNew. '<br/>';
            echo '<div>'.$title. '</div>';
            echo $content. '<br/>';

            $sql = "INSERT INTO recipe_cards (image, title, recipe_text) VALUES ('$imageNameNew', '$title', '$content')";
            mysqli_query($db, $sql);
            //mysqli_query($db, $sql);
        }

}

?>