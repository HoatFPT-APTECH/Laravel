<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Danh Sách của employee</title>
</head>
<body>
    <div class="container">
        @include('layout.header')
        <div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col" class="scope">ID</th>
                    <th scope="col">First Name </th>
                    <th scope="col">Last Name </th>
                    <th scope="col">Department ID</th>
                    <th scope="col">Role ID</th>
                  </tr>
                </thead>
                <tbody>
                     {{-- với mỗi phần tử user trong $danhsach  mảng truyền sang  --}}
                     @foreach($danhsach as $employee)
                     <tr>
                        
                         <td>
                            {{$employee->employee_id}}
                         </td>
                         <td>
                            {{$employee->first_name}}
                         </td>
                          <td>
                            {{$employee->last_name}}
                         </td> 
                         <td>
                            {{$employee->department_id}}
                         </td>
                         <td>
                            {{$employee->role_id}}
                         </td>
                     </tr>
                        @endforeach
                </tbody>
              </table>
        </div>
        @include('layout.footer')
    </div>
  
</body>
</html>