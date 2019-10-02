  @include('header')

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
  
   <section class="login_content">
            <form method="POST" action="{{ route('register') }}" >
                 @csrf
              <h1>Nouveau compte</h1>
              <div>
                <input name="name" value="{{ old('name') }}" type="text" class="form-control" placeholder="Nom d'utilisateur'" required="" />
               @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
              </div>
              <div>
                <input name="email" value="{{ old('email') }}" type="email" class="form-control" placeholder="Email" required="" />
              @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
              </div>
              <div>
                <input name="password" type="password" class="form-control" placeholder="Passeword" required="" />
               @if ($errors->has('password'))
                                    <span class="invalid-feedback">aan
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
              </div>
               <div>
                <input name="password_confirmation" type="password" class="form-control" placeholder="Confirmation du Passeeword" required="" />
              </div>
              <div>
                 plus
               </div>
               <div>
                <input name="raison_sociale" value="{{ old('raison_sociale') }}" type="text" class="form-control" placeholder="Raison sociale" required="" />
              
              </div>
               <div>
                <input name="tel" value="{{ old('tel') }}" type="text" class="form-control" placeholder="Telephone" required="" />

              </div>
               <div>
                <input name="site_web" value="{{ old('site_web') }}" type="text" class="form-control" placeholder="Site web" required="" />
             
              </div>

               <div>
                <input name="lat" value="{{ old('lat') }}" type="text" class="form-control" placeholder="lat" required="" />
                <input name="lng" value="{{ old('lng') }}" type="text" class="form-control" placeholder="lng" required="" />

              </div>

              <div>
                <input class="btn btn-default submit" value="Enregistrer" type="submit">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Avez-vous déja un compte ?
                  <a href="{{ route('login') }}" class="to_register"> Log in </a>
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
     
    </div>
  </body>
</html>