<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <p> form them nguoi dung</p>
        <form action="/addUserP" method="post">
          @csrf
            <div class="form-group">
              <label for="exampleInputEmail1">Tên </label>
              <input type="text" name="ten" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Nghề nghiệp </label>
              <input type="text" name="nghenghiep" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Giới tính </label>
                <select class="form-select" name="gioitinh">
                    <option value="1" > Nam</option>
                    <option value="0">Nữ</option>
                   
                  </select>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Tuổi </label>
                <input type="number" name="tuoi" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
   
</body>
</html>