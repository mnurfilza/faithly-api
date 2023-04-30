<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700&family=Outfit:wght@300;400;500;600;700&family=Rubik:ital,wght@0,300;0,500;0,600;0,700;1,400&display=swap"
        rel="stylesheet"
    />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
          integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>



    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css"/>
    <link rel="stylesheet" href="../css/style.css"/>
    <link rel="stylesheet" href="../css/output.css"/>
    <title>Subscription</title>
</head>

<body>

<div>
    @include('widgets.aside')
    @yield('content')
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@if(\Illuminate\Support\Facades\Session::has('error'))
    <script>
        toastr.options =
            {
                "closeButton": true,
                "progressBar": true
            }
        toastr.error('{{\Illuminate\Support\Facades\Session::get('error')}}');
    </script>
    @php
        \Illuminate\Support\Facades\Session::forget('error')
    @endphp
@endif
<script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
<script>
    // https://github.com/sparksuite/simplemde-markdown-editor
    var simplemde1 = new SimpleMDE({
        element: document.getElementById("terms_and_cond"),
    });
    var simplemde2 = new SimpleMDE({
        element: document.getElementById("privacy_policy"),
    });
    var simplemde3 = new SimpleMDE({
        element: document.getElementById("faq_md"),
    });
    console.log(simplemde1.value())
    console.log(simplemde2.value())
    console.log(simplemde3.value())
</script>
<script src="../js/index.min.js"></script>
<script src="../js/aside.js"></script>
</body>
</html>
