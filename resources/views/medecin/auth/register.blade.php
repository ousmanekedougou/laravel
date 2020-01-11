@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">{{ __('Inscription des medecins') }}</div>

<div class="card-body">
<form method="POST" action="{{ route('register-medecin') }}" enctype="multipart/form-data">
@csrf
<!-- nom -->
<div class="form-group row">
<div class="col-md-6">
<label for="name" class="">{{ __('Nom') }}</label>
<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

@error('name')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
<!-- fin nom -->


<!-- prenom -->
<div class="col-md-6">
<label for="prenom" class="">{{ __('Prenom') }}</label>
<input id="prenom" type="text" class="form-control @error('name') is-invalid @enderror" name="prenom" value="{{ old('name') }}" required autocomplete="name" autofocus>
@error('prenom')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
<!-- fin prenom -->
</div>


<!-- email -->
<div class="form-group row">
<div class="col-md-12">
<label for="email" class="">{{ __('Address e-mail') }}</label>
<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

@error('email')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>
<!-- fin email -->

<!-- password -->
<div class="form-group row">
<div class="col-md-6">
<label for="password" class="">{{ __('Mot de passe') }}</label>
<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

@error('password')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
<!-- fin password -->

<!-- confirm password -->
<div class="col-md-6">
<label for="password-confirm" class="">{{ __('Confirmation du mot de passe') }}</label>
<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
</div>
<!-- fin confirm password -->
</div>


<div class="form-group row">
<!-- phone -->
<div class="col-md-6">
<label for="phone" class="">{{ __('Telephone') }}</label>
<input id="pone" type="number" class="form-control @error('name') is-invalid @enderror" name="phone" value="{{ old('name') }}" required autocomplete="name" autofocus>

@error('phone')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
<!-- fin phone -->
<!-- specialite -->
<div class="col-md-6">
<label for="specialite" class="">{{ __('Specialite') }}</label>
<!-- <input id="specialite" type="number" class="form-control @error('name') is-invalid @enderror" name="specialite" value="{{ old('name') }}" required autocomplete="name" autofocus> -->
<select id="specialite" class="form-control @error('name') is-invalid @enderror" name="specialite" value="{{ old('name') }}" required autocomplete="name" autofocus>
        @foreach($recup_spec as $spec)
    <option value="{{$spec->id}}">{{$spec->name}}</option>
    @endforeach
</select>
@error('specialite')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
<!-- fin specialite -->

</div> 


<div class="form-group row">
<!-- adresse -->
<div class="col-md-6">
<label for="adresse" class="">{{ __('Lieu de travail') }}</label>
<input id="adresse" type="text" class="form-control @error('name') is-invalid @enderror" name="adresse" value="{{ old('name') }}" required autocomplete="name" autofocus>

@error('adresse')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
<!-- adresse -->
<!-- image -->
<div class="col-md-6">
<label for="image" class="">{{ __('Image') }}</label>
<input id="image" type="file" class="form-control @error('name') is-invalid @enderror" name="image" value="{{ old('name') }}" required autocomplete="name" autofocus>

@error('image')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
<!-- images -->
</div>



<div class="form-group row mb-0">
<div class="col-sm-6 ">
<button type="submit" class="btn btn-primary btn-block">
S'inscrire
</button>
</div>
<div class="col-sm-6 ">
<button type="reset" class="btn btn-success btn-block">
{{ __('Reinitialiser') }}
</button>
</div>
</div>

</form>
</div>
</div>
</div>
</div>
</div>
@endsection
