<?php
    if($_FILES['file']['name'] != ''){

        $filename = $_FILES['file']['name'];

        $extension = pathinfo($filename, PATHINFO_EXTENSION);

        $valid_extensions = array("jpg","jpeg","png","gif");

        if(in_array($extension, $valid_extensions)){

            $new_name = rand() ."." . $extension;

            $path = "img/" . $new_name;

            if(move_uploaded_file($_FILES['file']['tmp_name'], $path)){

                // echo '<img src="'.$path.'"/><br/><br/>

                // <button data-path="'.$path.'" id="delete_btn">Delete</button>';

                echo $path;
                
            }
        }else{
            echo '<script>alert("Invalid file Extension");</script>';
        }
    }else{
        echo '<script>alert("Please select File");</script>';
    }


?>