<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="./assets/css/dashboard.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Edit Parent</title> 
</head>
<body class="">
    <section class="home">
        <div class="text c--flux">
            <span class="sub-text">Edit Parent</span>
        </div>
        <div class="container-fluid ps-5 pe-5 pb-5 w-75">
            <form id="form-contact" action="" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Full name</label>
                    <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Full Name">
                    <p class="" style="color: red;" id ="nameerror"></p>
                </div>
                <div class="mb-3">
                    <label for="Phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone">
                    <p class="" style="color: red;" id ="phoneerror"></p>
                </div>
                <div class="mb-3">
                    <label for="Address" class="form-label">Job</label>
                    <input type="text" class="form-control" name="id" id="id" placeholder="id">
                    <p class="" style="color: red;" id ="iderror"></p>
                </div>
                <div class="mb-3">
                    <label for="Gender" class="form-label">Gender</label>
                    <select class="form-select" name="gender" id="gender">
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                    <p class="" style="color: red;" id ="gendererror"></p>
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Addresse</label>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="subject">
                    <p class="" style="color: red;" id ="subjecterror"></p>
                </div>
                <div class="mb-3">
                    <button name='submit' value="submit" type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
            </form>
        </div>
    </section>
    <script src="./assets/js/teachervalidation.js"></script>
    <script src="./assets/js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
