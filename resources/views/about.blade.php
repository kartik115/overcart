<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{$details['title']}}</title>
  </head>
  <body>
    <table border="1" style="width:70%">
        <tr>
            <td width="20%">Id</td>
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
    <br>
    <br>
  </body>
</html>
