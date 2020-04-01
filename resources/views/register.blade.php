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
        <input type="password" name="password" id="password" class="form-input w-full border-2 border-gray-300 h-12 my-3 px-2"/>
        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <input type="submit" value="Register"
               class="bg-indigo-500 text-white py-2 px-3 float-right my-2 hover:bg-indigo-700"/>
    </form>
</div>
</body>
</html>
