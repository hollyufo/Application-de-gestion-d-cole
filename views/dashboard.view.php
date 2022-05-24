<!------- sidebar-->
<?php require_once 'includes/sidebar.php'; 
  // var_dump($data); 
?>
    <section class="home">
        <div class="d-flex align-items-center justify-content-between">
          <div class="text">
             Dashboard
          </div>
        </div>
        <div class="container-fluid ps-5 pe-5 pb-5 ">
          <div class="row row-cols-1 row-cols-md-3 g-5 ">
            <div class="col">
              <div class="card h-100 w-100">
                <i class='bx bxs-id-card dahsboard-icon' ></i>
                <div class="card-body">
                  <h5 class="card-title">Teachers</h5>
                  <p class="card-text">Number of teacher is : <span class="strong-number"><?php echo $data['teachers'] ?></span></p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 w-100">
                <i class='bx bxs-graduation dahsboard-icon' ></i>
                <div class="card-body">
                  <h5 class="card-title">Students</h5>
                  <p class="card-text">Number of students is <span class="strong-number"><?php echo $data['students'] ?></span></p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 w-100">
                <i class='bx bxs-face dahsboard-icon' ></i>
                <div class="card-body">
                  <h5 class="card-title">Admin</h5>
                  <p class="card-text">Number of admin is <span class="strong-number"><?php echo $data['users'] ?></span></p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100 w-100">
                <i class='bx bx-user dahsboard-icon' ></i>
                <div class="card-body">
                  <h5 class="card-title">Parents</h5>
                  <p class="card-text">Number of parents is <span class="strong-number"><?php echo $data['parents'] ?></span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <script src="./views/assets/js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>