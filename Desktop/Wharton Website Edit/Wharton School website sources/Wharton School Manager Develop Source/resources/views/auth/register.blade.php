@extends('nova::auth.layout')

@section('content')

@include('nova::auth.partials.header')

<form
    class="bg-white shadow rounded-lg p-8 max-w-login mx-auto"
    method="POST"
    action="{{"/register" }}"
>
    {{ csrf_field() }}

    @component('nova::auth.partials.heading')
        {{ __('Register') }}
    @endcomponent

    @if ($errors->any())
    <p class="text-center font-semibold text-danger my-3">
        @if ($errors->has('email'))
            {{ $errors->first('email') }}
        @elseif($errors->has("password"))
            {{ $errors->first('password') }}
        @else
            {{ $errors->first('name') }}
        @endif
        </p>
    @endif

    <div class="mb-6 {{ $errors->has('name') ? ' has-error' : '' }}">
        <label class="block font-bold mb-2" for="email">{{ __('Name') }}</label>
        <input class="form-control form-input form-input-bordered w-full" id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
    </div>

    <div class="mb-6 {{ $errors->has('email') ? ' has-error' : '' }}">
        <label class="block font-bold mb-2" for="email">{{ __('Email')." ".__("Id") }}</label>
        <input class="form-control form-input form-input-bordered w-full" id="email" type="email" name="email" value="{{ old('email') }}" required>
    </div>

    <div class="mb-6 {{ $errors->has('contact') ? ' has-error' : '' }}">
        <label class="block font-bold mb-2" for="contact">Contact</label>
        <input class="form-control form-input form-input-bordered w-full" id="contact" type="text" name="contact" value="{{ old('contact') }}" required>
    </div>

    {{--<div class="mb-6 {{ $errors->has('business_name') ? ' has-error' : '' }}">
        <label class="block font-bold mb-2" for="business_name">업체명</label>
        <input class="form-control form-input form-input-bordered w-full" id="business_name" type="text" name="business_name" value="{{ old('business_name') }}" required>
    </div>

    <div class="mb-6 {{ $errors->has('business_number') ? ' has-error' : '' }}">
        <label class="block font-bold mb-2" for="business_number">사업자번호</label>
        <input class="form-control form-input form-input-bordered w-full" id="business_number" type="text" name="business_number" value="{{ old('business_number') }}" required>
    </div>

    <div class="mb-6 {{ $errors->has('business_type') ? ' has-error' : '' }}">
        <label class="block font-bold mb-2" for="business_type">업종</label>
        <input class="form-control form-input form-input-bordered w-full" id="business_type" type="text" name="business_type" value="{{ old('business_type') }}" required>
    </div>

    <div class="mb-6 {{ $errors->has('business_sector') ? ' has-error' : '' }}">
        <label class="block font-bold mb-2" for="business_sector">업태</label>
        <input class="form-control form-input form-input-bordered w-full" id="business_sector" type="text" name="business_sector" value="{{ old('business_sector') }}" required>
    </div>--}}

    <div class="mb-6 {{ $errors->has('password') ? ' has-error' : '' }}">
        <label class="block font-bold mb-2" for="password">{{ __('Password') }}</label>
        <input class="form-control form-input form-input-bordered w-full" id="password" type="password" name="password" required>
    </div>

    <div class="mb-6">
        <label class="block font-bold mb-2" for="password">{{ __('Password Confirmation') }}</label>
        <input class="form-control form-input form-input-bordered w-full" id="password_confirmation" type="password" name="password_confirmation" required>
    </div>

    <button class="w-full btn btn-default btn-primary hover:bg-primary-dark" type="submit">
        {{ __('Sign Up') }}
    </button>
</form>
@endsection
