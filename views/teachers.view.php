<!------- sidebar-->
<?php require_once 'includes/sidebar.php'; ?>

    <section class="home">
        <div class="text c--flux">
            <span class="sub-text">Manage your teachers</span>
            <form action="http://localhost/application-de-gestion-d-cole/teachers" class="d-flex" METHOD="GET">
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <input type="text" name="word" class="form-control" placeholder="search.....">
            </div>
                <input type="submit" value="search" class="input-group-text" id="basic-addon1">
            </div>
        </form>
            <button type="button" class="btn btn-primary mx-5" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New Teacher</button>
        </div>
        <div class="container-fluid ps-5 pe-5 pb-5" id="teachers">
            <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php 
                $x = ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen', 'twenty'];
                $i = 0;
                foreach($data as $teacher){ 
                $i++;
                    ?>
                <!----===== teachers ===== -->
                <div class="col">
                    <div class="card">
                        <div class="main1">
                            <div class="img-name d-flex flex-column m-3 ">
                                <img src="./views/assets/img/blank-profile-picture-973460_640.png" class="rounded-circle teacher-img" alt="user">
                                <br>
                                <div id="questions">
                                    <h5 class="border-0 bg-white name info-card w-100 text-center" role="button" data-bs-toggle="collapse" data-bs-target="#question-<?php echo $x[$i] ?>">
                                    <?php echo $teacher['teachername'] ?>   
                                    </h5>
                                    <div id="question-<?php echo $x[$i] ?>" class="collapse" data-bs-parent="#questions">
                                        <div class="text-center">
                                            <ul>
                                                <li class="w-100 mt-3 d-flex align-items-center">
                                                    <p class="text-primary fw-semibold">Phone:</p>
                                                    <p class="mx-2"><?php echo $teacher['teacherphone'] ?>  </p>
                                                </li>
                                                <li class="w-100 d-flex align-items-center">
                                                    <p class="text-primary fw-semibold">Class:</p>
                                                    <p class="mx-2"><?php echo $teacher['teacherclass'] ?>  </p>
                                                </li>
                                                <li class="w-100 d-flex align-items-center">
                                                    <p class="text-primary fw-semibold">Matrecule:</p>
                                                    <p style="margin-left: 5px;"><?php echo $teacher['teacheride'] ?>  </p>
                                                </li>
                                                <li class="w-100 d-flex align-items-center">
                                                    <p class="text-primary fw-semibold">Gender:</p>
                                                    <p class="mx-2"><?php echo $teacher['teachergender'] ?>  </p>
                                                </li>
                                                <li class="w-100 d-flex align-items-center">
                                                    <p class="text-primary fw-semibold">Subject:</p>
                                                    <p class="mx-2"><?php echo $teacher['teachersubject'] ?>  </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="info2">
                                <a href="./editteacher/<?php echo $teacher['teacherid'] ?>" class="btn btn-primary">Edit</a>
                                <a href="teachers/delete/<?php echo $teacher['teacherid'] ?>" class="btn btn-danger">Delete</a>
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
          <h5 class="modal-title" id="exampleModalLabel">Add teacher</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="form-contact" action="" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Full name</label>
                    <input type="text" id="fullname" name="fullname" class="form-select" placeholder="Full Name">
                    <p class="" style="color: red;" id ="nameerror"></p>
                </div>
                <div class="mb-3">
                    <label for="Phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone">
                    <p class="" style="color: red;" id ="phoneerror"></p>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Class</label>
                    <select class="form-select" name="class" id="class">
                        <option value="one">one</option>
                        <option value="two">two</option>
                    </select>
                    <p class="" style="color: red;" id ="classerror"></p>
                </div>
                <div class="mb-3">
                    <label for="matricule" class="form-label">Matrecule</label>
                    <input type="number" class="form-control" name="matricule" id="matricule" placeholder="Matricule">
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
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="subject">
                    <p class="" style="color: red;" id ="subjecterror"></p>
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
    <script src="./views/assets/js/teachervalidation.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>