class and function

class ထဲကို ထည့်ရေးမယ်ဆိုရင် နှစ်နည်းရှိမယ်
1.function ထဲကို ထည့်ရေးနှင့် အတွင်းထဲမှာ ခေါ်ရေးတာ
<?php
class clName {

    function data($a, $b){
        $z = $a + $b;
        return $z;
    }

    //if you want to output in view , you can write follow form
    //data(1,2);
}

?>

2. function ထဲမှာပဲ variable သတ်မှတ်ပီးရေးတာ
<?php
class clName { 
     function data($a, $b){
        $d = 2;
        $z = $a + $b + $d;
        return $z;
    }
}
?>

3. function ထဲမှာပဲ public နဲ့ရေးတာ
<?php
     class Common {
        public $e = 3;

        function data($a, $b){
            $z = $a + $b + $this->e;
            return $z;
        }
     }
?>