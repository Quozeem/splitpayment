
<form method="POST" action="{{ route('pages.login')}}">
                   

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                            <div class="col-md-6">
         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('password') }}</label>

                            <div class="col-md-6">
                               <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                               
                            
                <button type='submit' id='submit' class='btn btn-primary' disabled="disabled">
Login
                                </button>
                               
                                    <a class="btn btn-link" href="{{ route('resetpassword') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                             
                                
                            </div>
                        </div>
                    </form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
$('input').on('keyup', isValid);

function isValid() {
    let requiredInputs = $('input[required]');
  let emptyField = false;
  $.each(requiredInputs, function() {
    if( $(this).val().trim().length == 0 ) {
        emptyField = true;
        return false;
    }
  });
  if(!emptyField) {
    $('button').attr('disabled', false);
  }else{
    $('button').attr('disabled', true);
  }
}
</script>
