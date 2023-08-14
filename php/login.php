<?php
    include_once('dengru.html');
     $dbConn = mysqli_connect ( "localhost","root","","book_house" );
     if ($dbConn->connect_error) {
        die("connect fault: " . $dbConn->connect_error);
        }
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        // $search_escape = mysqli_real_escape_string($dbConn, $_POST['muname']);



        // $q1="SELECT * FROM product,manufacturer WHERE product.Manufacturer = manufacturer.id and manufacturer.name like '%{$search_escape}%'  ";
        
        // /*print("$search_escape");*/
    //     $sql = "INSERT INTO search_log (Search_Word	) VALUES ('$search_escape')";

    //     if ($dbConn->query($sql) === TRUE) {
    //         echo "RECORD INSERT SUCCESSFULLY";
    //         } else {
    //         echo "Error: " . $sql . "<br>" . $conn->error;
    //         }


            

    //     $query = mysqli_query($dbConn, $q1);
    //     if (mysqli_num_rows($query) > 0){

        
    //         print("<table width='1000' border='1' height='100' align='center'>");
    //         print("<tr>
    //             <th>product_id</th>
    //             <th>product_name</th>
    //             <th>product_price</th>
    //         </tr>");

    //         while ($row = mysqli_fetch_array($query)) {
    //             print("<tr>");
    //             print("<td>".$row[0]."</td>");
    //             print("<td>".$row[1]."</td>");
    //             print("<td>".$row[3]."</td>");
    //             print("</tr>");       
    //             }
    //         print("</table");
    //         }
    //         else{
    //             print("<h3 align = center>");
    //             echo "0 results";
    //             print("</h3>");
    //         }
    
    

    // }
        $username = $_POST['username'];//获取login.php中提交的用户名
	    $password = $_POST['pwd'];//获取login.php中提交的密码
	


	
	    mysqli_select_db($con,"login");//在所有的数据库中选择叫 login 的数据库
	    $result = mysqli_query($con,"select * from normal_user where username = '$username' and password ='$password'") or die("Failed to query database ".mysql_error());
	    //在 login 数据库下的 user 表单下查询所有的用户名和密码，否则die，报错 
	    $row = mysqli_fetch_array($result);//值传给数组
	    if($row['username']===$username && $row['password'] ===$password){
		    // echo "login success!!! Welcome ".$row['username'];
            header(“location:index1.html”);
            
		//如果有用户名和密码匹配，则echo
	    }else{
		    echo "Failed to login!";
	    }




?>