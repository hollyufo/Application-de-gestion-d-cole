<!------- sidebar-->
<?php require_once 'includes/sidebar.php'; 
    // print_r($data);
?>

<section class="home">
    <div class="text c--flux">
        <span class="sub-text">Manage your students</span>
        <form action="http://localhost/application-de-gestion-d-cole/students" class="d-flex" METHOD="GET">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <input type="text" name="word" class="form-control" placeholder="search.....">
            </div>
                <input type="submit" value="search" class="input-group-text" id="basic-addon1">
            </div>
        </form>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New
            Student</button>
    </div>
    <div class="container-fluid ps-5 pe-5 pb-5" id="students">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php 
                $x = ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen', 'twenty'];
                $i = 0;
                foreach($data as $student){ 
                $i++;   
                ?>
            <!----===== Students ===== -->
            <div class="col">
                <div class="card">
                    <div class="main1">
                        <div class="img-name d-flex flex-column m-3 ">
                            <img src="./views/assets/img/blank-profile-picture-973460_640.png"
                                class="rounded-circle teacher-img" alt="user">
                            <br>
                            <div id="students">
                                <h5 class="border-0 bg-white name info-card w-100 text-center" role="button"
                                    data-bs-toggle="collapse" data-bs-target="#student-<?php echo $x[$i] ?>">
                                    <?php echo $student['studentname'] ?>
                                </h5>
                                <div id="student-<?php echo $x[$i] ?>" class="collapse" data-bs-parent="#students">
                                    <div class="text-center">
                                        <ul>
                                            <li class="w-100 mt-3 d-flex align-items-center">
                                                <p class="text-primary fw-semibold">Phone :</p>
                                                <p class="mx-2"><?php echo $student['studentphone'] ?> </p>
                                            </li>
                                            <li class="w-100 d-flex align-items-center">
                                                <p class="text-primary fw-semibold">Class Number :</p>
                                                <p class="mx-2"><?php echo $student['studentclass'] ?> </p>
                                            </li>
                                            <li class="w-100 d-flex align-items-center">
                                                <p class="text-primary fw-semibold">Parent Name :</p>
                                                <p style="margin-left: 5px;"><?php echo $student['studentparent'] ?>
                                                </p>
                                            </li>
                                            <li class="w-100 d-flex align-items-center">
                                                <p class="text-primary fw-semibold">Student id :</p>
                                                <p class="mx-2"><?php echo $student['studentide'] ?> </p>
                                            </li>
                                            <li class="w-100 d-flex align-items-center">
                                                <p class="text-primary fw-semibold">Gender :</p>
                                                <p class="mx-2"><?php echo $student['studentgender'] ?> </p>
                                            </li>
                                            <li class="w-100 d-flex align-items-center">
                                                <p class="text-primary fw-semibold">Date of Birthday :</p>
                                                <p class="mx-2"><?php echo $student['studentbirth'] ?> </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="info2">
                            <a href="./editstudent/<?php echo $student['studentid'] ?>" class="btn btn-primary">Edit</a>
                            <a href="students/delete/<?php echo $student['studentid'] ?>"
                                class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add students</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form-contact" method="POST">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Full name</label>
                        <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Full Name">
                        <p class="" style="color: red;" id="nameerror"></p>
                    </div>
                    <div class="mb-3">
                        <label for="Phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
                        <p class="" style="color: red;" id="phoneerror"></p>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Class Number</label>
                        <select class="form-select" name="class" id="class">
                            <option value="One">One</option>
                            <option value="Two">Two</option>
                        </select>
                        <p class="" style="color: red;" id="classerror"></p>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Matricule</label>
                        <input type="number" class="form-control" name="matricule" id="matricule"
                            placeholder="Matricule">
                        <p class="" style="color: red;" id="matriculeerror"></p>
                    </div>
                    <div class="mb-3">
                        <label for="Gender" class="form-label">Gender</label>
                        <select class="form-select" name="gender" id="gender">
                            <option value="male">male</option>
                            <option value="female">female</option>
                        </select>
                        <p class="" style="color: red;" id="gendererror"></p>
                    </div>
                    <div class="mb-3">
                        <label for="Address" class="form-label">Adresse</label>
                        <input type="text" class="form-control" name="adresse" id="adresse" placeholder="adresse">
                        <p style="color: red;" id="adresserror"></p>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="email">
                        <p class="" style="color: red;" id="iderror"></p>
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">Date of Birthday</label>
                        <input type="date" class="form-control" name="dob" id="dob" placeholder="Date of Birthday">
                        <p class="" style="color: red;" id="subjecterror"></p>
                    </div>
                    <div class="mb-3">
                        <button name='submit' value="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script src="./views/assets/js/dashboard.js"></script>

<script src="./views/assets/js/teachervalidation.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>