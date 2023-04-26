<?php
// tạo 1 class cha connguoi
class ConNguoi{
    // gồm các thuộc tính để tạo lên con người 
    // phạm vi truy cập public  private protected
    public $chan;
    public $tay;
    public $namsinh;

  // tạo hàm set các thuộc tính trong class connguoi
  public function set_connguoi($chan,$tay){
    $this->chan = $chan;
    $this->tay = $tay;
  }
  // hàm khởi tạo __construct
  public function __construct($chan,$tay,$namsinh){
    $this->chan = $chan;
    $this->tay = $tay;
    $this->namsinh = $namsinh;
  }
 // phương thức 
 public function tinhTuoi(){
    return date("Y") - $this->namsinh;
 }
 public function hienThi(){
    echo "con người  có ".$this->chan . " chan va " .$this->tay ." tay ";
    echo "<br>";
    echo "năm sinh ".$this->tinhTuoi();
 }

}
// khởi tạo giá trị 
$cn = new ConNguoi(2,2,'2000');
$cn->hienThi();

// tạo 1 class trừu tượng 
// class trừu tượng không khởi tạo đc và các phương thức không được viết code mà trong đó mà các 
// class con phải oraider lại để viết code và đó
// phương thức trong class trừu tượng cho các class có cùng hành động 
abstract  class Dongvat{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
  abstract public function chay();
  abstract public function nhay();
}
class conCho extends Dongvat{
    public function chay()
    {
            echo  $this->name." chay";
            echo "<br>";
    }
    public function nhay(){
        echo $this->name." nhay";
    }
}

// khởi tạo 
$cc = new conCho("con mèo");
$cc->chay();
$cc->nhay();



/*
nếu class con không có hàm khởi tạo contruct thì nó auto lấy hàm khởi tạo của class cha 
nếu class con có hàm khởi tạo rồi mà muốn dùng hàm khởi tọa của class cha thì: 
parent::__contruct (các thuộc tính mà class cha định nghĩa)

*/