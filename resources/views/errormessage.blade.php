@include ('components.head')
@section('title','Altijd verzorgd | Fout melden')
<body id="app">
@include('components.headers.hpheader')

<section class="error-message-bg pb-5">
        <div class="container h-100">
                <div class="row align-items-center h-100">
                    <div class="col-12 mx-auto">
                        <div class="text-center text-white">
                                <h1>Oops...</h1>
                        </div>
                    </div>
                </div>
            </div>
</section>
<section class="container text-center align-items-center pb-4">

    <div class="col-md-12 col-md-offset-3 pt-5" id="form_container">
        <h2>Meld hier uw fout</h2>
        <p>
            Stuur hieronder uw bericht. We nemen zo snel mogelijk contact met u op!
        </p>
        <form role="form" method="post" id="reused_form">
            <div class="row justify-content-center">
                <div class="col-sm-4 form-group">
                    <label for="name">
                        Voor- en achternaam</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="col-sm-4 form-group">
                    <label for="email">
                        E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="row justify-content-center">
                    <div class="col-sm-8 form-group">
                        <label for="message">
                            Beschrijving van de fout</label>
                        <textarea style="resize: none;" class="form-control" type="textarea" id="message"  name="message" maxlength="6000" rows="7"></textarea>
                    </div>
                </div>


            <div class="row justify-content-center">
                <div class="col-sm-12 form-group">
                    <button type="submit" class="btn btn-lg btn-green" >Verzenden</button>
                </div>
            </div>

        </form>
        <div id="success_message" style="width:100%; height:100%; display:none; ">
            <h3>
                Heeft je bericht succesvol geplaatst!
            </h3>
        </div>
        <div id="error_message"style="width:100%; height:100%; display:none; ">
            <h3>
                Error
            </h3>
                <p>
                    Er is helaas een fout opgetreden bij het verzenden van uw formulier.
                </p>
        </div>
    </div>
</div>
</section>

@include('components.footer')
@include('components.scripts')
</body>
</html>
