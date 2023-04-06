<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Register
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('auth.register') }}" method="POST">
                            @csrf
                            <div class="form-group row mb-3">
                                <label class="col-md-4">
                                    FIrst name
                                </label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('first_name') is-invalid @enderror"
                                     name="first_name" value="{{ old('first_name') }}" required>
                                    @error('first_name')
                                        <span class="invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-4">
                                    Last name
                                </label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('last_name') is-invalid @enderror" 
                                    name="last_name" value="{{ old('last_name') }}" required>
                                    @error('last_name')
                                        <span class="invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-4">
                                    Email
                                </label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                    name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <span class="invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3">
                                <label class="col-md-4">
                                    Contact Number
                                </label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('contact_number') is-invalid @enderror" 
                                    name="contact_number" value="{{ old('contact_number') }}" required>
                                    @error('contact_number')
                                        <span class="invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <button class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>