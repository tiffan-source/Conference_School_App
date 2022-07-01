<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($data as $data_elem) {?>
        
        <div>
            <h1><?php $data["sujet_appel"]?> </h1>
            <p>
                <?php $data["contenu"]?>
            </p>
        </div>
    
    <?php }?>
</body>
</html>