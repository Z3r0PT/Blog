<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Index</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" >DAW Forum</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                @if( $check == 0)
                <a class="nav-link" href="register.php">Register</a>
                @else
                <a class="nav-link">Welcome {$NAME}</a>
                @endif
            </li>
            <li class="nav-item">
                {if $check == 0}
                @if($check == 0)
                <a class="nav-link" href="login.php">Login</a>
                @else
                <a class="nav-link" href="logout_action.php">Logout</a>
                @endif
            </li>
            <li class="nav-item">
                @if($check == 1)
                <a class="nav-link" href="blog.php?id=-1">Post Blog</a>
                @endif
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="index.php" method="get">
            <input class="form-control mr-sm-2" type="text" name="search" id="search" value="{$SEARCH}" placeholder="Search by User Name">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
@foreach($posts as $post)
<div class="jumbotron">
    <h4 class="display-5">{$post.content}</h4>
    <hr class="my-4">
    <p>Post made by: {$post.name}</p>
    <p class="lead">Created at: {$post.created_at} | Updated at: {$post.updated_at}</p>
    {if $ID == $con.user_id}
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="blog.php?id={$con.id}" role="button">Update</a>
    </p>
    {/if}
</div>
@endforeach
</body>
</html>
