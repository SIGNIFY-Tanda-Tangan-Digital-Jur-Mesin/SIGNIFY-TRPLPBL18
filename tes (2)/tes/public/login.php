<!DOCTYPE html>
<html>
<head>
    <link rel="shorcut-icon" type="x-icon" href="ttd/assets/logo1.png">
    <title>Login Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
    <div class="container d-flex justify-content-center align-items-center"
            style="min-height: 100vh">
    <form class="border shadow p-3 rounded"
        action="login/check-login.php"
        method="post"
            style="width: 450px;">
            <h1 class="text-center p-3">Login Akun</h1>
        <div class="mb-1">
            <label class="form-label">Select User Type:</label>
        </div>
        <select class="form-select mb-3" 
                aria-label="Default select example">
        <option selected value="admin">Admin</option>
        <option value="user">User</option>
        </select>
        <div class="mb-3">
            <label for="username"
                    class="form-label">Username</label>
            <input type="text"
                    class="form-control" 
                    name="username"
                    id="username">
        </div>
        <div class="mb-3">
            <label for="password"
                    class="form-label">Password</label>
            <input type="text"
                    name="password"
                    class="form-control" 
                    id="password">
        </div>
        <div class="container d-flex justify-content-center align-items-center">
        <button type="login" class="btn btn-primary">Login</button>
    </form>
    </div>
    
</body>
</html>