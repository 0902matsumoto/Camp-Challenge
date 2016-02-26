<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // ４．以下の機能を持つクラスを作成してください。
        //   ・パブリックな２つの変数
        //   ・２つの変数に値を設定するパブリックな関数
        //   ・２つの変数の中身をechoするパブリックな関数
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
        $c = new code_camp;
        $c -> set('松本','PHP');
        $c -> print_camp();
        ?>
    </body>
</html>
