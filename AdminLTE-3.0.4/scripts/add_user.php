<?php 
  session_start();
  if (!empty($_POST['name']) && !empty($_POST['surname'])  && !empty($_POST['email1'])  && !empty($_POST['email2'])  && !empty($_POST['pass1'])  && !empty($_POST['pass2'])  && !empty($_POST['birthday'])) {
    $error=0;
    if (!isset($_POST['terms'])) {
      $_SESSION['error'] = 'Zaznacz zgodę na warunki w regulaminie!';
      $error=1;
    }

    if ($_POST['email1'] != $_POST['email2']) {
      $_SESSION['error'] = 'Adresy email są różne!';
      $error=1;
    }

    if ($_POST['pass1'] != $_POST['pass2']) {
      $_SESSION['error'] = 'Hasła są różne!';
      $error=1;
    }

    if ($error==1) {
      ?>
        <script>
          window.history.back();
        </script>
      <?php
    }

    require_once '../scripts/connect.php';
    
    if ($conn->connect_errno){
        $_SESSION['error'] = 'Błędne połączenie z bazą danych!';
        header('location: ../pages/register.php');
    }
    else{
      //prawidłowe połączenie z bazą danych i wypełnione prawidłowo wszystkie pola w formularzu
      
     
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email1'];
    $password = $_POST['pass1'];
    $password = password_hash($password, PASSWORD_ARGON2ID);
    $birthday = $_POST['birthday'];

    $city = $_POST['city'];
    $nationality = 1;

     
    $sql = "INSERT INTO `user`(`name`, `surname`,`city_id`,`nationality_id`, `email`, `password`) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssiiss", $name, $surname, $city, $nationality, $email, $password);    

    if($stmt->execute()){
      header('location: ../index.php?register=success');
      exit();
    }
    else
    {
      $sql = "SELECT * FROM user WHERE email = ?";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("s", $email);
      $stmt->execute();
      $result = $stmt->get_result();
      $x = $result->fetch_assoc();
      
      if($conn->affected_rows == 1){
        $_SESSION['error'] = 'Podany adres email istnieje!';``
      }else{
        $_SESSION['error'] = 'Błąd w zapytaniu sql!';
      }
     header('location: ../pages/register.php');
      exit();
    }
    }
    //echo $conn->affected_rows;

      
    


    
  }else{
    $_SESSION['error'] = 'Wypełnij wszystkie pola!';
    //header('location: ../pages/register.php');
    ?>
      <script>
        window.history.back();
      </script>
    <?php
  }
?>