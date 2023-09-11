@extends('layouts.mainpage2')

@section('page-title', 'Contacts')


@section('main')

<h1 class="text-center">
    Contacts
</h1>


<div class="contatti text-center">
    <p class="px-4">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, nesciunt impedit? Quae laudantium soluta mollitia, dolorem praesentium quas excepturi id!
    </p>

    <strong>
        Phone:
    </strong>
    <span>
        +39 341667280
    </span>

    <br>

    <strong>
        Email:
    </strong>
    <span>
        dccomics@live.it
    </span>

</div>

    <form class="form">
        <div class="input-all">

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
                <button type="submit" class="btn btn-primary mb-5">
                    Submit
                </button>
        </div>
    </form>


@endsection
