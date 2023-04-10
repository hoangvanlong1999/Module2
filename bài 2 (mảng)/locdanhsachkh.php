<?php
$tungay = null;
$denngay = null;
$customerList = [
    "1" => [
        "name" => "Mai Văn Hoàn",
        "day_of_birth" => "1983/08/20",
        "address" => "Hà Nội",
        "profile" => "images/img1.jpg"
    ],
    "2" => [
        "name" => "Nguyễn Văn Nam",
        "day_of_birth" => "1983/08/21",
        "address" => "Bắc Giang",
        "profile" => "images/img2.jpg"
    ],
    "3" => [
        "name" => "Nguyễn Thái Hòa",
        "day_of_birth" => "1983/08/22",
        "address" => "Nam Định",
        "profile" => "images/img3.jpg"
    ],
    "4" => [
        "name" => "Trần Đăng Khoa",
        "day_of_birth" => "1983/08/17",
        "address" => "Hà Tây",
        "profile" => "images/img4.jpg"
    ],
    "5" => [
        "name" => "Nguyễn Đình Thi",
        "day_of_birth" => "1983/08/19",
        "address" => "Hà Nội",
        "profile" => "images/img5.jpg"
    ]
];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tungay = $_REQUEST['tungay'];
    $denngay = $_REQUEST['denngay'];
    $customerList = loc($customerList, $tungay, $denngay);
}

function loc($mang, $tungay, $denngay)
{
    if (empty($tungay) || empty($denngay)) {
        return $mang;
    }

    $trunggian = [];
    foreach ($mang as $key => $value) {
        $ngaysinh = strtotime($value['day_of_birth']);
        if ($ngaysinh >= strtotime($tungay) && $ngaysinh <= strtotime($denngay)) {
            $trunggian[$key] = $value;
        }
    }
    return $trunggian;
}
?>

<form action="" method="POST">
    chọn ngày sinh : <input type="date" name="tungay" id="" placeholder="mm/dd/yyyy">
    đến : <input type="date" name="denngay" id="" placeholder="mm/dd/yyyy">
    <input type="submit" value="lọc" name="lọc">
</form>

<h1>Danh Sách Khách Hàng</h1> 

<style>
    h1 ,.itembang{
        width: 800px;
        text-align: center;
    }
</style>

<table class="itembang" border="1">
    <tr>
        <th>STT</th>
        <td>Tên</td>
        <td>Ngày Sinh</td>
        <td>Địa Chỉ</td>
        <td>Ảnh</td>
    </tr>
    <?php foreach ($customerList as $key => $giatri): ?>
    <tr>
        <td><?php echo $key; ?></td>
        <td><?php echo $giatri["name"]; ?></td>
        <td><?php echo $giatri["day_of_birth"];?></td>
        <td><?php echo $giatri["address"];?></td>
        <td><?php echo $giatri["profile"];?></td>
    </tr>
    <?php endforeach; ?>
</table>