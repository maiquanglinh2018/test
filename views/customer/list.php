<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="add.php">Thêm khách hàng</a>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Tên</td>
            <td>Tuổi</td>
        </tr>
        <?php foreach ($customer as $key => $value) { ?>
        <tr>
            <td><?php echo $value['id'];?></td>
            <td><?php echo $value['name'];?></td>
            <td><?php echo $value['age'];?></td>
            <td><a href="edit?id=<?= $value['id'] ?>">Sửa</a></td>
            <td><a href="delete?id=<?= $value['id'] ?>">Xoá</a></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>