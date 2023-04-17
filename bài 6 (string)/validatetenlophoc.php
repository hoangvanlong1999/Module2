<?php
function kt($tenlop) {
  if (preg_match('/^(C|A|P)\d{4}[GHIKLM]$/', $tenlop)){
    echo 'ten lop hop le';
  }else {
    'ten lop khong hop le';
  }
}