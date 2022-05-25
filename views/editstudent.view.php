<!-- Coding by CodingLab | www.codinglabweb.com -->
<?php
    // print_r($data)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="./views/assets/css/dashboard.css">
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Dashboard</title> 
</head>
<body class="">
    <section class="home w-100">
        <div class="text c--flux w-75 mx-auto">
            <span class="sub-text h1">Edit Student</span>
        </div>
        <div class="container-fluid ps-5 pe-5 pb-5 w-50 mx-auto">
            <form id="form-contact" action="" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Full name</label>
                    <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Full Name" value="<?php echo $data['studentname']; ?>">
                    <p class="" style="color: red;" id ="nameerror"></p>
                </div>
                <div class="mb-3">
                    <input type="hidden" name="studentId" value="<?php echo $data['studentid']; ?>">
                    <label for="Phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone"  value="<?php echo $data['studentphone']; ?>">
                    <p class="" style="color: red;" id ="phoneerror"></p>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Class Name</label>
                    <input type="text" class="form-control" name="class" id="class" placeholder="name of class"  value="<?php echo $data['studentclass']; ?>">
                    <p class="" style="color: red;" id ="classerror"></p>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Matricule</label>
                    <input type="number" class="form-control" name="matricule" id="parent" placeholder="Matricule"  value="<?php echo $data['studentide']; ?>">
                    <p class="" style="color: red;" id ="classerror"></p>
                </div>
                <div class="mb-3">
                    <label for="Gender" class="form-label">Gender</label>
                    <select class="form-select" name="gender" id="gender">
                        <option value="<?php echo $data['studentgender']; ?>"><?php echo $data['studentgender']; ?></option>
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                    <p class="" style="color: red;" id ="gendererror"></p>
                </div>
                <div class="mb-3">
                    <label for="Address" class="form-label">Adresse</label>
                    <input type="email" class="form-control" name="adresse" id="id" placeholder="email" value="<?php echo $data['studentaddress']; ?>">
                    <p class="" style="color: red;" id ="iderror"></p>
                </div>
                <div class="mb-3">
                    <label for="Address" class="form-label">email</label>
                    <input type="email" class="form-control" name="email" id="id" placeholder="email" value="<?php echo $data['studentemail']; ?>">
                    <p class="" style="color: red;" id ="iderror"></p>
                </div>
                <div class="mb-3">
                    <label for="dob" class="form-label">Date of Birthday</label>
                    <input type="date" class="form-control" name="dob" id="subject" placeholder="Date of Birthday" value="<?php echo $data['studentbirth']; ?>">
                    <p class="" style="color: red;" id ="subjecterror"></p>
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Parent Name</label>
                    <input type="text" class="form-control" name="parent" id="subject" placeholder="subject" value="<?php echo $data['studentparent']; ?>">
                    <p class="" style="color: red;" id ="subjecterror"></p>
                </div>
                <div class="mb-3">
                    <button name='submit' value="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>
    <script src="./views/assets/js/teachervalidation.js"></script>
    <script src="./views/assets/js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>