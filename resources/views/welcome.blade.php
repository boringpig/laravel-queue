<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-4">
                    <h1>Send Mail</h1>
                    <form action="{{ url('create') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="subject">Subject:</label>
                            <input type="text" class="form-control" name="subject" id="subject">
                        </div>
                        <div class="form-group">
                            <label for="sender_name">Sender Name:</label>
                            <input type="text" class="form-control" name="sender_name" id="sender_name">
                        </div>
                        <div class="form-group">
                            <label for="sender_email">Sender Email:</label>
                            <input type="text" class="form-control" name="sender_email" id="sender_email">
                        </div>
                        <div class="form-group">
                            <label for="recipient_name">Recipient Name:</label>
                            <input type="text" class="form-control" name="recipient_name" id="recipient_name">
                        </div>
                        <div class="form-group">
                            <label for="recipient_email">Recipient Email:</label>
                            <input type="text" class="form-control" name="recipient_email" id="recipient_email">
                        </div>
                        <div class="form-group">
                            <label for="content">Content:</label>
                            <textarea name="content" id="content" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
