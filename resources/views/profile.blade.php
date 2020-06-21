@section('content')

@extends('layouts.app')

@section('content')

<div class="container">
    
    <img src="/img/avatars/{{ $user->avatar }}" style="width:250px; height:250px; float:left; border-radius:50%; margin-right:25px">
    <h2>{{ $user->name }}'s profile</h2>
    <form enctype="multipart/form-data" action="/profile" method="POST">
    <label>Update profile image</label>

      <input type="file" name="avatar">
       <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" class="pull-right btn btn-sm btn-primary">
    </form>
    @role('superadministrator')
    
    <a href="{{ route('export_excel.excel') }}" class="btn btn-success">Export to Excel</a>
    </div>
    <div class="table-responsive">
    <table class="table table-striped table-bordered">
     <tr>
      <td>User Name</td>
      <td>Email</td>
      <td>User since</td>
     
     </tr>
     @foreach($user_data as $User)
     <tr>
      <td>{{ $User->name }}</td>
      <td>{{ $User->email }}</td>
      <td>{{ $User->created_at }}</td>

     </tr>
     @endforeach
    </table>
   </div>
   @endrole
</div>
@endsection
