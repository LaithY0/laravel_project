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

    
<div class="profile-container">
    <h2>Profile </h2>
    <img src="{{ asset('storage/' . $user->photo) }}" alt="User Photo" class="profile-image">
    <div class="profile-name">{{$user->name}}</div>
      <div class="profile-email">{{$user->email}}</div>
      <div class="profile-phone">{{$user->phone}}</div>
      <a href="edit" class="edit-button">Edit</a>
  </div>


@endsection
    
