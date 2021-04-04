@extends('students.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('students.create') }}"> Create New Student</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>CIN</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Date de naissance</th>
            <th>Sexe</th>
            <th>Etablissement</th>
            <th>E-mail</th>
            <th>Numero de telephone</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ $student->CIN }}</td>
            <td>{{ $student->Nom }}</td>
            <td>{{ $student->Prenom }}</td>
            <td>{{ $student->DateN }}</td>
            <td>{{ $student->Sexe }}</td>
            <td>{{ $student->Etablissement }}</td>
            <td>{{ $student->Email }}</td>
            <td>{{ $student->NumTel }}</td>
            <td>
                <form action="{{ route('students.destroy',$student->CIN) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('students.show',$student->CIN) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('students.edit',$student->CIN) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $students->links() !!}
      
@endsection