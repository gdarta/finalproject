<x-layout>
    <h1>{{ __('msg.log_into_your_account_to_post_your_sweaters')}}</h1>
    <div id="post">
        <form method='POST' action="{{ route('users.authenticate') }}">
            @csrf
            <!--TODO: add username authentication-->
            <label for='email'><h2>{{ __('msg.enter_your_e-mail')}}: </h2></label>
            <input type='text' name='email' id='email' value="{{ old('email') }}"> <br>
            @error('email')
            <p class="error">{{ $message }}</p>
            @enderror

            <label for='password'><h2>{{ __('msg.enter_password')}}: </h2></label>
            <input type='text' name='password' id='password'> <br>
            @error('password')
            <p class="error">{{ $message }}</p>
            @enderror

            <br><button type='submit' class="button">{{ __('msg.login')}}</button>
        </form>
    </div>
    <p>{{ __('msg.are_not_registered')}} <a class="user-link" href='./register'>{{ __('msg.register')}}</a></p>
</x-layout>