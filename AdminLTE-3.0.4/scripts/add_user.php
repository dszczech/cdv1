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
    //dokończyć połączenie z bazą danych
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