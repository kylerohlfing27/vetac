@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="container-fluid" id="heroDiv">
    <h1 class="row">This Will be a stock photo slide show running through the different servicves the site offers </h1>
    <p>ye ye </p>
</div>

<!-- https://getbootstrap.com/docs/4.4/components/card/#card-layout -->
<div class="container">
    <div class="card-deck" id="cardContainer">

        <div class="card">
            <img src="{{ URL::asset('/images/depression.jpg') }}" class="card-img-top" alt="ope">
            <div class="card-body">
                <h5 class="card-title">Mental Health Help </h5>
                <p class="card-text">Get Help Today.</p>
            </div>
        </div>

        <div class="card">
            <img src="{{ URL::asset('/images/tie_adjust.jpg') }}" class="card-img-top" id="imgShrink" alt="oopsie hehe">
            <div class="card-body">
                <h4 class="card-title">Professional Development</h4>
                <p class="card-text">Develop Professional Skills </p>
            </div>
        </div>
        
        <div class="card">
            <img src="{{ URL::asset('/images/computer_notes .jpg') }}" class="card-img-top" alt="ope">
            <div class="card-body">
                <h5 class="card-title">Goal Setting</h5>
                <p class="card-text">Set your goals to change your life </p>
            </div>
        </div>
    </div>
</div>


<div class="container" id="newID">
<p>new div yo</p>
</div>
@endsection
