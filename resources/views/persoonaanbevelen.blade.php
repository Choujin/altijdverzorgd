@include ('components.head')
@section('title','Altijd verzorgd | Persoon aanbevelen')

<body id="app">
    @include('components.headers.hpheader')

    <section class="persoonaanbevelen-bg pb-5">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-12 mx-auto">
                    <div class="text-center text-white">
                        <h1>ZZP/Ondernemer aanbevelen</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container text-center align-items-center pb-4">

        <div class="col-md-12 col-md-offset-3 pt-5" id="form_container">

            <h2>
                Ik wil ZZP/Ondernemer aanbevelen
            </h2>

            <p>
                Stuur hieronder uw bericht. We nemen zo snel mogelijk contact met jouw aanbeveling persoon op!
            </p>

            <form role="form" method="post" action="persoonaanbevelen" id="reused_form">
                @csrf
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

                        <label for="message">
                            Je persoonlijke aanbeveling*</label>
                        <textarea style="resize: none;" class="form-control" type="textarea" id="message" name="message"
                            maxlength="6000" rows="7"></textarea>

                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-8 col-md-6 col-lg-4 form-group">
                        <label for="name-reference">
                            Bij wie wil je ons aanbevelen?*</label>
                        <input type="text" class="form-control" id="name-reference" name="name-reference" required>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-8 col-md-6 col-lg-4 form-group">
                        <label for="email-reference">
                            Zijn of haar e-mailadres*</label>
                        <input type="email" class="form-control" id="email-reference" name="email-reference" required>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-8 col-md-6 col-lg-4 form-group">
                        <label for="profession-reference">
                            Zijn of haar beroep*</label>
                        <input type="text" class="form-control" id="profession-reference" name="profession-reference"
                            required>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-sm-8 col-md-6 col-lg-4 form-group">
                        <button type="submit" class="btn btn-lg btn-green">Stuur de aanbeveling!</button>
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
