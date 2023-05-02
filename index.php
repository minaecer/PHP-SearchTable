
<?php
require_once("backend/config.php");
require_once("backend/Classes/Menu.php");
$menu = new Menu($con);

?>

<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">
                    </h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Main content -->
    <div class="content">
    <input type="text" autocomplete="off" name="searchTags" id="searchTags" placeholder="Search" />
                        <div class="col-md-12">
                      
                                
                            </div>
                            <!-- /.card-header -->
                            <div id='menuFull'>
                            <div class="container">
                                <div class="row mt-5">
                                    <div class="col">
                                <table class="table">
                                    <thead class="table">
                                        <tr>

                                            <th>#</th>
                                            <th>İsim</th>
                                            <th>Soyisim</th>
                                            <th>Okul</th>
                                            <th>No</th>


                                        </tr>

                                        <tbody class="sortable" id="result">
                                        <?php echo $menu->showAllMenu();  ?>

                                          </thead>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>

            </div>

            <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
            <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
              
<script src="js/search.js"></script>
            <!-- /.row -->
      <!-- /.container-fluid -->

    <!-- /.content -->

<!-- /.content-wrapper -->
