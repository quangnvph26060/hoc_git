<?php
// tạo 1 class cha connguoi
class ConNguoi
{
  // gồm các thuộc tính để tạo lên con người 
  // phạm vi truy cập public  private protected
  public $chan;
  public $tay;
  public $namsinh;

  // tạo hàm set các thuộc tính trong class connguoi
  public function set_connguoi($chan, $tay)
  {
    $this->chan = $chan;
    $this->tay = $tay;
  }
  // hàm khởi tạo __construct
  public function __construct($chan, $tay, $namsinh)
  {
    $this->chan = $chan;
    $this->tay = $tay;
    $this->namsinh = $namsinh;
  }
  // phương thức 
  public function tinhTuoi()
  {
    return date("Y") - $this->namsinh;
  }
  public function hienThi()
  {
    echo "con người  có " . $this->chan . " chan va " . $this->tay . " tay ";
    echo "<br>";
    echo "năm sinh " . $this->tinhTuoi();
  }
}
// khởi tạo giá trị 
$cn = new ConNguoi(2, 2, '2000');
$cn->hienThi();

// nếu class con không có hàm khởi tạo contruct nó sẽ auto lấy hàm khởi tạo của class cha
class abc extends ConNguoi
{
  public $mom; // thuộc tính 
  // hàm set thuộc tính $mom
  public function set_mom($mom){
     $this->mom= $mom;
  }
  // tạo hàm contruct của class con 
  // nếu muốn dùng hàm khởi tạo contruct của class cha thì ta dùng parent
  public function __construct($chan, $tay,$mom, $namsinh){
    parent::__construct($chan,$tay,$namsinh);
    $this->mom= $mom;
  }
 
  public function show()
  {
    echo "<br>";
    echo "chân " . $this->chan . " tay " . $this->tay . " miệng " . $this->mom . " tuổi ".$this->tinhTuoi();
    echo "<br>";
  }
}
$abc = new abc(2,2,1,2003);
$abc->show();

// tạo 1 class trừu tượng 
// class trừu tượng không khởi tạo đc và các phương thức không được viết code mà trong đó mà các 
// class con phải oraider lại để viết code và đó
// phương thức trong class trừu tượng cho các class có cùng tính chất 
abstract  class Dongvat
{
  public $name;
  public function __construct($name)
  {
    $this->name = $name;
  }
  abstract public function chay();
  abstract public function nhay();
}
class conCho extends Dongvat
{
  public function chay()
  {
    echo  $this->name . " chay";
    echo "<br>";
  }
  public function nhay()
  {
    echo $this->name . " nhay";
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

/**
 * interface tính đa hình 
 * không thể khởi tạo 
 * và cho các class con có cùng hành động
 */
interface HinhHoc
{
  // các phương thức phải là công khai public 
  public  function TinhDienTich(); // phương thức của interface

}
// đối với tính đa hình interface ta dùng implements
class hinhVuong implements HinhHoc
{
  public $cd;
  public $cr;
  // hàm khởi tạo 
  public function __construct($cd, $cr)
  {
    $this->cd = $cd;
    $this->cr = $cr;
  }

  public function TinhDienTich()
  {
    echo $this->cd * $this->cr;
  }
}
// khởi tạo 
$hh = new hinhVuong(8, 5);

$hh->TinhDienTich();


// ngăn chặn ghi đè phương thức các phương thức từ class cha mà không muốn trùng với các 
// phương thức class con thì chỉ cần ghi final ở đầu các phương thức
// ví dụ final public function intro() {
// some code
// }

class Fruit
{
  // ghi final ở đầu phương thức là tránh bị ghi đè 

  public function intro()
  {
    // some code
  }
}

class Strawberry extends Fruit
{
  // will result in error
  public function intro()
  {
    // some code
  }
}
