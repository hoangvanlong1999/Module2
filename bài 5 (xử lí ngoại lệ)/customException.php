<?php
    class CustomException extends Exception
    {
        public function erroMessage()
        {
            $error = '';
            $error .= '<br> loi xuat hien tai File :'.$this->getFile();
            $error .= '<br> loi xuat hien tai dong :'.$this->getLine();
            $error .= '<br> noi dung :'.$this->getMessage();
            return $error;

        }
    }

    
    $duong = 'xau';
    $thoi_tiet = 'xau';
    try {
        if ($duong == 'xau'){
            throw new CustomException("di vong 1");
        }
        if ($thoi_tiet == 'xau'){
            throw new Exception("<br> o nha");
        }
        echo "di thang";
    }
    catch (CustomException $e){
        echo $e->errorMessage();
    }
    catch (Exception $e){
        echo 'thoi tiet :'.$e->getMessage();
    }
    finally {
        echo '<br> ve nha';
    }