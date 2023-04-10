<style>
    .item {
        background-color: blanchedalmond;
        width: 500px;
        border: 1px solid #ccc;
        margin: 25px;
        padding: 10px;
        float: left;
    }
</style>

<div class="item">
    <h1>Vẽ hình</h1>
    <form method="post">
        <label>Chọn hình muốn vẽ:</label>
        <select name="hinh">
            <option value="1">Hình chữ nhật</option>
            <option value="2">Tam giác vuông</option>
            <option value="3">Tam giác cân</option>
        </select>
        <br>

        <div id="chieurong_div">
            <label>Chiều rộng:</label>
            <input type="text" name="chieurong">
            <br>
        </div>

        <div id="chieudai_div">
            <label>Chiều dài:</label>
            <input type="text" name="chieudai">
            <br>
        </div>

        <div id="sodong_div">
            <label>Số dòng:</label>
            <input type="text" name="sodong">
            <br>
        </div>

        <button type="submit" name="submit">Vẽ hình</button>
    </form>
</div>

<?php
function hinhchunhat($chieudai, $chieurong)
{
    for ($i = 0; $i < $chieurong; $i++) {
        for ($j = 0; $j < $chieudai; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}

function tamgiacvuong($sodong)
{
    for ($i = $sodong; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}

function tamgiaccan($sodong)
{
    $dodaican = 2 * $sodong - 1;
    for ($i = 0; $i < $sodong; $i++) {
        $so_ngoisao = 2 * $i + 1;
        $so_khoangcach = ($dodaican - $so_ngoisao) / 2;
        for ($j = 0; $j < $so_khoangcach; $j++) {
            echo " ";
        }
        for ($j = 0; $j < $so_ngoisao; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}

if (isset($_POST['submit'])) {

    $hinh = $_POST['hinh'];

    switch ($hinh) {
        case 1:
            $chieurong = $_POST['chieurong'];
            $chieudai = $_POST['chieudai'];
            hinhchunhat($chieudai, $chieurong);
            break;

        case 2:
            $sodong = $_POST['sodong'];
            tamgiacvuong($sodong);
            break;
        case 3:
            $sodong = $_POST['sodong'];
            tamgiaccan($sodong);
            break;    
        }

    }