@extends('master')
@section('context')
<x-guest-layout>
    <div class="container">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <!-- Name -->
                    <div class="mb-3">
                        <x-input-label for="name" :value="__('Nom')" />
                        <x-text-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- firstname -->
                    <div class="mb-3">
                        <x-input-label for="firstname" :value="__('Prenom')" />
                        <x-text-input id="firstname" class="form-control" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="firstname" />
                        <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <!-- phone -->
                    <div class="mb-3">
                        <x-input-label for="phone" :value="__('Telephone')" />
                        <x-text-input id="phone" class="form-control" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
                        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- Email Address -->
                    <div class="mb-3">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <!-- Password -->
                    <div class="mb-3">
                        <x-input-label for="password" :value="__('Mot de passe')" />
                        <x-text-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- Confirm Password -->
                    <div class="mb-3">
                        <x-input-label for="password_confirmation" :value="__('Confirmez Mot de passe')" />
                        <x-text-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>

                        <x-primary-button class="ml-4">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-guest-layout>
@endsection
