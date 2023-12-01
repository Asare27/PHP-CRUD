<?php
include 'connect.php';

if(isset($_POST['input'])){
    $input = $_POST['input'];

    $querry = "SELECT * FROM crud WHERE name LIKE '{$input}%' OR email LIKE '{$input}%' OR mobile LIKE '{$input}%' OR place LIKE '{$input}%'";

    $result = mysqli_query($conn,$querry);

    if(mysqli_num_rows($result) > 0){
        $table = '<table class="table">
    <thead class="table-dark">
        <tr>
            <th scope="col">SI no</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Place</th>
            <th scope="col">Operations</th>
        </tr>
   </thead> ';
   $sql = "SELECT * from crud";
   $result = mysqli_query($conn,$sql);
   $number =1;
   while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $place = $row['place'];
        $table.='<tr>
            <td scope="row">'.$number.'</td>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$place.'</td>
            <td>
            <button class="btn btn-dark" onclick="GetDetails('.$id.')">Update</button>
            <button class="btn btn-danger" onclick="DeleteUser('.$id.')">Delete</button>
            </td>
        </tr>';
        $number ++;
   } 
    $table.='</table>';
    echo $table;
      
    }else{
        echo "<h6 class='text-danger text-center mt-3'>No data found</h6>";
    }

}

?>