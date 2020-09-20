<?php
    function getAllUsers($conn) {
        $query = "SELECT * FROM users ORDER BY userName ASC";
        $result = mysqli_query($conn, $query) or die("Query failed: $query");
        return $result;
    }
    function getUserData($conn, $userId) {
        $query = "SELECT * FROM users
                WHERE userId=".$userId;
        $result = mysqli_query($conn, $query) or die("Query failed: $query");

        $row = mysqli_fetch_assoc($result);

        return $row;
    }

    function getAllBostader($conn) {
        $query = "SELECT * FROM bostader ORDER BY bostadId ASC";
        $result = mysqli_query($conn, $query) or die("Query failed: $query");
        return $result;
        
    }

    function getBostaderFromUser($conn) {
        $userid = $_SESSION['userid'];
        $query = "SELECT * FROM bostader
        WHERE bostadUserId=".$userid;

        $result = mysqli_query($conn, $query) or die("Query failed: $query");

        return $result;

    }
    function getBostadData($conn, $bostadId) {
        $query = "SELECT * FROM bostader
                WHERE bostadId=".$bostadId;
        $result = mysqli_query($conn, $query) or die("Query failed: $query");

        $row = mysqli_fetch_assoc($result);

        return $row;
    }
    function registerUser($conn) {
        $name = escapeInsert($conn,$_POST['name']);
        $email = escapeInsert($conn,$_POST['email']);
        $password = escapeInsert($conn,$_POST['psw']);
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    
        $query = "INSERT INTO users
                (userName,userEmail,userPassword)
                VALUES('$name','$email','$passwordHash')";
    
        $result = mysqli_query($conn,$query) or die("Query failed: $query");
    
        $insId = mysqli_insert_id($conn);
        return $insId;
    }

    function escapeInsert($conn, $insert) {
        $insert = htmlspecialchars($insert);
    
        $insert = mysqli_real_escape_string($conn, $insert);
    
        return $insert;
    }
    function publiceraBostad($conn) {
        $gata = escapeInsert($conn,$_POST['gata']);
        $omrade = escapeInsert($conn,$_POST['omrade']);
        $kvm = escapeInsert($conn,$_POST['KVM']);
        $pris = escapeInsert($conn,$_POST['pris']);
        $beskr = escapeInsert($conn,$_POST['beskr']);
        $checkRok = $_POST['rok'];
        $chkrok=""; 
        $checkTyp = $_POST['typ'];
        $chktyp = "";

        foreach($checkRok as $rok) {
            $chkrok .= $rok . ",";
        }

        foreach($checkTyp as $typ) {
            $chktyp .= $typ . ",";
        }
        
        $userid = $_SESSION["userid"];

        $query = "INSERT INTO bostader
                (bostadAdress, bostadOmrade, bostadKvm, bostadPris, bostadUserId, bostadRok, bostadKategoriId, bostadBeskrivn)
                VALUES('$gata', '$omrade', '$kvm', '$pris', $userid, $rok, $typ, '$beskr')";
        $result = mysqli_query($conn, $query) or die("Query failed: $query");

        $insId = mysqli_insert_id($conn);

        return $insId;
    }
    function updateBostad($conn) {
        $pris = escapeInsert($conn, $_POST['pris']);
        $beskr = escapeInsert($conn, $_POST['beskr']);
        $editid = $_POST['updateid'];

        $query = "UPDATE bostader
                SET bostadPris='$pris', bostadBeskrivn='$beskr'
                WHERE bostadId=" . $editid;
                
        $result = mysqli_query($conn, $query) or die("Query failed: $query");
    } 
    function deleteBostad($conn, $bostadId) {
        $query = "DELETE FROM bostader WHERE bostadId=". $bostadId;
        $result = mysqli_query($conn,$query) or die("Query failed: $query");
    }
    
?>