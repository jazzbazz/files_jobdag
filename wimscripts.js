jQuery(document).ready(function($) {

    console.log("helloworld");

    $('.link').click(function(e) {
        console.log("link clicked");
        $('#modalleke').find('*').not('.closeModal').remove();
        $('#modalleke').css("display", "none");

        // Stop the link being followed:

        e.preventDefault();
    });

    $('.card').on('click', function() {



        $image = $(this).find('.card-img-top').attr('src');
        $voornaam = $(this).find('input[name="voornaam"]').val();
        $naam = $(this).find('input[name="naam"]').val();
        $omschrijving = $(this).find('input[name="omschrijving"]').val();
        $waarom = $(this).find('input[name="waarom"]').val();
        $wat = $(this).find('input[name="wat"]').val();
        $waarde = $(this).find('input[name="waarde"]').val();
        $fob = $(this).find('input[name="fob"]').val();
        $skill1 = $(this).find('input[name="skill1"]').val();
        $skill2 = $(this).find('input[name="skill2"]').val();
        $skill3 = $(this).find('input[name="skill3"]').val();
        $pad = "<img src='" + $image + "' alt=''>";



        // $('#modalleke').append($modal);

        $('#modalleke').append($pad);
        $('#modalleke').append('<div id="head"></div>');

        $('#head').append('<p class="bvnaam">' + $voornaam + '</p>');
        $('#head').append('<p class="bnaam"> ' + $naam + '</p>');
        $('#head').append('<div class="bomschrijving"> dit is een omschrijving ' + $omschrijving + '</div>');
        // new section

        $('#modalleke').append('<div class="bwaarom"> <h4>Ik kies voor webdevelopment omdat...</h4> ' + $waarom + '</div>');

        $('#modalleke').append('<div class="bwat"><h4>Ik zoek het volgende in een bedrijf ...</h4>' + $wat + '</div>');

        $('#modalleke').append('<div class="bwaarde"><h4>Volgende waardes zijn belangrijk voor mij :</h4>' + $waarde + '</div>');

        // new section skills/fob
        
        if ($fob == "both") {
            $('#modalleke').append('<div class="binterest"> Mijn interesse in webdevelopment ligt zowel bij frontend als backend</div>');
        } else {
            $('#modalleke').append('<div="binterest"> Mijn interesse in webdevelopment ligt vooral bij ' + $fob + '</div>');
        }


        $('#modalleke').append('<div class="bpunten"> Mijn drie sterkste punten binnen webdevelopment zijn ' + $skill1 + $skill2 + 'en' + $skill3 + '</div>');

        // $('#modalleke').append('<div class="bwaarom"> dit is waarom ' + $waarom + '</div>');
        // $('#modalleke').append('<div class="bwat"> dit is wat ' + $wat + '</div>');
        // $('#modalleke').append('<div class="bwaarde"> dit is de waarde' + $waarde + '</div>');
        
        $pdflink = 'pdf/cv' + $voornaam + $naam+'.pdf';
        // $('#modalleke').append('<a class="pdflink" href="pdf/cv' + $voornaam + $naam + '.pdf" alt="" target="_blank">Bekijk cv  </a>');
        $('#modalleke').append('<a class="pdflink" href="'+$pdflink+'" alt="" target="_blank">Bekijk cv  </a>')



        // $('#modalleke').css("background", "rgba(100,184,136,0.9)");

        $('#modalleke').css("display", "flex");



        $(this).css("border", "1px solid gold");
        $(this).css("background", "rgba(100,184,136,0.3)");



        console.log("card was clicked");

    });



    $('.closeModal').on("click", function() {

        $('#modalleke').find('*').not('.closeModal').remove();

        // $('#modalleke').empty();

        $('#modalleke').css("display", "none");

    });

});