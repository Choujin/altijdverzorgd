@include ('components.head')
@section('title','Altijd verzorgd | jouw business partner')

<body id="app">
    @include('components.headers.hpheader')

    <section class="thankyou-bg pb-5">
           
    </section>

    <section class="text-center py-5">
        <div class="container">
            <h1 class="display-1 pt-4">THANK YOU!</h1>
            <span style="font-size: 1em; color: red;">
                    <i class="fas fa-heart fa-10x"></i>
             </span>
            
            <h2 class="text-green display-6 py-4">Thanks a bunch for filling that out. It means a lot to us, just like you do! We really appreciate you giving us a moment of you time today. <br>Thanks for being you.

                    <p><br>Altijd verzorgd.</p></h2>
            
        </div>
    </section>

    @include('components.footer')
    @include('components.scripts')
</body>

</html>
