<?php
    function kt($sdt) {
        if (preg_match('/^\(\d{2}\)-\(0\d{9}\)$/', $sdt)){
            echo 'sdt hop le';
        }else {
            echo 'sdt khong hop le';
        }
      }