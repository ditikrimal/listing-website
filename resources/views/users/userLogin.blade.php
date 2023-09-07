<x-layout>
    <div class="loginContainer">
        <div class="formbox">
            <form class="loginForm" method="POST" action="/users/login">
                @csrf
                <h1 class="titleH1">Logo <span>Name</span></h1>
                <h1>Login to Continue</h1>


                <input class="emailInput" name="email" id="" placeholder="Email" value="{{ old('email') }}">
                @error('email')
                    <style>
                        .emailInput {
                            color: red;
                        }
                    </style>
                    <p style="font-size: 10px;color:red; "><i class="fa-solid fa-circle-exclamation"></i>
                        {{ $message }}
                    </p>
                @enderror
                <input class="pswInput" type="password" name="password" id="" placeholder="Password">
                @error('password')
                    <style>
                        .pswInput {
                            border: 1px red solid
                        }
                    </style>
                    {{-- <p style="font-size: 10px;color:red; ">{{ $message }}</p> --}}
                @enderror
                <span>New User? <a href="/signup">Register Now</a></span>
                <button type="submit">Login</button>
            </form>
        </div>

    </div>
</x-layout>
