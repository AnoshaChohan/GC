<form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email -->
    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
    </div>

    <!-- Password -->
    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
    </div>

    
    <!-- Remember Me -->
    <div>
        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label for="remember">Remember Me</label>
    </div>
    <div>
    <!-- <label for="User_Type">Dropdown 1</label>
        <select name="User_Type" id="dropdown1">
            <option value="unpaiduser">Free_User</option>
            <option value="subscriber">Subscriber </option>
           
        </select>
</div> -->
    <!-- Submit Button -->
    <button type="submit">Log In</button>
</form>
