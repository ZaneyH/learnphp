 <?php 

class Box {
    protected $length;
    protected $height;
    protected $width;
    protected $material;
    public static $count;
    
    public function __construct($length, $height, $width){
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }



    public function volume(){
        return $this->length * $this->height * $this->width;
    }

    public function getLength(){
        return $this->length;
    }
    public function setLength($length){
        if ($length > 0) {
        return $this->length;
        }
    }
    public static function countUp(){
        self::$count++;
    }
}


class MetalBox extends Box {
 public $height;
 public function __construct($length, $height, $width){
    $this->length = $length;
    $this->width = $width;
    $this->height = $height;
    $this->material = "metal";
 }
}

$box = new MetalBox(1,1,1);
$box -> volume();

MetalBox::countUp();


MetalBox::countUp();


MetalBox::countUp();

var_dump(MetalBox::$count);






