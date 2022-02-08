<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>Links</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ asset('css/prettify.css') }}" rel="stylesheet">
        <link href="{{ asset('css/notify.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                  <form class="row g-3 needs-validation mt-50" novalidate>
                    <div class="col-12 position-relative">
                        <label for="validationLink" class="form-label">Ссылка</label>
                        <input type="text" name="link" class="form-control" id="validationLink" value="" required>
                    </div>
                    <div class="col-12">
                        <a class="btn btn-primary sendlink">Отправить</a>
                    </div>
                  </form>

                  @include('link.links')
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/prettify.js') }}"></script>
        <script src="{{ asset('js/notify.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>

    </body>
</html>
