<html>
    <head>
        <title>Tutorial Membuat Validasi Input Type File di PHP</title>
    </head>
    <body>
        <h3>Form Input File</h3>
        <form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama File</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>File</td>
                    <td>:</td>
                    <td><input type="file" name="arsip"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" name="submit" value="Submit">
                        <input type="reset" name="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
        <hr />
        <h3>Hasil :</h3>
        // Script php validasi input type file tulis disini.
		<?php
    if(isset($_POST['submit'])){
        $nama    =$_POST['nama'];
        $file    =$_FILES['arsip']['name'];
                
        $ekstensi_file    =array('jpg', 'png', 'jpeg', 'webp');
        $ekstensi        =strtolower(end(explode('.', $_FILES['arsip']['name'])));
        $ekstensi_ok    =in_array($ekstensi, $ekstensi_file);
                
            // validasi input type file
            if(!($ekstensi_ok)){
                echo "Oops! Ekstensi type file tidak diijinkan upload ...<br>";
            }
            
            // jika validasi type file terpenuhi
            else {
                //Tulis query database disini
                echo "Good! Input type file sesuai ketentuan ekstensi. Silahkan lanjut query database nya ...<br>";
            }    
    }    
?>
    </body>
</html>