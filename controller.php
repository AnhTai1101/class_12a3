<?php
    class controller{
        public $layout = "";
        public $view = "";
        // ham xuat view
        public function renderHTML($fileView,$data = NULL){
            // $data co the la array nen ta se chuyen key thanh ten bien
            if($data != NULL){
                extract($data);
            }
            // doc noi dung file view va day ra mot bien nen ta se dung ob_start
            ob_start();
            include $fileView;
            $this->view = ob_get_contents();
            ob_get_clean();
            // ket thuc phien lam viec
            // --
            // phan trang
            // kiểm tra nếu có file layout thì ta load file layout
            if(file_exists($this->layout)){
                include $this->layout;
            }
            else{
                // neu khong co file layout thi ta xuat view
                echo $this->view;
            }
        }
    }
?>