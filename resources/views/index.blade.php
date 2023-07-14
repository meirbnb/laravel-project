<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task1</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="wrapper">
        <h1>New Message</h1>
        <p>
            @if ($errors->any())
                    @foreach ($errors->all() as $error)

                        <div class="error">{{ $error }}</div>

                    @endforeach
            @endif
        </p>
        <form action="{{ route('message.save') }}" method="post">
            @csrf
            @method('post')
            <p>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" placeholder="Enter your name"/>
            </p>
            <p>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" placeholder="Enter your email"/>
            </p>
            <label for="message">Message:</label>
            <p>
                <textarea name="message" id="message" cols="20" rows="5" placeholder="Enter your message"></textarea>
            </p>
            <p><input type="submit" value="Let It Fly"></p>
        </form>
        <h2>Message History:</h2>
        <div class="messages">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Created</th>
                </tr>
                    @foreach($messages as $message)
                        <tr>
                            <td>{{$message->name}}</td>
                            <td>{{$message->email}}</td>
                            <td>{{$message->message}}</td>
                            <td>{{$message->created_at}}</td>
                        </tr>
                    @endforeach
            </table>
        </div>
    </div>
</body>
</html>