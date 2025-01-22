@extends('layout')

@section('content')
<div class="reset-password-container">
    <h2>Reset Password</h2>
    <form action="/reset-password" method="POST">
        @csrf
        <label for="current_password">Current Password:</label>
        <input type="password" id="current_password" name="current_password" required>
        
        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" required>
        
        <label for="confirm_password">Re-Enter Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        
        <button type="submit">Submit</button>
    </form>
</div>
@endsection
