<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetController extends Controller
{
    public function show()
    {
        return view('greet');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greet Page</title>
</head>
<body>
    <h1>Hello from Greet Controller!</h1>
    <p>Welcome to the Laravel application.</p>
</body>
</html>