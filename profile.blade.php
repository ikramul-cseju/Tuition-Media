<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> User Profile</title>
    <link rel="stylesheet" href="/css/profilestyle.css"> <!-- profilestyle.css -->
  </head>
  <body>
    <div class="center">
      <h1>User Profile</h1>
      <li>
        <a href="{{ route('page/user/profile') }}"> <!-- user_profile -->
            <i class="feather icon-user"></i> Profile
        </a>
      </li>
    </div>

    <script src="script.js"></script>
  </body>
</html>
