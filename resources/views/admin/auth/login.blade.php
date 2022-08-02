@extends('admin.layouts.index')
@section('contents')
<div class="account-pages"></div>
    <div class="clearfix"></div>
    <div class="wrapper-page">
       <div class=" card-box">
        <div class="panel-heading"> 
            <h3 class="text-center"> Masuk <strong class="text-custom">PT. Putra Kalma Raya</strong> </h3>
        </div> 

        <div class="panel-body">
            <form class="form-horizontal m-t-20" method="post" action="verifiy-login-admin.php" >

                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" name="fusername" placeholder="Username">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" required="" name="fpassword" placeholder="Password">
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox-signup" type="checkbox">
                            <label for="checkbox-signup">
                                Remember me
                            </label>
                        </div>
                        
                    </div>
                </div>
                
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-default btn-block text-uppercase waves-effect waves-light" name="login" type="submit">Log In</button>
                    </div>
                </div>

                <div class="form-group m-t-30 m-b-0">
                    <div class="col-sm-12">
                        <a href="page-recoverpw.html" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                    </div>
                </div>
            </form> 
            
        </div>   
    </div> 
</div>
@endsection