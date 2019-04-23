@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 100px;
  }
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</style>
<div class="card uper">
  <div class="card-header">
    Add Share
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
	<div class="wrapper">
      <form method="post" action="{{ route('shares.store') }}">
	  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
          <div class="form-group">
              @csrf
              <label for="name">Oznaka dvorane:</label>
              <input type="text" class="form-control" name="oznDvorana"/>
          </div>
          <div class="form-group">
              <label for="price">Kapacitet:</label>
              <input type="text" class="form-control" name="kapacitet"/>
          </div>
          <div class="form-group">
              @csrf
              <label for="name">Šifra predmeta:</label>
              <input type="text" class="form-control" name="sifPred"/>
          </div>
		  <div class="form-group">
              @csrf
              <label for="name">Kratica predmeta:</label>
              <input type="text" class="form-control" name="kratPred"/>
          </div>
		  <div class="form-group">
              @csrf
              <label for="name">Naziv predmeta:</label>
              <input type="text" class="form-control" name="nazPred"/>
          </div>
		  <div class="form-group">
              @csrf
              <label for="name">Organizacijska jedinica:</label>
              <input type="text" class="form-control" name="sifOrgjed"/>
          </div>
		  <div class="form-group">
              @csrf
              <label for="name">Upisano studenata:</label>
              <input type="text" class="form-control" name="upisanoStud"/>
          </div>
		  <div class="form-group">
              @csrf
              <label for="name">Broj sati tjedno:</label>
              <input type="text" class="form-control" name="brojSatiTjedno"/>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
	</div>  
  </div>
</div>
@endsection