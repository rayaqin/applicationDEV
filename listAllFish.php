<?php

 

/*

 * Following code will list all the products

 */

 

// array for JSON response

$response = array();



$con = mysqli_connect("localhost","id1680828_testfishapp","qayxcv1590","id1680828_fishapp");



if (!$con) {

    die("Connection failed: " . mysqli_connect_error());

}
$sql = "Select Fishes.FishID,Fishes.FishName,Fishes.FishRegion,Fishes.FishAvailability,Recipes.RecipeName,Recipes.RecipeText,Pictures.FilePath from Fishes INNER JOIN Recipes ON Fishes.FishID=Recipes.FishID INNER JOIN Pictures ON Fishes.PictureID=Pictures.ID";

 

// get all products from products table

$result = mysqli_query($con,$sql);

 

// check for empty result

if (mysqli_num_rows($result) > 0) {

    // looping through all results

    // products node

    $response["fishes"] = array();

 

    while ($row = mysqli_fetch_array($result)) {

        // temp user array

        $fish = array();

        $fish["FishID"] = $row["FishID"];

        $fish["FishName"] = $row["FishName"];

        $fish["FishRegion"] = $row["FishRegion"];

        $fish["FishAvailability"] = $row["FishAvailability"];

	$fish["RecipeName"]=$row["RecipeName"];

	$fish["RecipeText"]=$row["RecipeText"];

	$fish["FilePath"]=$row["FilePath"];
 

        // push single product into final response array

        array_push($response["fishes"], $fish);

    }

    // success

    $response["success"] = 1;

 

    // echoing JSON response

    echo json_encode($response);

} else {

    // no products found

    $response["success"] = 0;

    $response["message"] = "No products found";

 

    // echo no users JSON

    echo json_encode($response);

}

mysqli_close($con);

?>