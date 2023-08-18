<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>360 View</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <div class="row">
            <div class="col-lg-6">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Basic Form Controls</h2>
                    </div>
                    <div class="card-body">
                        <form enctype="multipart/form-data" method="post" action="index.php">
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Select Images</label>
                                <input type="file" multiple="multiple" class="form-control-file" name="images[]" id="exampleFormControlFile1">
                            </div>
    
                            <div class="form-footer pt-4 pt-5 mt-4 border-top">
                                <button type="submit" class="btn btn-primary btn-default">Upload</button>
                            </div>
                        </form>
                        
                    </div>
                </div>
                

            </div>
            <div class="card" id="card"></div>

        </div>
    </body>

    <script src="script.js"></script>
</html>




<?php 

//     $target_dir = "./uploads/"; 
// if($_FILES){
//     $files = $_FILES["images"]["name"];

//     print_r($files);


//     for($i = 0; $i <= count($files) - 1; $i++){
//         $target_file = $target_dir . basename($_FILES["images"]["name"][$i]);
//         move_uploaded_file($_FILES["images"]["name"][$i], $target_file);
//     }
// }
    


?> 