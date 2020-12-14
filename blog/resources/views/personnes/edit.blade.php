@extends('layouts.app')
@section('content')
 <div class="row">
 <div class="col-lg-12 margin-tb">
 <div class="pull-left"><h2>Edit personne</h2></div>
 <div class="pull-right">
 <a class="btn btnprimary" href="" title="Go back"> <i class="fas fa-backward "></i> </a>
 </div> </div> </div>
 @if ($errors->any())
 <div class="alert alert-danger">
 <strong>Error!</strong>
 <ul> @foreach ($errors->all() as $error)
 <li></li>
 @endforeach </ul> </div>
 @endif
 <form action="/update/{{$Personne->id}}" method="POST">
 @csrf
 @method('PUT')
 <div class="row">
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>nom:</strong>
 <input type="text" name="nom" value="{{$Personne-
>nom}}" class="form-control" placeholder="Name">
 </div> </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>prenom</strong>
 <textarea class="formcontrol" style="height:50px" name="prenom"
 placeholder="prenom">{{$Personne-
>prenom}}</textarea>
 </div> </div>
 <div class="col-xs-12 col-sm-12 col-md-12">
 <div class="form-group">
 <strong>age</strong>
 <input type="number" name="age" class="formcontrol" placeholder=""
 value="{{$Personne->age}}">
 </div>
 </div>
 <input type="hidden" name="idh" value="{{$Personne->id}}">
 <div class="col-xs-12 col-sm-12 col-md-12 text-center">
 <button type="submit" class="btn btnprimary">Submit</button>
 </div> </div></form>
@endsection