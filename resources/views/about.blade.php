<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{$details['title']}}</title>
    <style>
        .container {
                position: absolute;
                height: 200px;
                width: 400px;
                margin:  -200px 0 0 -200px;
                top: 50%;
                left: 50%;
        }
    </style>
  </head>
  <body>
    <div class="container">
    <table border="1" >
        <tr>
            <td>Id</td>
            <td>{{ $details['guid'] }}</td>
        </tr>
        <tr>
            <td>Author</td>
            <td>{{ $details['author'] }}</td>
        </tr>
        <tr>
            <td>Title</td>
            <td>{{ $details['title'] }}</td>
        </tr>
        <tr>
            <td>Date</td>
            <td>{{ $details['date'] }}</td>
        </tr>
        <tr>
            <td>Other Data</td>
            <td>{!!$details['body']!!}</td>
        </tr> 
      <!-- <li>{{ $details['guid'] }}</li>
      <li>{{ $details['author'] }}</li>
      <li>{{ $details['title'] }}</li>
      <li>{{ $details['date'] }}</li>
      <li>{{ $details['body'] }}</li> -->
    </table>
</div>
    <br>
    <br>
  </body>
</html>
