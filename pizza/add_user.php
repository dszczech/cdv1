

<?php 

  session_start();
  require_once 'connect.php';
  $error=0;
  if(empty($_POST['name'])){
    $error=1;
    $_SESSION['error_name'] = 'Podaj imie!';
  } 
  if(empty($_POST['surname'])){ 
    $error=1;
    $_SESSION['error_surname'] = 'Podaj nazwisko!';
  }
  if(empty($_POST['email'])){
    $error=1;
    $_SESSION['error_email'] = 'Podaj email!';
  }
  if(empty($_POST['password'])){
    $error=1;
    $_SESSION['error_password'] = 'Podaj hasło!';
  }
  if(!isset($_POST['terms'])){
    $error=1;
    $_SESSION['error_terms'] = 'Zaakceptuj regulamin!';
  }
  if ($error==0) {
  

    
    
    if($conn->connect_errno){
      $_SESSION['error'] = 'Błędne połączenie z bazą danych';
      header('location: register.php');
    }else{
      // prawidłowe połączenie z bazą danych i wypełnione prawidłowo wszystkie pola w formularzu

      $name=$_POST['name'];
      $surname=$_POST['surname'];
      $email=$_POST['email'];
      $password=$_POST['password'];
      $password = password_hash($password, PASSWORD_ARGON2ID);
      $city = $_POST['city'];

    

     
      $sql = "INSERT INTO `user`(`name`, `surname`,`email`,`city_id`,`password`) VALUES (?, ?, ?, ?, ?)";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("sssis", $name, $surname,$email ,$city, $password);  

    if($stmt->execute()){
      header('location: index.php?register=succesion');
      exit();
      }else{  
        //sprawdzenie czy istnieje email w bazie danych

         $sql = "SELECT * FROM user WHERE email = ?";
         $stmt = $conn->prepare($sql);
         $stmt->bind_param("s", $email);
         $stmt->execute();
         $result = $stmt->get_result();
         $x = $result->fetch_assoc();
        //  echo $x['id'];
         if($conn->affected_rows == 1){
          $_SESSION['error_email'] = 'Podany adres email istnieje';
         }else{
           $_SESSION['error'] = 'Błąd w zapytaniu sql';
         }
         header('location: register.php');
         exit();

         ?>
          <script>
            window.history.back();
          </script>
         <?php
      }

    }

  }else{
    
   
    ?>
      <script>
        window.history.back();
      </script>
    <?php
  }
?>