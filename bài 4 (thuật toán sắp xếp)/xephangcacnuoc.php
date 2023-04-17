<?php
// Tạo lớp Country với 2 thuộc tính: $name và $totalGoldMedals
class Country {
  public $name;
  public $totalGoldMedals;

  function __construct($name, $totalGoldMedals) {
    $this->name = $name;
    $this->totalGoldMedals = $totalGoldMedals;
  }
}

// Tạo danh sách quốc gia và số huy chương vàng tương ứng
$countryList = array(
  new Country("USA", 39),
  new Country("China", 38),
  new Country("Japan", 27),
  new Country("Great Britain", 22),
  new Country("ROC", 20)
);

// Hàm sắp xếp danh sách quốc gia theo thứ tự giảm dần của số huy chương vàng
function sortByGoldMedals($a, $b) {
  if ($a->totalGoldMedals == $b->totalGoldMedals) {
    return 0;
  }
  return ($a->totalGoldMedals > $b->totalGoldMedals) ? -1 : 1;
}

// Sắp xếp danh sách quốc gia theo số huy chương vàng giảm dần
usort($countryList, "sortByGoldMedals");

// In ra danh sách quốc gia đã được sắp xếp
echo "Danh sách quốc gia theo thứ tự giảm dần của số huy chương vàng:\n";
foreach ($countryList as $country) {
  echo $country->name . " - " . $country->totalGoldMedals . " huy chương vàng\n";
}
?>