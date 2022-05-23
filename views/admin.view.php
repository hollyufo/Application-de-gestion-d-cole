<!------- sidebar-->
<?php require_once 'includes/sidebar.php'; 
//var_dump($data);
?>

    <section class="home">
        <div class="text c--flux">
            <span class="sub-text">Manage your Admin's</span>
            <button type="button" class="btn btn-primary mx-5" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New Admin</button>
        </div>
        <div class="container-fluid ps-5 pe-5 pb-5" id="teachers">
            <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
                foreach($data as $admin){?>
                <!----===== admins ===== -->
                <div class="col">
                            <div class="card">
                            <div class="main1">
                                <div class="img-name d-flex flex-column m-3 ">
                                    <img src="./views/assets/img/blank-profile-picture-973460_640.png" class="rounded-circle teacher-img" alt="user">
                                    <br>
                                    <div id="questions">
                                        <h5 class="border-0 bg-white name info-card w-100 text-center" role="button" data-bs-toggle="collapse" data-bs-target="#question-one">
                                            <?php echo $admin['username'] ?>  
                                        </h5>
                                        <div id="question-one" class="collapse" data-bs-parent="#questions">
                                            <div class="text-center">
                                                <ul>
                                                    <li class="w-100 mt-3 d-flex align-items-center">
                                                        <p class="text-primary fw-semibold">Matricule :</p>
                                                        <p class="mx-2"><?php echo $admin['matricule'] ?></p>
                                                    </li>
                                                    <li class="w-100 d-flex align-items-center">
                                                        <p class="text-primary fw-semibold">Full Name :</p>
                                                        <p class="mx-2"><?php echo $admin['username'] ?></p>
                                                    </li>
                                                    <li class="w-100 d-flex align-items-center">
                                                        <p class="text-primary fw-semibold">email :</p>
                                                        <p style="margin-left: 5px;"><?php echo $admin['useremail'] ?></p>
                                                    </li>
                                                    <li class="w-100 d-flex align-items-center">
                                                        <p class="text-primary fw-semibold">Rôle :</p>
                                                        <p class="mx-2"><?php echo $admin['role'] ?></p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="info2">
                                    <a href="./delete/admin/<?php echo $admin['userid'] ?>" class="btn btn-danger">Delete</a>
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
          <h5 class="modal-title" id="exampleModalLabel">Add new Admin</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form id="form-contact" action="" method="POST">
            <div class="mb-3">
                    <label for="Nom" class="form-label">Full name</label>
                    <input type="text" class="form-control" name="username" id="Nom" placeholder="Nom">
                    <p class="" style="color: red;" id ="phoneerror"></p>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Matricule</label>
                    <input type="text" id="matricule" name="matricule" class="form-select" placeholder="Matricule">
                    <p class="" style="color: red;" id ="nameerror"></p>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">email</label>
                    <input type="email" class="form-control" name="email" id="Prénom" placeholder="Prénom">
                    <p class="" style="color: red;" id ="classerror"></p>
                </div>
                <div class="mb-3">
                    <label for="Rôle" class="form-label">Rôle</label>
                    <input type="text" class="form-control" name="role" id="Rôle" placeholder="Rôle">
                    <p class="" style="color: red;" id ="iderror"></p>
                </div>
                <div class="mb-3">
                    <label for="Mot de Passe" class="form-label">Mot de Passe</label>
                    <input type="password" class="form-control" name="MotdePasse" id="Mot de Passe" placeholder="Mot de Passe">
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