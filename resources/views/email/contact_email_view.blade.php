{{-- Illuminate/Foundation/Exceptions/views --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Contact Email</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <style>
  html, body {
    background-color: #fff;
    color: #636b6f;
    font-family: 'Raleway', sans-serif;
    font-weight: 100;
    height: 100vh;
    margin: 0;
  }

  .full-height {
    height: 100vh;
  }

  .flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
  }

  .position-ref {
    position: relative;
  }

  .content {
    text-align: center;
  }

  .title {
    font-size: 26px;
    padding: 20px;
  }

  .email_content {
      font-size: 15px;
      padding: 20px;
      line-height: 1.5;
  }

  .email_message {
      font_size: 13px;
      padding: 20px;
      word-break: break-all;
  }
</style>
</head>
<body>
  <div class="flex-center position-ref full-height">
    <div class="content">
      <div class="title">
        Contact request E-mail
      </div>
      <div class="email_content">
        <div> Name: {{ $contact_name }} </div>
        <div> E-mail: {{ $contact_email }} </div>
        <div> Phone: {{ $contact_phone }} </div>
      </div>
      <div class="email_message">
        {{ $contact_message }}    
      </div>
    </div>
  </div>
</body>
</html>
