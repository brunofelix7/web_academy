<?php
  require('../config/Session.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="../../assets/img/favicon.ico"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>We Academy</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../../assets/css/animate.min.css" rel="stylesheet"/>
  <link href="../../assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
  <link href="../../assets/css/demo.css" rel="stylesheet" />
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <link href="../../assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
  <body>
  <div class="wrapper">
    <!-- Menu -->
    <div class="sidebar" data-color="purple" data-image="../../assets/img/sidebar-5.jpg">
    <div class="sidebar-wrapper">
        <div class="logo">
           <a href="#" class="simple-text">Web Academy</a>
        </div>
        <ul class="nav">
           <li class="active">
             <a href="#">
                 <i class="pe-7s-user"></i>
                 <p>Alunos</p>
             </a>
           </li>
           <li>
             <a href="#">
                 <i class="pe-7s-note2"></i>
                 <p>Disciplinas</p>
             </a>
           </li>
        </ul>
     	</div>
     </div>
     <div class="main-panel">
       <nav class="navbar navbar-default navbar-fixed">
         <div class="container-fluid">
           <div class="navbar-header">
               <a class="navbar-brand" href="#"><?php echo 'Olá, ' . Session::getLoggedUser() ?> </a>
           </div>
            <div class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li>
                  <a href="#">
                    <p>Log out</p>
                  </a>
                </li>
			          <li class="separator hidden-lg hidden-md"></li>
              </ul>
          </div>
        </div>
      </nav>

      <!-- Main -->
      <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="header">
                <h4 class="title">Edit Profile</h4>
              </div>
                <div class="content">
                  <form>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label>Company (disabled)</label>
                            <input type="text" class="form-control" disabled placeholder="Company" value="Creative Code Inc.">
                        </div>
                      </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label>Username</label>
                              <input type="text" class="form-control" placeholder="Username" value="michael23">
                          </div>
                        </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                          </div>
                    </div>
                    <div class="row">
                     <div class="col-md-6">
                         <div class="form-group">
                             <label>First Name</label>
                             <input type="text" class="form-control" placeholder="Company" value="Mike">
                         </div>
                     </div>
                     <div class="col-md-6">
                         <div class="form-group">
                             <label>Last Name</label>
                             <input type="text" class="form-control" placeholder="Last Name" value="Andrew">
                         </div>
                     </div>
                   </div>
                   <div class="row">
                       <div class="col-md-12">
                           <div class="form-group">
                               <label>Address</label>
                               <input type="text" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-md-4">
                           <div class="form-group">
                               <label>City</label>
                               <input type="text" class="form-control" placeholder="City" value="Mike">
                           </div>
                       </div>
                       <div class="col-md-4">
                           <div class="form-group">
                               <label>Country</label>
                               <input type="text" class="form-control" placeholder="Country" value="Andrew">
                           </div>
                       </div>
                       <div class="col-md-4">
                           <div class="form-group">
                               <label>Postal Code</label>
                               <input type="number" class="form-control" placeholder="ZIP Code">
                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-md-12">
                           <div class="form-group">
                               <label>About Me</label>
                               <textarea rows="5" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                           </div>
                       </div>
                   </div>
                   <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

  <!-- FOOTER -->
  <footer class="footer">
     <div class="container-fluid">
         <p class="copyright pull-left">
             &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">Pós em Desenvolvimento de Aplicações para Web</a>, Fundamentos da Programação PHP OO
         </p>
     </div>
  </footer>
  </div>
 </div>
</body>

  <script src="../../assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
 	<script src="../../assets/js/bootstrap.min.js" type="text/javascript"></script>
 	<script src="../../assets/js/chartist.min.js"></script>
  <script src="../../assets/js/bootstrap-notify.js"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
 	<script src="../../assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
 	<script src="../../assets/js/demo.js"></script>
</html>
