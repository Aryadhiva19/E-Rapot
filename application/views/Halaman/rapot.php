<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapot</title>
</head>
<body>
    <h1>Nilai Rapot </h1>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>Mata Pelajaran</th>
            <th>Nilai</th>
            <th>Predikat</th>
        </tr>
        <?php
        $no = 1;
        foreach ($nilai as $data) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data->Mata_Pelajaran; ?></td>
            <td><?php echo $data->Nilai; ?></td>
            <td><?php echo $data->Predikat; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>
