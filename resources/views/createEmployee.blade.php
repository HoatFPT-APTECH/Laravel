<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Add Employees</title>
</head>
<body>
    <div class="container">
        @include('layout.header')
        <form action="/employee/store" method="POST">
            <!-- CSRF Token -->
            @csrf

            <div class="mb-3">
                <label for="employee_id" class="form-label">Employee ID</label>
                <input type="text" class="form-control" id="employee_id" name="employee_id" required>
            </div>

            <div class="mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>

            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>

            <div class="mb-3">
                <label for="department_id" class="form-label">Department ID</label>
                <input type="text" class="form-control" id="department_id" name="department_id" required>
            </div>

            <div class="mb-3">
                <label for="role_id" class="form-label">Role ID</label>
                <input type="text" class="form-control" id="role_id" name="role_id" required>
            </div>

            <button type="submit" class="btn btn-primary">Create Employee</button>
        </form>
        @include('layout.footer')
    </div>
</body>
</html>