
<!DOCTYPE html>
<html  lang="eng">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Panel</title>
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"  />
<link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />
<link type="text/css" rel="stylesheet" href="css/style.css" />
</head>
<body>
     <div class="container-fluid header_full"> 
                <div class="container header pd0">
                      <div class="row">
                      
                      </div>
                </div>
      </div>
   
      
      
    
               <div class="col-md-9 Admin_part pd0b">
               <div class="col-md-12">
               <form class="form-horizontal" action="" method="">
                     <div class="panel panel-primary" >
                          <div class="panel-heading">
                               <div class="col-lg-9 panel_title">
                               Information
                               </div>
                               <div class="col-md-3 text-right">
                    <a href="table.html" class="btn btn-sm btn btn-primary"><i class="fa fa-plus-circle"></i>Payment History</a>
                               </div>
                               <div class="clearfix"></div>
                          </div>
                          <div class="panel-body">
                               <div class="col-md-1"></div>
                               
                                    <div class="col-md-9">
                               <table class="table table-hover table-responsive view_table_cus">
                                           <tr>
                                               <th>Name</th>
                                               <td>:</td>
                                               <td>"<?php echo $c_name;?>"</td>
                                           </tr>
                                            <tr>
                                               <th>time_in</th>
                                               <td>:</td>
                                               <td>"<?php echo $c_in;?>"</td>
                                           </tr>
                                           <tr>
                                               <th>Time out</th>
                                               <td>:</td>
                                               <td>"<?php echo $c_out;?>"</td>
                                            </tr>
                                            <tr>
                                               <th>Cost</th>
                                               <td>:</td>
                                               <td>"<?php echo $c_cost;?>"</td>
                                            </tr>
                                            <tr>
                                               <th>Registration date</th>
                                               <td>:</td>
                                               <td>15-05-2017 10:45 A.M</td>
                                           </tr>
                               </table>
                               </div>
                               <div class="col-md-2"></div>
                          </div>
                          <div class="panel-footer">
                               <div class="col-sm-4">
                                    <span class="label label-primary">PDF</span>
                                    <span class="label label-info">PRINT</span>
                                 </div>
                                 <div class="clearfix"></div>
                                 </div>
                          </div>
                          </form>
                          </div>
               </div><!--admin part ends----->
            </div><!---row end--->
      </div><!----container fluid end----->
      
      <!---footer---->
      <div class="container-fluid footer_full">
           <div class="container footer>
                <div class="row">
                
                </div>
           </div>
      </div>
      
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>
</html>
