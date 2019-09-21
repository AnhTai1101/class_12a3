<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lớp 12A3</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2 class="text-primary">Danh sách đóng tiền đợt 2</h2>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên</th>
                    <th>Số tiền</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($class as $rows): ?>
                <tr>
                    <td><?php echo $rows->id; ?></td>
                    <td><?php echo $rows->name; ?></td>
                    <td><?php echo $rows->tien; ?>.000đ</td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>