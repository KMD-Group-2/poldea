<h1>Account Login Credentials</h1>

You can login account from bellow link:
<a href="{{ route('login') }}">{{ config('app.name', 'Laravel') }} Portal</a>
<br>
<br>
Your Account Credentials are as follow: <br>
Username: "{{ $credentials['username'] }}" <br>
Password: "{{ $credentials['password'] }}"
<br>
<br>
This is auto generate email, Please do not reply.
