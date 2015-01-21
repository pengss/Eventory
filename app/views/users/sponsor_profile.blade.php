@extends('layouts.portal')
@section('body')

{{ HTML::style('/css/font-awesome.css') }}
{{ HTML::style('/css/style.css') }}
{{ HTML::style('/css/responsive.css') }}
<div class="container">
    <div>
        @if(Auth::check())
            <p>Welcome to your profile page (Sponsor)</p>
        @endif

        {{ HTML::linkRoute('sponsor_category', 'List down all your sponsoring categories') }}
    </div>
</div>
