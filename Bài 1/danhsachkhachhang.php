
<?php
    $danhsachhocsinh = [
        '1' => [
            'ten' => 'Long',
            'ngaysinh'=> '04/02/1999',
            'diachi' => 'QT',
            'anh' => 'https://image.nhandan.vn/1200x630/Uploaded/2023/yqjwcqjlq/2022_11_24/ronaldo-portugal-copy-1844.jpg'
        ]
    ];
?>
<h1>Danh Sách Khách Hàng</h1>
<table>
    <tr>
        <td>Tên</td>
        <td>Ngày Sinh</td>
        <td>Địa Chỉ</td>
        <td>Ảnh</td>
    </tr>
    <?php foreach ($danhsachhocsinh as $key => $value): ?>
    <tr>
        <td><?php echo $key ?></td>
        <td><?php echo $value['ten'] ?></td>
        <td><?php echo $value['ngaysinh'] ?></td>
        <td><?php echo $value['diachi'] ?></td>
        <td><img src="<?php echo $value['anh'] ?>" alt="" width="200"></td>
    </tr>
<?php endforeach; ?>
</table>

