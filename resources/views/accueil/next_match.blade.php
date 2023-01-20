<div class="row row-lightGold">
    <div class="col-md-6 col-rightAlign">
        <div class="titre">
            <p>Prochain Match<br>03 Avril 2021</p>
        </div>
        <div class="counter">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-2">
                    <div class="count-month">
                        <p>
                            <span class="white-gold">0</span> <span class="white-gold">3</span>
                            <br>
                            <span class="text-uppercase">Mois</span>
                        </p>
                    </div>
                </div>
                <div class="col-1">
                    <p class="text-point"><i class="fas fa-circle"></i></p>
                </div>
                <div class="col-2">
                    <div class="count-day">
                        <p>
                            <span class="white-gold">0</span> <span class="white-gold">2</span>
                            <br>
                            <span class="text-uppercase">Jours</span>
                        </p>
                    </div>
                </div>
                <div class="col-1">
                    <p class="text-point"><i class="fas fa-circle"></i></p>
                </div>
                <div class="col-2">
                    <div class="count-hours">
                        <p>
                            <span class="white-gold">0</span> <span class="white-gold">2</span>
                            <br>
                            <span class="text-uppercase">Heures</span>
                        </p>
                    </div>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-leftAlign">
        <div class="vs-club">
            <div class="row">
                <div class="col">
                    <p>
                        <img src="{{asset('../resources/img/logo-circle.png')}}">
                        <br>
                        <strong>HBC Planais</strong>
                    </p>
                </div>
                <div class="col">
                    <p class="versus">vs</p>
                </div>
                <div class="col">
                    <p>
                        <img src="{{asset('../resources/img/logo-adv-circle.png')}}">
                        <br>
                        <strong>Marseille</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<script>
    //  Set the date we're counting down to

    var countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();

    // Update the count down every 1 second

    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();


        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));

        // Display the result in the element with id="demo"
        document.getElementById("demo").innerHTML = days + "d " + hours + "h ";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }

    }, 1000);
</script>-->
