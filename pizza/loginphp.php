<?php


session_start();






if (!empty($_POST['email']) && !empty($_POST['password'])) {
    require_once 'connect.php';
    if ($conn->connect_errno != 0) {
      $_SESSION['error'] = 'Błędne połączenie z bazą danych!';
      header('location: login.php');
      exit();
    }

    $email = htmlentities($_POST['email'], ENT_QUOTES, "UTF-8");
    $pass = htmlentities($_POST['password'], ENT_QUOTES, "UTF-8");

    $sql = sprintf("SELECT * FROM user WHERE email='%s'", 
           mysqli_real_escape_string($conn, $email));

    if ($result = $conn->query($sql)){
      $count = $result->num_rows;
      if ($count == 1) {
        // pobieramy hasło z bazy danych
        $user = $result->fetch_assoc();
        $passdb = $user['password'];
         //echo $pass;
        
        // porównujemy hasła  
        if (password_verify($pass, $passdb)) {
            header('location: index.php');
            $_SESSION['logged']['name'] = $user['name'];
            $_SESSION['logged']['surname'] = $user['surname'];
            $_SESSION['logged']['email'] = $user['email'];
            $conn->close();
          

        }else{
          $_SESSION['error'] = 'Błędny login lub hasło!';
          
          header('location: login.php');
        }

      }else{
        $_SESSION['error'] = 'Błędny login lub hasło!';
        header('location: login.php');
      }
    }
    
  }else{
    $_SESSION['error'] = 'Wypełnij wszystkie dane!';
    header('location: login.php');
  
  }

?>