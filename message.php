<?php
//connecting to database
$conn = mysql_connect("localhost", "root", "", "bot") or die("Database Error");
//getting user message through ajax
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);

//checkig user query to database query
$check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
$run_query = mysqli_query($conn, $check_data) or die("Error");
// if user query matched to database query w'll show the reply otherwise it go to else statement
if(mysqli_run_rows($run_query)>0){
    $fetch_data = mysqli_fetch_assoc($run_query);
    $replay = $fetch_data['replies'];
    echo $replay;
}else{
    echo "sorry con't be able to understand you1 ";
}
?>