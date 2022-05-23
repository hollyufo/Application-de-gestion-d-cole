<?php
    // print_r($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./views/assets/css/dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Edit Parent</title> 
</head>
<body>
    <section class="home w-100">
        <div class="text c--flux w-75 mx-auto my-5">
            <span class="sub-text h1">Edit Parent</span>
        </div>
        <div class="container-fluid ps-5 pe-5 pb-5 w-75 w-50 mx-auto">
            <form id="form-contact" action="" method="POST">
                <input type="hidden" name="parentid" value="<?php echo $data['parentid'] ?>">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Full name</label>
                    <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Full Name" value="<?php echo $data['parentname'] ?>">
                    <p class="" style="color: red;" id ="nameerror"></p>
                </div>
                <div class="mb-3">
                    <label for="Phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone" value="<?php echo $data['parentphone'] ?>">
                    <p class="" style="color: red;" id ="phoneerror"></p>
                </div>
                <div class="mb-3">
                    <label for="Address" class="form-label">Job</label>
                    <input type="text" class="form-control" name="job" id="id" placeholder="Job" value="<?php echo $data['parentjob'] ?>">
                    <p class="" style="color: red;" id ="iderror"></p>
                </div>
                <div class="mb-3">
                    <label for="Gender" class="form-label">Gender</label>
                    <select class="form-select" name="gender" id="gender">
                        <option value="<?php echo $data['parentgender'] ?>"><?php echo $data['parentgender'] ?></option>
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                    <p class="" style="color: red;" id ="gendererror"></p>
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Addresse</label>
                    <input type="text" class="form-control" name="adresse" id="subject" placeholder="subject" value="<?php echo $data['parentaddress'] ?>">
                    <p class="" style="color: red;" id ="subjecterror"></p>
                </div>
                <div class="mb-3">
                    <input name='submit' value="submit" type="submit" class="btn btn-primary" value="Submit">
                    <a href="./parents" class="btn btn-secondary ms-4">Cancel</a>
                </div>
            </form>
            </form>
        </div>
    </section>
    <script src="./views/assets/js/teachervalidation.js"></script>
    <script src="./views/assets/js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
