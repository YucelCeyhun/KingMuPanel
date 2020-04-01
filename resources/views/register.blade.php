<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-300 flex justify-center items-center h-full font-sans text-gray-600 text-lg font-semibold">
<div class="w-1/3 bg-white lg:p-16 p-4">
    <h2 class="block mb-10 text-lg text-center text-indigo-500 lg:text-2xl">King Mu Register Form</h2>
    @if($errors->any())
        <div class="font-normal text-sm mb-6 bg-red-200 text-red-400 p-4">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('succeed'))
        <div class="font-normal text-sm mb-6 bg-green-200 text-green-400 p-4">
            <p>
                Register has been succeeded
            </p>
        </div>
    @endif
    <form action="{{action('AccountController@store')}}" method="post" autocomplete="off">
        <label for="username" class="form-label  my-2">Username:</label>
        <input type="text" name="username" value="{{old('username')}}"
               class="form-input w-full border-2 border-gray-300 h-12 my-3 px-2" id="username"/>
        <label for="password" class="form-label">Password:</label>
        <input type="password" name="password" id="password"
               class="form-input w-full border-2 border-gray-300 h-12 my-3 px-2"/>
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <input type="submit" value="Register"
               class="bg-indigo-500 text-white py-2 px-3 float-right my-2 hover:bg-indigo-700"/>
    </form>
</div>
<div class="shadow bg-indigo-400 right-0 fixed w-64 h-48 text-white text-center p-3" style="top: 20%">
    <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 24 24"
         style="fill: {{$serverInfo['gameServer'] ? 'green' : 'red'}}"
         class="inline">
        <title>{{$serverInfo['gameServer'] ? 'Online' : 'Offline'}}</title>
        <path
            d="M0 7.244c3.071-3.24 7.314-5.244 12-5.244 4.687 0 8.929 2.004 12 5.244l-2.039 2.15c-2.549-2.688-6.071-4.352-9.961-4.352s-7.412 1.664-9.961 4.352l-2.039-2.15zm5.72 6.034c1.607-1.696 3.827-2.744 6.28-2.744s4.673 1.048 6.28 2.744l2.093-2.208c-2.143-2.261-5.103-3.659-8.373-3.659s-6.23 1.398-8.373 3.659l2.093 2.208zm3.658 3.859c.671-.708 1.598-1.145 2.622-1.145 1.023 0 1.951.437 2.622 1.145l2.057-2.17c-1.197-1.263-2.851-2.044-4.678-2.044s-3.481.782-4.678 2.044l2.055 2.17zm2.622 1.017c-1.062 0-1.923.861-1.923 1.923s.861 1.923 1.923 1.923 1.923-.861 1.923-1.923-.861-1.923-1.923-1.923z"/>
    </svg>
    <div class="flex justify-center py-4">
        <div class="mx-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 -12 24 48" style="fill: white">
                <title>Total Accounts</title>
                <path
                    d="M20.822 18.096c-3.439-.794-6.64-1.49-5.09-4.418 4.72-8.912 1.251-13.678-3.732-13.678-5.082 0-8.464 4.949-3.732 13.678 1.597 2.945-1.725 3.641-5.09 4.418-3.073.71-3.188 2.236-3.178 4.904l.004 1h23.99l.004-.969c.012-2.688-.092-4.222-3.176-4.935z"/>
            </svg>
            <span class="text-3xl leading-none tracking-tight">{{$serverInfo['accCount']}}</span>
        </div>
        <div class="mx-5">
            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" style="fill: white">
                <title>Total Characters</title>
                <path
                    d="M17.997 18h-11.995l-.002-.623c0-1.259.1-1.986 1.588-2.33 1.684-.389 3.344-.736 2.545-2.209-2.366-4.363-.674-6.838 1.866-6.838 2.491 0 4.226 2.383 1.866 6.839-.775 1.464.826 1.812 2.545 2.209 1.49.344 1.589 1.072 1.589 2.333l-.002.619zm4.811-2.214c-1.29-.298-2.49-.559-1.909-1.657 1.769-3.342.469-5.129-1.4-5.129-1.265 0-2.248.817-2.248 2.324 0 3.903 2.268 1.77 2.246 6.676h4.501l.002-.463c0-.946-.074-1.493-1.192-1.751zm-22.806 2.214h4.501c-.021-4.906 2.246-2.772 2.246-6.676 0-1.507-.983-2.324-2.248-2.324-1.869 0-3.169 1.787-1.399 5.129.581 1.099-.619 1.359-1.909 1.657-1.119.258-1.193.805-1.193 1.751l.002.463z"/>
            </svg>
            <span class="text-3xl leading-none tracking-tight">{{$serverInfo['charCount']}}</span>
        </div>

    </div>
</body>
</html>
