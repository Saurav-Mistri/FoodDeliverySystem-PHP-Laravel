@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if(Session::has('status'))
        <div class="alert alert-success float-right" style="margin-left:200px; position:fixed; z-index:1; margin-top:60px; margin-left:76%"><span class="glyphicon glyphicon-ok"></span><em> {{ Session::get('status') }}</em></div>
    @endif

    <main>
        <section class="login_part section_padding pt-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6 m-auto border">
                        <div class="login_part_form">
                            <div class="login_part_form_iner">
                                <h3 class="text-danger">Online Tiffin Service |<small class="text-primary"> New Password </small> </h3>
                                <form class="row contact_form" action="{{route('savepassword')}}" method="POST">
                                {{csrf_field()}} 
                                    
                                    @if(Session::has('message'))       
                                        <div class="alert alert-info">        
                                        {{Session::get('message')}}
                                        </div>     
                                    @endif
                                    
                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control" id="userName" name="password"
                                            placeholder="new password">
                                    </div>
                                    <div class="col-md-12 form-group p_star">
                                        <input type="password" class="form-control" id="userPassword" name="password_confirmation"
                                            placeholder="confirm Password">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="submit"  value="change password" class="btn">
                                        
                                    </div>
                                     
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script type="text/javascript">
        $(document).ready(function() {
      window.history.pushState(null, "", window.location.href);        
      window.onpopstate = function() {
          window.history.pushState(null, "", window.location.href);
      };
  });
</script>