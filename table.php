    <?php  
    $host = 'localhost:3306';  
    $user = 'root';  
    $pass = '';  
    $dbname = 'php_sql';  
      
    $conn = mysqli_connect($host, $user, $pass,$dbname);  
    if(!$conn){  
      die('Could not connect: '.mysqli_connect_error());  
    }  
    echo 'Connected successfully<br/>';  
      
    $sql = "create table employee(id INT AUTO_INCREMENT,name VARCHAR(20) NOT NULL,  
    emp_salary INT NOT NULL,primary key (id))";  
    if(mysqli_query($conn, $sql)){  
     echo "Table employee created successfully";  
    }else{  
    echo "Could not create table: ". mysqli_error($conn);  
    }  
      
    mysqli_close($conn);  
    ?>  
