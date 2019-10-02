
          

   
@include('header')

 <!-- 
    <link href="{{ asset('vendors/animate.css/animate.min.css') }}" rel="stylesheet">

    Animate.css -->


<body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="{{ route('login') }}">

                  @csrf
              <h1>S'authentifier</h1>
              <div>
                <input type="text" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus/>

               
              </div>
              <div>
                <input type="password" name="password" type="password" class="form-control" placeholder="Password" required="" />
                 @if ($errors->has('password') || $errors->has('email') )
                                    <span class="invalid-feedback">
                                        <strong>Vérifiez vos coordonées !</strong>
                                    </span>
                                @endif
              </div>
              <div>
                <input class="btn btn-default submit" value="login" type="submit">
                <a class="reset_pass" href="#"> Avez-vous oublié votre mot de passe ?</a>

              </div>
                              <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}


              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Vous etes nouveau ?
                  <a href="{{ route('register')}}" class="to_register"> Créer un compte </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gc Cleaner</h1>
                  <p>©2016 All Rights Reserved. Gc Cleaner</p>
                </div>
              </div>
            </form>
          </section>
        </div>

  
       

