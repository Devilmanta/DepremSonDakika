<?php
    libxml_use_internal_errors(true);
    $html = file_get_contents( "http://www.koeri.boun.edu.tr/scripts/lst2.asp");
?>

<!DOCTYPE html>
<html lang="tr">
  <head>
    <link rel="alternate" hreflang="tr" href="http://www.depremsondakika.com/" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <style type="text/css">
        
        .headTitle{
            text-align: center;
            font-size: 300%;
            font-weight: bold;
        }
        
        #topBanner{
            width: 100%;
            margin: 0 auto 10px auto;
        }
        .adsbygoogle{
            margin:0 auto;
            width: 100%;
        }
        #content{
            width: 70%;
            margin:0 auto;
            padding: 0;
        }
        #navigation{
        }
        .col-2{
            background-color: darkgray;
            padding: 0;
            margin: 0;
            
        }
        #tablo{
            width: 100%;
            margin: 0 auto;
            padding:0;
            border-collapse: collapse;
        }        
        th{
            padding: 7px;
            text-align: center;
        }
        td{
            padding: 7px;
        }
        
        @media (min-width: 1500px)
        {
            #navigation{
                width: 60%;
                margin: 0 auto;
            }
        }
        @media (max-width: 1500px)
        {
            #content{
                width: 55%;
                margin:0 auto;
            }
            
            
            #tablo{
                width: 100%;
                margin:0 auto;
            }
        }
        @media (max-width: 1200px)
        {
            #content{
                width: 55%;
                margin:0 auto;
            }

            #tablo{
                width: 100%;
                margin:0 auto;
            }
        }
        @media (max-width: 992px)
        {
            #content{
                width: 70%;
                margin:0 auto;
            }
            #tablo{
                width: 100%;
                margin:0 auto;
            }
        }
        @media (max-width: 767px)
        {
            #content{
                width: 90%;
                margin:0 auto;
                padding: 0;
            }
            .headTitle{
                font-size: 150%;
            }
            #tablo{
                width:100%;
                margin:0 auto;
                padding: 0;
            }
            th{
                text-align: center;
            }
        }
        @media (max-width: 576px) 
        {
            #content{
                width: 100%;
                margin:0 auto;
                padding: 0;
                
            }
            .headTitle{
                font-size: 150%;
            }
            #tablo{
                width:100%;
                margin:0 auto;
                padding: 0;
                font-size: 85%;
            }
            .table td, .table th{
                padding: 0.5em;
            }
            th{
                text-align: center;
            }
        }
        @media (max-width: 446px) 
        {
            #content{
                width: 100%;
                margin:0 auto;
                padding: 0;
                
            }
            .headTitle{
                font-size: 150%;
            }
            #tablo{
                width:99%;
                margin:0 auto;
                padding: 0;
                font-size: 65%;
            }
        }
        #myBtn {
            display: none; /* Hidden by default */
            position: fixed; /* Fixed/sticky position */
            bottom: 20px; /* Place the button at the bottom of the page */
            right: 30px; /* Place the button 30px from the right */
            z-index: 99; /* Make sure it does not overlap */
            border: none; /* Remove borders */
            outline: none; /* Remove outline */
            background-color: red; /* Set a background color */
            color: white; /* Text color */
            cursor: pointer; /* Add a mouse pointer on hover */
            padding: 15px; /* Some padding */
            border-radius: 10px; /* Rounded corners */
            opacity: 0.5;
        }

        #myBtn:hover {
            background-color: #555; /* Add a dark-grey background on hover */
        }
        footer{
            background-color:dimgray;
            font-style: italic;
            font-size: 60%;
            color: white;
            text-align: center;
        }
        
        #map{
            width:100%;
            height: 300px;
            background-color: grey;
        }
    </style>
  </head>
  <body>
      <title>Deprem Son Dakika - Son deprem nerede oldu?</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
    <div class='headSection'>
        <div class ="headTitle">
              <span class='rwd-line'>Deprem Son Dakika</span> <span class='rwd-line'> Güncel Liste</span>
        </div>
        
        <div id="topBanner">
            <!-- Reklamlar -->
            <ins class="adsbygoogle"
                 style="display:inline-block;"
                 data-ad-client="ca-pub-9818224453325135"
                 data-ad-slot="5429213208">
            </ins>
        </div>
            
    </div>
    <div id='content'>
        <div id='navigation'>
            <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
              <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <a class="navbar-brand" href="#">Güncel Liste</a>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="/Index.php">Anasayfa <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="http://www.koeri.boun.edu.tr/scripts/sondepremler.asp" target="_blank">Referans</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/ContactForm.php">İletişim</a>
                  </li>
                </ul>
              </div>
            </nav>
        </div>
            <table id ="tablo" class="table table-hover table-striped table-responsive">
        <thead>
          <tr>
            <th>Tarih</th>
            <th>Saat</th>
            <th style="display:none">Enlem</th>
            <th style="display:none">Boylam</th>
            <th>Derinlik</th>
            <th>Şiddet</th>
            <th>Yer</th>
          </tr>
        </thead>
        <tbody>
          <?
            foreach (preg_split("/((\r?\n)|(\r\n?))/", $html) as $line) {
                if(preg_match('/lksel/',$line) || preg_match('/REVIZE01/',$line)){
                    $deprem = explode(" ", $line);
                    for($i=0; $i<count($deprem); $i++)    
                    {
                        if($deprem[$i]==NULL){
                            unset($deprem[$i]);
                        }
                    }
                    $deprem2=array_values($deprem);
                    if($deprem2[6]>4){echo "<tr class='table-danger'>";}
                    else if($deprem2[6]>3){echo "<tr class='table-warning'>";}
                    else{ echo "<tr>";}
                    echo "<th scope='row'>".trim($deprem2[0], " \t.")."</th>";
                    echo "<td>".$deprem2[1]."</td>";
                    echo "<td id='enlem' style='display:none'>".$deprem2[2]."</td>";
                    echo "<td id='boylam' style='display:none'>".$deprem2[3]."</td>";
                    echo "<td>".$deprem2[4]." km</td>";
                    echo "<td>".$deprem2[6]."</td>";
                    echo "<td id='yer'>".$deprem2[8]." ".$deprem2[9]." ".$deprem2[10]." ".$deprem2[11]."</td>";
                    echo "</tr>";  
                }
                
            }
          ?>
        </tbody>
      </table>
        <div class="modal fade">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div id="map"></div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    </div>
      <button onclick="topFunction()" id="myBtn" title="Go to top">Yukarı</button>
      <footer>
        DepremSonDakika.com Engür Canfes tarafından tasarlanmıştır. Kandilli rasatanesi sitesinden alınan verilerini içerir. ©®2017 
      </footer>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=YOURAPI_KEY&callback=initMap">
