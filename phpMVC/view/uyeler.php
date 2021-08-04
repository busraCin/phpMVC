<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
</head>
<body>

<form action="" method="post">
<input type="text" name="username" placeholder="Üyelerde arayın">
<button type="submit">Gönder</button>
</form>

<ul>
    <?php 
    foreach($users as $users):
    ?>
    <li>
        <?= $user['name'] ?>
    </li>
    <?php endforeach; ?>
</ul>

</body>
</html>