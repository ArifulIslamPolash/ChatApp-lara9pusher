
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Chat App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  </head>
  <body>
    <h1>RealTime Chat App</h1>

    <div class="app">
        <div class="row">

            <div class="col-sm-6 offset-sm-3 my-2">
                <input type="text" class="form-control" placeholder="Enter your ........." name="username" id="username">
            </div>
            <div class="col-sm-6 offset-sm-3">
                <div class="box box-primary direct-chat direct-chat-primary">

                    <div class="box-body">
                        <div class="direct-chat-message" id="messages"></div>
                    </div>

                    <div class="box-footer">

                        <form action="#" method="post" id="message">

                            <div class="input-group">
                                <input type="Text" name="message" id="message" placeholder="Type message ......." class="form-control">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary btn-flat" type="submit" id="send-message">Send</button>
                                </span>
                            </div>


                        </form>

                    </div>

                </div>
            </div>


        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
        $.ajaxSetup({
            headers:
{
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
     });
    </script>
  </body>
</html>
