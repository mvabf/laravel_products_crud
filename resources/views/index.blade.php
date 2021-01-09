@extends('layout.app')

@section('body')

    <div class="jumbotron bg-light border border-secondary">
        <div class="row">
            <div class="card-deck">
                <!-- Primeiro Card -->
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Product Register</h5>
                        <p class="card-text">
                            Here  is the content for the card
                        </p>
                        <a href="/products" class="btn btn-primary">Register your products</a>
                    </div>
                </div>
                <!--Segundo Card-->
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Department Register</h5>
                        <p class="card-text">
                            Here is the content for the card
                        </p>
                        <a href="/departments" class="btn btn-primary">Register your departments</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection