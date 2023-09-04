<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <div class="container">
        form hien thi du lieu gui len server
    </br>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Tên </th>
            <th scope="col">Tuổi</th>
            <th scope="col">Nghề nghiệp </th>
            <th scope="col">Giới tính</th>
          </tr>
        </thead>
        <tbody>
             {{-- với mỗi phần tử user trong $danhsach  mảng truyền sang  --}}
             @foreach($danhsach as $user)
             <tr>
                cách viết dưới là truy cập giá trị của mảng  với kiểu key=> value
              {{-- mỗi user thì tạo thông tin hiển thị  --}}
                 {{-- <td> {{$user['name']}}</td>
                 <td> {{$user['age']}}</td>
                 <td> {{$user['ngheNghiep']}}</td>
                 <td>
                    @if($user["gioitinh"]==1)
                    Con Trai
                    @else
                    Con gái
                    @endif
                 </td> --}}
                 <td>
                    {{$user->ten}}
                 </td>
                 <td>
                    {{$user->tuoi}}
                 </td>
                  <td>
                    {{$user->nghenghiep}}
                 </td> 
                 <td>
                    @if($user->gioitinh ==1)
                    Con trai 
                    @else
                    Con gái 
                    @endif
                 </td>
       
             </tr>
                @endforeach
        </tbody>
      </table>
    </div>
 
</body>
</html>