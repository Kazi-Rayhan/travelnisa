@extends('layouts.app')
@section('title')
@endsection
@push('front_style')
@endpush
@section('content')
    <section class="comming section-padding">
        <div class="v-middle">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>404</h1>
                        <h2>Not Found 404</h2>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-6 offset-md-3 text-center">
                        <p>The page you are looking for was moved, removed, renamed or never existed.</p>
                        <form>
                            <input type="text" name="search" placeholder="Search" required>
                            <button>Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
