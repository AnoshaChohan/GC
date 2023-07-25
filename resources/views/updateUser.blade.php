<html>
<head>
    <title>Update User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .update-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .update-box {
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 400px;
            width: 100%;
        }

        .update-header {
            text-align: center;
        }

        .update-header h2 {
            margin: 0;
            font-size: 24px;
            color: #333333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-size: 14px;
            color: #333333;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        select {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #e1e1e1;
            border-radius: 4px;
        }

        select {
            appearance: none;
            background-color: #f5f5f5;
        }

        select option {
            background-color: #ffffff;
        }

        button {
            display: block;
            width: 100%;
            padding: 12px;
            font-size: 16px;
            color: #ffffff;
            background-color: #3490dc;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="update-container">
        <div class="update-box">
            <div class="update-header">
                <h2>Update User</h2>
            </div>
            <form action="/updateUser1" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" value="{{$data->name}}">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" value="{{$data->email}}">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" value="{{$data->password}}">
                </div>
                <div class="form-group">
                    <label for="phone_number">Phone Number:</label>
                    <input type="text" name="phone_number" value="{{$data->phone_number}}">
                </div>
                <div class="form-group">
                    <label for="user_type">User Type:</label>
                    <select name="user_type" id="user_type">
                        <option value="nonpaiduser" {{ $data->user_type === 'nonpaiduser' ? 'selected' : '' }}>Free User</option>
                        <option value="subscriber" {{ $data->user_type === 'subscriber' ? 'selected' : '' }}>Subscriber</option>
                    </select>
                </div>
                <input type="hidden" name="id" value="{{$data->id}}">
                <button type="submit">Update</button>
            </form>
        </div>
    </div>
</body>
</html>


<!-- <h2>Update User</h2>

    

    <form action="/updateUser1" method="POST">
    @csrf

        <input type="hidden" name="id"  value="{{$data->id}}">
        <input type="text" name="name"  value="{{$data->name}}" >

        <input type="email" name="email"  value="{{$data->email}}" >

        <input type="password" name="password"  value="{{$data->password}}" >

        <input type="text" name="phone_number"  value="{{$data->phone_number}}" >

        <label for="user_type">User Type:</label>
        <select name="user_type" id="user_type">
        <option value="nonpaiduser" {{ $data->user_type === 'nonpaiduser' ? 'selected' : '' }}>Free User</option>
        <option value="subscriber" {{ $data->user_type === 'subscriber' ? 'selected' : '' }}>Subscriber</option>
        </select>

        <button type="submit" >Update</button>
    </form> -->
