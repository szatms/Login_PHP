<?php
    include("connection.php");
    include("read.php");

    if (isset($_POST["submit"])) {
        $inputUsername = $_POST['username'];
        $inputPassword = $_POST['password'];

        if (in_array($inputUsername, $usernames) && in_array($inputPassword, $passwords)) {
            for ($i = 0; $i < count($usernames); $i++) {
                if ($inputUsername == $usernames[$i] && $inputPassword == $passwords[$i]) {
                    $sql = "SELECT titkos FROM tabla WHERE Username = '$inputUsername';";
                    $result = $con->query($sql);

                    if ($result && $result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $color = $row['titkos'];

                        switch ($color) {
                            case 'feher':
                                echo '<style>body { background-color: white; }</style>';
                                break;
                            case 'fekete':
                                echo '<style>body { background-color: black; }</style>';
                                break;
                            case 'piros':
                                echo '<style>body { background-color: red; }</style>';
                                break;
                            case 'zold':
                                echo '<style>body { background-color: green; }</style>';
                                break;
                            case 'sarga':
                                echo '<style>body { background-color: yellow; }</style>';
                                break;
                            case 'kek':
                                echo '<style>body { background-color: blue; }</style>';
                                break;
                        }
                    }
                }
            }
        } else if (!in_array($inputUsername, $usernames)) {
            echo "<h1 style='text-align: center; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);'>Helytelen felhasználónév!</h1>";
        } else if (!in_array($inputPassword, $passwords)) {
            echo "<h1>ROSSZ JELSZÓ!</h1>";
            echo "<p>RENDŐRSÉG!!</p>";
            echo "<script>setTimeout(function(){ window.location.href = 'https://www.police.hu'; }, 3000);</script>";
        }
    }

    $con->close();
?>
