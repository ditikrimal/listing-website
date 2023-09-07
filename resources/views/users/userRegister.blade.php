<x-layout>
    <div class="loginContainer">
        <div class="formbox">
            <form class="loginForm" method="POST" action="/users/signup">
                @csrf
                <h1>Logo <span>Name</span></h1>
                <h1>Login to Continue</h1>


                <input type="text" name="fullName" id="" placeholder="Full Name" value="{{ old('fullName') }}">
                @error('title')
                    <p style="font-size: 10px;color:red; ">{{ $message }}</p>
                @enderror
                <input type="email" name="email" id="" placeholder="Email" value="{{ old('email') }}">
                @error('email')
                    <p style="font-size: 10px;color:red; ">{{ $message }}</p>
                @enderror
                <input type="password" name="password" id="" placeholder="Password"
                    value="{{ old('password') }}">
                @error('password')
                    <p style="font-size: 10px;color:red; ">{{ $message }}</p>
                @enderror
                <input type="password" name="password_confirmation" id="" placeholder="Confirm Password">
                @error('password_confirmation')
                    <p style="font-size: 10px;color:red; ">{{ $message }}</p>
                @enderror

                <span>Already an Account? <a href="/login">Login Now</a></span>
                <button type="submit">Sign Up</button>
            </form>
        </div>

    </div>
</x-layout>
