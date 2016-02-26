<!DOCTYPE html
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // ５．４のクラスを継承し、以下の機能を持つクラスを作成してください。
        // ・２つの変数の中身をクリアするパブリックな関数
         class code_camp{
            public $aa = '';
            public $bb = '';
               public function set($a,$b){
                  $this->aa = $a;
                  $this->bb = $b;           
               }
               public function print_camp(){
                  print $this ->aa."は".$this ->bb."を学ぶ。"; 
               }
        }
         
         class camp extends code_camp{
             public function clear(){
                 $this->aa = '';
                 $this->bb = '';
             }
         }
         
         $d = new camp();
         $d ->set('松本','PHP');
         $d ->print_camp();
         
         $d ->clear();
         
         print '<br><br>';
         
         $d ->print_camp();
        ?>
    </body>
</html>
