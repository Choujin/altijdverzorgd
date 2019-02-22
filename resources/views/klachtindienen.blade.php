@include ('components.head')
@section('title','Altijd verzorgd | Klacht indienen')

<body id="app">
    @include('components.headers.hpheader')

    <section class="klachtindienen-bg pb-5"></section>

    <section class="container text-center align-items-center pb-4">

        <div class="col-md-12 col-md-offset-3 pt-5" id="form_container">

            <h2>
                Klacht indienen
            </h2>

            <p>
                    Bent u niet tevreden over onze dienstverlening? Dat betreuren wij zeer. <br>
                    Stuur hieronder uw bericht. We nemen zo snel mogelijk contact u op!
            </p>

            <form role="form" method="post" action="klachtindienen" id="reused_form">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-sm-8 col-md-6 col-lg-4 form-group">
                        <label for="member">
                            Naam van behandelaar*</label>
                        <input type="text" class="form-control" id="member" name="member" required>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-8 col-md-6 col-lg-4 form-group">

                        <label for="message">
                                Uw klacht*</label>
                        <textarea style="resize: none;" class="form-control" type="textarea" id="message" name="message"
                            maxlength="6000" rows="7"></textarea>

                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-8 col-md-6 col-lg-4 form-group">
                        <label for="name">
                            Je naam*</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-8 col-md-6 col-lg-4 form-group">
                        <label for="email">
                            Je e-mailadres*</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>

                <div class="row justify-content-center">
                        <div class="col-sm-8 col-md-6 col-lg-4 form-group">
                            <label for="telephone_number">
                                Je telefoonnummer*</label>
                            <input type="tel" class="form-control" id="telephone_number" name="telephone_number" required>
                        </div>
                    </div>

                <div class="row justify-content-center">
                    <div class="col-sm-8 col-md-6 col-lg-4 form-group">
                        <button type="submit" class="btn btn-lg btn-green">Klacht versturen</button>
                    </div>
                </div>

            </form>

            <div id="success_message" style="width:100%; height:100%; display:none; ">
                <h3>
                    Heeft je bericht succesvol geplaatst!
                </h3>
            </div>

            <div id="error_message" style="width:100%; height:100%; display:none; ">

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
