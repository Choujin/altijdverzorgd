@include ('components.head')
@section('title','Altijd verzorgd | jouw business partner')
<body id="app">
@include('components.headers.header')


<section class="container text-center">

    <div class="col-md-12 col-md-offset-3 pt-5" id="form_container">
        <h2>Meld hier uw fout</h2>
        <p>

            Stuur hieronder uw bericht. We nemen zo snel mogelijk contact met u op!
        </p>
        <form role="form" method="post" id="reused_form">

            <div class="row">
                <div class="col-sm-12 form-group">
                    <label for="message">
                        Bericht:</label>
                    <textarea class="form-control" type="textarea" id="message" name="message" maxlength="6000" rows="7"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="name">
                        Je Naam:</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="col-sm-6 form-group">
                    <label for="email">
                        Email:</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-12 form-group">
                    <button type="submit" class="btn btn-lg btn-default pull-right" >Verzenden →</button>
                </div>
            </div>

        </form>
        <div id="success_message" style="width:100%; height:100%; display:none; ">
            <h3>
                    Heeft je bericht succesvol geplaatst!</h3>
        </div>
        <div id="error_message"
                style="width:100%; height:100%; display:none; ">
                    <h3>Error</h3>
                    Er is helaas een fout opgetreden bij het verzenden van uw formulier.


        </div>
    </div>
</div>
</section>

@include('components.footer')
@include('components.scripts')
</body>
</html>

