<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\employee;
use Illuminate\Http\Request;

class employeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // hàm này sẽ được gọi để hiển thị danh sách của những thằng employee
    public function index()
    {
        $listEmployee= employee::all();
         return view('IndexEmployee',['danhsach'=>$listEmployee]);
        //  return response()->json($listEmployee);
    }

    /**
     * Show the form for creating a new resource.
     */
    // hàm này nó sẽ show page để mà người dùng thêm dữ liệu là một employee mới vào
    public function create(Request $request)
    {
       return view('createEmployee');
    }

    /**
     * Store a newly created resource in storage.
     */
    // hàm này sẽ được quy định để gọi lại cái thằng index  và xử lý dữ liệu thêm mà người dùng vừa nhập để thêm employee hoặc sửa employee
    public function store(Request $request)
    {
        $id= $request->input('employee_id');
        $firstName= $request->input('first_name');
        $lastName= $request-> input('last_name');
        $department_id=$request->input('department_id');
        $role_id= $request->input('role_id');
        // khởi tạo một đối tượng employee và setup những cái thuộct tính cho nó
         $newEmployee= new employee();
         $newEmployee->employee_id=$id;
         $newEmployee->first_name=$firstName;
         $newEmployee->last_name=$lastName;
         $newEmployee->department_id=$department_id;
         $newEmployee->role_id=$role_id;
         // lưu cào cơ sở dữ liệu
         $newEmployee->save();
         return $this->index();
    }

    /**
     * Display the specified resource.
     */
    // hiển thị chi tiết một thằng employee 
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // hàm này sẽ gọi page để hiện thị thông tin employee cho người dùng sửa 
    public function edit(string $id)
    {
        //
        $idEmployee= intval($id);
        $employeeExist= employee::where('employee_id',$idEmployee)->get();
        return view('editEmployee',['employee'=>$employeeExist]);
        // return response()->json([$employeeExist],200);

    }

    /**
     * Update the specified resource in storage.
     */
     // hàm này sẽ được quy định để gọi lại cái thằng index  và xử lý dữ liệu thêm mà người dùng vừa nhập để thêm employee hoặc sửa employee
    public function update(Request $request, string $id)
    {
        
        $firstName= $request->input('first_name');
        $lastName= $request->input('last_name');
        $department_id=$request->input('department_id');
        $role_id= $request->input('role_id');
        
         // lưu cào cơ sở dữ liệu
          employee::where('employee_id',$id)->update(['first_name'=>$firstName,'last_name'=>$lastName,'department_id'=>$department_id,'role_id'=>$role_id]);

         return $this->index();
        
    }

    /**
     * Remove the specified resource from storage.
     */
    // hàm này sẽ trực tiếp làm việc với cơ sở dữ liệu để xoá luôn thằng employee
    public function destroy(string $id)
    {
        //
    }
}
