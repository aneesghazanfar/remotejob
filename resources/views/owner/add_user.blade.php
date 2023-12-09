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

      <form action="{{ route('add_user') }}" method="POST" enctype="multipart/form-data">

        @csrf        
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <label for="phone_no">Phone Number:</label>
        <input type="text" id="phone_no" name="phone_no"><br><br>

        <label for="role">role:</label>
        <select id="role" name="role">
            @foreach($roles as $role)
            <option value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach
            <!-- Add more options as needed -->
        </select><br><br>

        <label for="branch">branch:</label>
        <select id="branch" name="branch">
            @foreach($branches as $branch)
            <option value="{{ $branch->id }}">{{ $branch->name }}</option>
            @endforeach
            <!-- Add more options as needed -->
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
    </div>
      </section>
</body>
</html>
