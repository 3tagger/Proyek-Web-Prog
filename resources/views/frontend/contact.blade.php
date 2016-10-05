@extends('layouts.master-frontend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Contact Us</div>

                <div class="panel-body">
                    <form action="{{ route('contact/post') }}" method="POST">

                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}" id="group-name">
                            <label for="name">Name : </label>
                            <?php
                                $name = '';
                                if(old('name')) $name = old('name');
                                else if($user) $name = $user->name;
                            ?>
                            <input type="text" name="name" id="name" placeholder="Insert your name here..." value="{{ $name }}" class="form-control"/>
                            <p class="help-block">{{ $errors->first('name') }}</p>
                        </div>

                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}" id="group-email">
                            <label for="email">Email : </label>
                            <?php
                                $email = '';
                                if(old('email')) $email = old('email');
                                else if($user) $email = $user->email;
                            ?>
                            <input type="text" name="email" id="email" placeholder="Insert your email here..." value="{{ $email }}" class="form-control"/>
                            <p class="help-block">{{ $errors->first('email') }}</p>
                        </div>

                        <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}" id="group-message">
                            <label for="message">Message : </label>
                            <textarea name="message" id="message" placeholder="Insert your Message here..." class="form-control"/>{{ old('message') }}</textarea>
                            <p class="help-block">{{ $errors->first('message') }}</p>
                        </div>
                        
                        <div class="form-group" class="text-center">
                            {!! captcha_img() !!}
                        </div>

                        <div class="form-group {{ $errors->has('captcha') ? 'has-error' : '' }}" id="group-captcha">
                            <label for="captcha">Captcha : </label>
                            <input type="text" name="captcha" id="captcha" placeholder="Insert the captcha here..." value="{{ old('captcha') }}" class="form-control"/>
                            <p class="help-block">{{ $errors->first('captcha') }}</p>
                        </div>

                        <div class="form-group">
                            <button type="submit" id="send">Send</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
