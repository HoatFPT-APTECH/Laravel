<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class helloController extends Controller
{
 public   $ten='hoat';// kiểu dữ liệu string
  public $hinhdang=0;// kiểu dữ liệu dạng int, (số)
  public $danhsach = array();
//   key=> value
 public $danhsach2= array("key1"=>4, "key1"=> 10, "key3"=>"hoat");
 public function __construct()
 {
  
 }
//   public  $danhsach= array( 
//     array(
//     "name"=>"hoat",
//     "age"=> 23,
//     "ngheNghiep"=>"sinhvien",
//    "gioitinh"=>1),
//     array(
//         "name"=>"Trang",
//         "age"=>18,
//         "ngheNghiep"=>"Sinhvien",
//         "gioitinh"=>0
//     )
//   );

    public function vietcode(){
        return view('hello',['ten'=>$this->ten]);
        // [] : mang
        // {} : class , mot doi tuong oob 
    }
    public function showLoop(){
        $user1= new User("hoat",23,'sinhvien',1);
        $user2= new User("Hiển anh ",19,"Sinh viên",1);
        array_push($this->danhsach,$user1);
        array_push($this->danhsach,$user2);

        return view ('forLoop',['danhsach'=>$this->danhsach,
          'danhsach2'=>$this->danhsach2,
        'user1'=>$user1,
        'user2'=>$user2
        ]
        );
    }
     public function indexCreateForm(){
      return view('createForm');
     }
     public function createForm(Request $request){
      $ten= $request->input("ten");
      $nghenghiep= $request->input("nghenghiep");
      $gioitinh= $request->input('gioitinh');
      $tuoi = $request->input("tuoi");
      $user3= new User($ten,$tuoi,$nghenghiep,$gioitinh);
      array_push($this->danhsach,$user3);
      return view('showCreateForm',['danhsach'=>$this->danhsach]);
     }
 

}
