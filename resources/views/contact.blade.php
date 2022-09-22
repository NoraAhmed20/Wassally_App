@extends('template')
@section('content')

    <body>
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-user">
                        <div class="card-header">
                            <h5 class="card-title">Contact Us</h5>
                        </div>
                        <div class="card-body container-form-custom">
                            @if (Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                </div>
                            @endif

                            <form method="post" action="contact-us">
                                {{ csrf_field() }}
                                <div>
                                    <div class="container-of-inputs">
                                        <label> Name </label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            placeholder="Name" name="name">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="container-of-inputs">
                                        <label> Email </label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Email" name="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="container-of-inputs">
                                        <label> Phone Number </label>
                                        <input type="text"
                                            class="form-control @error('phone_number') is-invalid @enderror"
                                            placeholder="Phone Number" name="phone_number">
                                        @error('phone_number')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                        </div>
                        <div class="form-group">
                            <label> Message </label>
                            <textarea class="form-control textarea @error('message') is-invalid @enderror" placeholder="Message" name="message"></textarea>
                            @error('message')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">Send</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </body>
@endsection
