<!DOCTYPE html>
<html lang="en">
    <style>
        aside {
            display: flex;
            float: right;
            flex-direction: column;
            margin-right: 20px;
        }

        aside a {
            text-decoration: none;
            display: block;
            margin-bottom: 20px;
        }

        aside a:hover {
            background-color: #ddd;
        }
    </style>
<nav>
    <aside>
        <a href="/">Home</a>
        <h1>Categories</h1>
        <a href="{{ route("beverage")}}">Food Beverage</a>
        <a href="{{ route("beauty")}}">Beauty Health</a>
        <a href="{{ route("homecare")}}">Home Care</a>
        <a href="{{ route("babykid")}}">Baby Kid</a>
    </aside>
</nav>
</html>