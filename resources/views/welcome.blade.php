<!DOCTYPE html>
<html>
    <head>
        <title>Overcart Assignment</title>

        <!-- <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css"> -->

        <style>
            html, body {
                height: 100%;
            }

            body {
                padding: 0;
                width: 100%;
                /*display: table;*/
                font-weight: 100;
                font-family: 'Times New Roman';
                /*align-content: center;*/
            }

            .container {
                position: absolute;
                height: 200px;
                width: 400px;
                margin:  -400px 0 0 -200px;
                top: 50%;
                left: 50%;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 20px;
            }
        </style>
    </head>
    <body>
      <div class="container">
        @foreach ($result as $person)
          <a href="{{URL::to('about',array('id'=>$person['guid']))}}">
            <div class="title">
              Title: {{ $person['title'] }}<br />
            </div>
            Author: {{ $person['author'] }} <br /> 
            Date: {{$person['date']}} <br />
        </a>
        <hr>
        <br/>
        @endforeach
      </div>
    </body>
</html>
