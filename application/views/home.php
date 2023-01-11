<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome <?=$this->session->userdata('savename')?></h1>

    <form method="post" action="<?= base_url('welcome/save')?>">
       <input type="text" name="name">
       <input type="submit" value="Save">
    </form>
    <?php 
    if($this->session->has_userdata('savename')){
        ?>
        <a href="<?= base_url('welcome/clear');?>">clear</a>
        <?
    }

    ?>

</body>
</html>