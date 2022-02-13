<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <form action="{{ route('converter') }}" method="post" class="row g-3 mt-5 mb-3">
                @csrf

                <div class="col-md-6">
                    <input type="number" class="form-control" name="amount" value="{{ old('amount') }}">
                </div>
                <div class="col-md-6">
                    <select class="form-select" name="device_1">
                        @foreach ($devices as $device)
                            <option {{ $device->id == old('device_1') ? 'selected' : '' }} value="{{ $device->id }}">{{ $device->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-12">
                    <select class="form-select" name="device_2">
                        @foreach ($devices as $device)
                            <option {{ $device->id == old('device_2') ? 'selected' : '' }} value="{{ $device->id }}">{{ $device->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Convertir</button>
                </div>
            </form>
            @isset($amount_converter)
                <div class="card mb-3">
                    <div class="card-body">
                        {{ $amount_converter }}
                    </div>
                </div>
            @endisset
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    </body>
</html>
