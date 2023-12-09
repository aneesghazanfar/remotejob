<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <link href="{{ asset('/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/mediaqueries.css') }}">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

</head>

<body>
  <div class="d-flex w-100">
  @include('owner.slidebar')
    <div class="rightbar">


      <body>
      <section class="wrapper pe-lg-4 pe-md-0 pe-sm-0">
      <div class="wrapper-inner p-3">

      <form action="{{ route('add.branch') }}" method="POST" enctype="multipart/form-data">

        @csrf        
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address"><br><br>

        <label for="phone_no">Phone Number:</label>
        <input type="text" id="phone_no" name="phone_no"><br><br>

        <label for="city">City:</label>
        <select id="city" name="city">
            @foreach($cities as $city)
            <option value="{{ $city->id }}">{{ $city->name }}</option>
            @endforeach
            <!-- Add more options as needed -->
        </select><br><br>

        <label for="user">User:</label>
        <select id="user" name="user">
            @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
            <!-- Add more options as needed -->
        </select><br><br>

        <label for="onlineorder">Online Order:</label>
        <input type="checkbox" value="1" id="onlineorder" name="onlineorder"><br><br>

        <label for="dinning">Dining:</label>
        <input type="checkbox" value="1" id="dinning" name="dinning"><br><br>

        <input type="submit" value="Submit">
    </form>
    </div>
      </section>
</body>
</html>
