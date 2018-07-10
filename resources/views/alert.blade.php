@if(session()->has('info'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{  session()->get('info') }}
    </div>
@endif

@if(session()->has('identity'))
    <div class="container">
    <div class = "row">
        <div class="col-lg-offset-11 col-md-offset-10 col-sm-offset-10 col-xs-offset-7">
            <button class="btn btn-warning btn-outline" onclick="this.blur();" id="alertButton">See My Post</button>
        </div>
    </div>
    </div>
    <br>
    <script>
        $(document).ready(function() {
            $("#alertButton").click(function () {
                $('html, body').animate({
                    scrollTop: $("#{!!session()->get('identity')!!}").offset().top - 64
                }, 2000);
            });
        });
    </script>
@endif
