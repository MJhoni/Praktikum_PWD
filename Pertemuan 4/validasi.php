<html>
    <head>
        <style>
            .error{color:#FF0000;}
        </style>
    </head>

    <body>
    <?php
        //define variables and set to empty values
        $namaErr = $emailErr = $genderErr = $websiteErr = "";
        $nama = $email = $gender = $comment = $website = "";

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["nama"])){
                $namaErr="Nama harus diisi";
            }else{
                $nama=test_input($_POST["nama"]);
            }

            if(empty($_POST["email"])){
                $emailErr = "Email harus diisi";
            }else{
                $email=test_input($_POST["email"]);
            
                //check if e-mail address is well-formed
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    $emailErr="Email tidak sesuai format";
                }
            }

            if(empty($_POST["website"])){
                $websiteErr ="Website harus diisi";
            }else{
                $website=test_input($_POST["website"]);
            }

            if(empty($_POST["comment"])){
                $comment ="";
            }else{
                $comment=test_input($_POST["comment"]);
            }

            if(empty($_POST["gender"])){
                $genderErr="Gender harus dipilih";
            }else{
                $gender=test_input($_POST["gender"]);
            }
        }

        function test_input($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }
    ?>    

    <h2>Posting Komentar</h2>
    <p><span class="error">*Harus Diisi</span></p>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <table border="1">
            <tr>
                <td>Nama : </td>
                <td><input type="text" name="nama">
                <span class="error">*<?php echo $namaErr;?></span>
                </td>
            </tr>

            <tr>
                <td>E-mail :</td>
                <td><input type="text" name="email">
                <span class="error">*<?php echo $emailErr;?></span>
                </td>
            </tr>

            <tr>
                <td>Website :</td>
                <td><input type="text" name="website">
                <span class="error">*<?php echo $websiteErr;?></span>
                </td>
            </tr>

            <tr>
                <td>Komentar :</td>
                <td><textarea name="comment" id="" cols="40" rows="5"></textarea></td>
            </tr>

            <tr>
                <td>Gender:</td>
                <td colspan="2">
                    <input type="radio" name="gender" value="L">Laki-Laki 
                    <input type="radio" name="gender" value="P">Perempuan 
                    <span class="error">*<?php echo $genderErr;?></span>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Submit">
                </td>
            </tr>
        </table>
    </form>
    

    <table border="1">
    <tr>
        <th>
            <?php echo "Data yang anda isi:"; ?>
        </th>
        
    </tr>
    <tr>
        <td>Nama</td>
        <td>E-Mail</td>
        <td>Website</td>
        <td>Komentar</td>
        <td>Jenis Kelamin</td>
    </tr>
    <tr>
    
        <td>
            
            <?php echo "$nama"; ?>
            
        </td>
        <td>
            <?php echo "$email"; ?>
        </td>
        <td>
            <?php echo "$website"; ?>
        </td>
        <td>
            <?php echo "$comment"; ?>
        </td>
        <td>
            <?php echo "$gender"; ?>
        </td>
    </tr>
    </table>

    </body>
</html>