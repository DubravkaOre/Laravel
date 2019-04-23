@extends('layout')

@section('content')
<style>
  .uper {
    margin-top: 100px;
  }
        .wrapper{
            width: 1000px;
            margin: 0 auto;
        }
    </style>
</style>
<head>
<title>Pregled položenih ispita</title>
</head>
<div class="card uper">
  <div class="card-header">
    Add Share
  </div>
  <div class="wrapper">
  <div class="card-body">
<body>
<table class="table table-striped">
<thead>
<tr>
  <th scope="col">Šifra predmeta</th>
  <th scope="col">Upisano studentata</th>
  <th scope="col">Naziv predmeta</th>
  <th scope="col"></th>
  <th scope="col"></th>
</tr>
</thead>
@foreach ($users as $user)
 </tbody>
<tr>
<td>{{ $user->sifPred }}</td>
<td>{{ $user->ocjena }}</td>
<td>{{ $user->nazPred }}</td>
<td><a href="{{ route('shares.edit',$user->sifPred)}}" class="btn btn-primary">Edit</a></td>
<td>
    <form action="{{ route('shares.destroy', $user->sifPred)}}" method="post">
    @csrf
    @method('DELETE')
	<button class="btn btn-danger" type="submit">Delete</button>
    </form>
</td>
</tr>
</tbody>
@endforeach
</table>
{{ $users->links() }}
</body>
</div>
</div>
</div>
@endsection