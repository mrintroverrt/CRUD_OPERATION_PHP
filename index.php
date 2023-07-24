<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            background-color: #7b7b7b;
        }

        .form {
            background-color: #4b4848;
            border-radius: 20px !important;
            padding: 30px;
            box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.1);
            color: rgb(0, 0, 0);
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="form border rounded p-5">
                    <h1 class="text-center">REGISTER</h1>
                    <form action="create.php" method="POST">
                        <div class="form-floating">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                            <label for="" class="form-label">Name</label>
                        </div><br>
                        <div class="form-floating">
                            <input type="email" name="email" class="form-control" placeholder="example@gmail.com">
                            <label for="" class="form-label">Email</label>
                        </div><br>
                        <label for="form-check-lable">Gender</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="male" name="gender" value="male">
                            <label for="male">Male</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="female" name="gender" value="female">
                            <label for="female">Female</label>
                        </div><br>
                        <label for="form-check-lable">Languages</label>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="tamil" name="language[]" value="tamil">
                            <label for="tamil">Tamil</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="english" name="language[]" value="english">
                            <label for="english">English</label>
                        </div><br>
                        <label for="">DOB</label>
                        <div class="input-group date">
                            <input type="date" class="form-control" id="date" name="date">
                        </div><br>
                        <textarea style="resize: none;" name="address" id="address" cols="30" rows="4" class="form-control"></textarea><br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>