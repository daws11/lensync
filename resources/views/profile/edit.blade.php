@extends('layouts.app')
@section('title', 'Profile - LEN Sync')
@section('content')
    <div class="main-container">
        <div class="form-container">
            <div class="form-box">
                @include('profile.partials.update-profile-information-form')
            </div>
            <div class="form-box">
                @include('profile.partials.update-password-form')
            </div>
            <div class="form-box">
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
@endsection