</script>
      <script type="text/javascript">

        function refreshPage() {
          var screenSize = $(window).width();
          if(screenSize>694)
          {
              $("#tablo").width(700);
              $(".adsbygoogle").attr("data-ad-slot", "9428113607");
              $(".adsbygoogle").attr("style", "display:block;width:728px;height:90px;");
          }
          else
          {
              $(".adsbygoogle").attr("data-ad-slot", "7326217415");
              $(".adsbygoogle").attr("style", "display:block;width:320px;height:100px;");

          }
        }
          
        refreshPage();
          
        //****Yukarı tuşu****
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Chrome, Safari and Opera 
            document.documentElement.scrollTop = 0; // For IE and Firefox
        }
        
        
        $("tr").click(function(){
            var latLng = new google.maps.LatLng(parseFloat($(this).find('td:nth-child(3)').text()).toFixed(3), parseFloat($(this).find('td:nth-child(4)').text()).toFixed(3));
            var radius = Math.pow(parseInt($(this).find('td:nth-child(6)').text()),3)*1000;
              $('.modal').modal('show');
              $('.modal').on("shown.bs.modal", function initMap() {
                    var uluru = latLng;
                    var map = new google.maps.Map(document.getElementById('map'), {
                      zoom: 8,
                      center: uluru
                    });
                    var cityCircle = new google.maps.Circle({
                        strokeColor: '#FF0000',
                        strokeOpacity: 0.8,
                        strokeWeight: 2,
                        fillColor: '#FF0000',
                        fillOpacity: 0.35,
                        map: map,
                        center: uluru,
                        radius: radius
                    });
              });
            $(".modal-title").html($(this).find('td:nth-child(7)').text());
        });
      </script>
  </body>
</html>