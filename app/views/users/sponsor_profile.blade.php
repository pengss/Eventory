@extends('layouts.default')
<div class="container">
    <div>
        @if(Auth::check())
            <p>Welcome to your profile page (Sponsor)</p>
        @endif

        {{ HTML::linkRoute('sponsor_category', 'List down all your sponsoring categories') }}
    </div>
</div>
