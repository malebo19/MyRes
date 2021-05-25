<?php 
require "..\database\sql_connection.php";

$residence = $_POST['resname'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$description = $_POST['description'];
$phy_address = $_POST['phyAddress'];
$city = $_POST['city'];
$campus = $_POST['campus'];
$price = $_POST['nsfas'];
$room = $_POST['room'];
$address = $phy_address.$city;

$password = $_POST[''];

mysqli_query($conn, "INSERT INTO accomodation (Res_Name, Address, Campus,Price_Accreditation, Sharing, Email, Telephone, Description)
    VALUES('$residence', '$address', '$campus', '$price', '$room', '$email', '$telephone', '$description')");



#For when upload button is clicked
if (isset($_POST['submit'])){
    #get file
    $file = $_FILES['file'];
    #print_r($file); to check file information
    
    #extracting information from file
    $fileName = $_FILES['file']['name']; #can also use $fileName = $file['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    #controlling which files to upload so we need to get extension
    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','jpeg','png');

    if (in_array($fileActualExt,$allowed)){ #check file type

        if ($fileError===0){ #check if there is an error
            
            if ($fileSize < 1000000){ #check file size

                $fileNameNew = uniqid('',true).'.'.$fileActualExt;
                $fileDestination = 'images/'.$fileNameNew;

                #database connect
                //$db = mysqli_connect("localhost", "root", "", "myres");

                #sql query
                $sql = "INSERT INTO pictures (Pictures,Location) VALUES ('$fileNameNew', )";

                #execute query
                mysqli_query($db, $sql);

                if (move_uploaded_file($fileTmpName,$fileDestination)){
                    $msg = 'Image successfully uploaded!';
                    header("Location: index.php?uploadsuccess");                    
                }else {
                    $msg = 'Failled to upload image!';
                }
                

            }else{
                echo "Your file is too big!";
            }

        }else{
            echo "There was an error uploading your file!";
        }

    } else {
        echo "You cannot upload files of this type!";
    }

    $result = mysqli_query($db, "SELECT * FROM pictures");
}


?>