<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task1</title>
</head>
<body>
    <h1>New Message</h1>
    <p><span class="error">
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach
            </ul>
        @endif
    </span></p>
    <form action="{{ route('message.save') }}" method="post">
        @csrf
        @method('post')
        <p>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" placeholder="Enter your name"/>
        </p>
        <p>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Enter your email"/>
        </p>
        <label for="message">Message:</label>
        <p>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </p>
        <p><input type="submit" value="Send message"></p>
    </form>
    <h1>Message History</h1>
    <div class="messages">
        <table border="1px">
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
</body>
</html>