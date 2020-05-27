<?php
session_start();
if(!empty($_POST['email']) && !empty($_POST['password'])){
    require_once './connect.php';
    if($conn->connect_errno !=0){
        $_SESSION['error']='Błędne połączenie z bazą danych!';
        header('location: ../');
        exit();
    }

    $email=htmlentities($_POST['email'],ENT_QUOTES,"UTF-8");
    $pass=htmlentities($_POST['password'],ENT_QUOTES,"UTF-8");

    $sql=sprintf("SELECT * FROM user WHERE email='%s'",
         mysqli_real_escape_string($conn,$email));
    if($result=$conn->query($sql)){
        $count=$result->num_rows;
        if($count==1){
            //pobieramy hasło z bazy danych
            $user = $result->fetch_assoc();
            $passdb = $user['password'];
           //echo $passdb;
        //echo 'ok';

            //porównujemy hasła 
            if(password_verify($pass, $passdb)){
              //prawidłowy login i hasło
           
                if($user['status_id'] == 1)
            {
                $_SESSION['logged']['permission'] = $user['permission_id']; 
                $_SESSION['logged']['name'] = $user['name']; 
                $_SESSION['logged']['surname'] = $user['surname']; 
                $_SESSION['logged']['email'] = $user['email']; 
                $conn->close();

                switch($_SESSION['logged']['permission']){
                    case '1':
                        //admin
                        header('location: ../pages/logged/admin.php');
                    break;
                    case '2':
                        //user
                        header('location: ../pages/logged/user.php');
                    break;
                    case '3':
                        //moderator
                        header('location: ../pages/logged/moderator.php');
                    break;
                }
                   
            }else{
                $_SESSION['error']='Skontaktuj się z administratorem w celu odblokowania konta lub 
                aktywuj konto na poczcie email!';
                header('location: ../');   
            }


            }else{
                $_SESSION['error']='Podany login lub hasło są błędne!';
                header('location: ../');  
            }


        }else{
        $_SESSION['error']='Podany login lub hasło są błędne!';
        header('location: ../');  
        }
    }
}else{
    $_SESSION['error']='Wypełnij wszystkie dane!';
    header('location: ../');
}
?>