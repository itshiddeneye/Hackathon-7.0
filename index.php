<?php

include 'upload.php';

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="wrapper">
            <?php if(!empty($statusMsg)) { ?>

                  <p class="status <?php echo $status; ?>"><?php echo $statusMsg; ?></p>

                <?php } ?>
            
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="image">Select Image File:</label>
                    <input type="file" name="image" class="form-control">
</div>
<input type="submit" name="submit" class="btn-primary" value="upload">
</form>
</div>
</div>
    
</body>
</html>