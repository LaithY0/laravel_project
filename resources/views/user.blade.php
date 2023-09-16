@extends('layout.master')

<head>

  <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
}

.profile-container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    text-align: center;
    margin-top: 10%;
}

.profile-image {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
    margin-bottom: 20px;
}

.profile-name {
    font-size: 24px;
    font-weight: bold;
}

.profile-email {
    font-size: 16px;
    color: #777;
    margin-bottom: 10px;
}

.profile-phone {
    font-size: 16px;
    color: #777;
    margin-bottom: 20px;
}

.edit-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
}

.edit-button:hover {
    background-color: #0056b3;
}
  </style>
</head>


@section('title' , 'user')


@section('page')



  


    @if (session('name'))
    @foreach ($user as $user)
    
      <div class="profile-container">
          <h2>Profile </h2>
          <img src="myimg/{{$user->photo}}" alt="User Photo" class="profile-image">
          <div class="profile-name">{{$user->Fname}}  {{$user->Lname}}</div>
            <div class="profile-email">{{$user->email}}</div>
            <div class="profile-phone">{{$user->phone}}</div>
            <form  action="{{ url('/user/' . $user->id . '/edit/') }}" method="POST">
              @csrf
              @method('put')
              <input type="hidden" name="user_id" value="{{ $user->id }}">
              <input type="submit" value="Edit" class="edit-button">
            </form>
        </div>

  @endforeach
  <br>
  <div>
    @foreach ($reservations as $reservation)
      
    <table class="table table-striped table-dark">
        <thead>
            <tr>

              <th scope="col">Tour Number </th>
              <th scope="col">Tour name </th>
              <th scope="col">Data of the tour </th>
              <th scope="col">Tour price </th>
              <th scope="col">Days of tour </th>
              <th scope="col">Number of the clients </th>
              <th scope="col">Tour photo </th>
      
            </tr>
          </thead>
          <tbody>


        
            <tr>
                <td>{{$reservation->id}}</td>
                <td>{{$reservation->trip->trip_name}}</td>
                <td>{{$reservation->trips_days}}</td>
                <td>{{$reservation->trip->price}}</td>
                <td>{{$reservation->trip->days}}</td>
                <td>{{$reservation->trip->clients}}</td>
                <td><img src="{{$reservation->trip->photo}}" alt="photo" height="120px"></td>
            </tr>
          </tbody>
    </table>    
    

  </div>

@endforeach
    @endif
   
 

@endsection
    
