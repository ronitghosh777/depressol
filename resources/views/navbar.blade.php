<?php

function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

    if ($current_file_name == $requestUri)
        echo 'class="active"';
}

?>
<nav class="nav navbar-default">
    <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navmenu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">depressol</a>
        </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="nav navbar-nav">
                <li <?=echoActiveClassIfRequestMatches("")?>>
                    <a href="{{ route('home') }}"><span class="menu">Home</span><span class="sr-only">(current)</span></a>
                </li>
                <li <?=echoActiveClassIfRequestMatches("liked")?>>
                    <a href="{{ route('liked') }}"><span class="menu">Liked</span></a>
                </li>
                <li <?=echoActiveClassIfRequestMatches("disliked")?>>
                    <a href="{{ route('disliked') }}"><span class="menu">Disliked</span></a>
                </li>

            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>




