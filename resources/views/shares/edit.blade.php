@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Edit Share
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
      <form method="post" action="{{ route('shares.update', $user->sifPred) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Share Name:</label>
          <input type="text" class="form-control" name="sifPred" value="{{ $user->sifPred }}" />
        </div>
        <div class="form-group">
          <label for="quantity">Share Quantity:</label>
          <input type="text" class="form-control" name="nazPred" value="{{ $user->nazPred }} "/>
        </div>
		
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection