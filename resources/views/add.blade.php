<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Laravel Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://bootswatch.com/4/journal/bootstrap.css" media="screen">
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://bootswatch.com/_assets/css/custom.min.css">
    <!-- Datatable dependecies -->
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  
    <!---->
  </head>
  <body>

<div class="container">
  <div class="col-lg-10 offset-lg-1">
    <form id="addform" class="bs-component" method="POST" action="{{action('TestController@store')}}" accept-charset="UTF-8" >
      @csrf

      <div class="form-group">
        <label class="form-control-label">Name</label>
        <input type="text" value="" class="form-control " id="name" name="name">
        <div class="valid-feedback"></div>
      </div>

      <div class="form-group ">
        <label class="form-control-label">Email</label>
        <input type="text" value="" class="form-control " id="email" name="email">
        <div class="invalid-feedback"></div>
      </div>

      <div class="form-group ">
        <label class="form-control-label">Password</label>
        <input type="password" value="" class="form-control info" id="password" name="password">
        <div class="invalid-feedback"></div>
      </div>
    </form>
  </div>
</div>
</body>
</html>