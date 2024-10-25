// A $( document ).ready() block.
$( document ).ready(function() {
    window.METRO_LOCALE = "de-DE";
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
      
        effect: 'fade',
        fadeEffect: {
          crossFade: true
        },
        onlyExternal: true,
        allowTouchMove: false
    });
    
    $('#select-cars-model').on("change", function(){
        var car = $(this).find("option:selected").val();
        if (car == "BENTAYGA S") {
            swiper.slideTo(3, 200);
            $(".bentayga-s_info-technique").show();
            $(".flying-spurs_info-technique").hide();
            $(".continental-gt-s_info-technique").hide();
            $(".continental-gtc-s_info-technique").hide();

            
            $(".car1").show();
            $(".car2").hide();
            $(".car3").hide();
            $(".car4").hide();
        } else if (car == "FLYING SPUR S") {
            swiper.slideTo(2, 200);
            $(".flying-spurs_info-technique").show();
            $(".bentayga-s_info-technique").hide();
            $(".continental-gt-s_info-technique").hide();
            $(".continental-gtc-s_info-technique").hide();

            $(".car1").hide();
            $(".car2").show();
            $(".car3").hide();
            $(".car4").hide();
        } else if (car == "CONTINENTAL GT S") {
            swiper.slideTo(0, 200);
            $(".continental-gt-s_info-technique").show();
            $(".flying-spurs_info-technique").hide();
            $(".bentayga-s_info-technique").hide();
            $(".continental-gtc-s_info-technique").hide();

            $(".car1").hide();
            $(".car2").hide();
            $(".car3").show();
            $(".car4").hide();
        } else if (car == "CONTINENTAL GTC S") {
            swiper.slideTo(1, 200);
            $(".continental-gtc-s_info-technique").show();
            $(".flying-spurs_info-technique").hide();
            $(".continental-gt-s_info-technique").hide();
            $(".bentayga-s_info-technique").hide();

            $(".car1").hide();
            $(".car2").hide();
            $(".car3").hide();
            $(".car4").show();
        }
    });



    var platform = new H.service.Platform({
        'apikey': '54Hwj46J7s-oVu4EVCmsGfuKOB46U7lJsDpXVmNTSgw'
    });
    
    var defaultLayers = platform.createDefaultLayers();
    
    //Step 2: initialize a map 
    var map = new H.Map(document.getElementById('mapContainer'),
        defaultLayers.vector.normal.map,{
        center: {lat:51.13044,lng:10.01975},
        zoom: 6,
        pixelRatio: window.devicePixelRatio || 1
    });
    // add a resize listener to make sure that the map occupies the whole container
    window.addEventListener('resize', () => map.getViewPort().resize());
    
    //Step 3: make the map interactive
    // MapEvents enables the event system
    // Behavior implements default interactions for pan/zoom (also on mobile touch environments)
    var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));
    
    // Create the default UI components
    var ui = H.ui.UI.createDefault(map, defaultLayers);
    
    //$("#store_choosed")

    var stores = {
        "Bentley Berlin" : { "lat" : "52.5002448", "lng" : "13.3053335"},
        "Bentley Frankfurt" : { "lat" : "50.2205429", "lng" : "8.6070984"},
        "Bentley Hamburg" : { "lat" : "53.6647714", "lng" : "9.9928614"},
        "Bentley Hannover" : { "lat" : "52.4041480", "lng" : "9.7960429"},
        "Bentley Köln" : { "lat" : "50.9811964", "lng" : "6.8988143"},
        "Bentley Mannheim" : { "lat" : "49.5403075", "lng" : "8.4655569"},
        "Bentley München" : { "lat" : "48.1866233", "lng" : "11.5543392"},
        "Bentley Nürnberg" : { "lat" : "49.2477330", "lng" : "11.1187200"},
        "Bentley Singen" : { "lat" : "47.7536596", "lng" : "8.8638462"},
        "Bentley Stuttgart" : { "lat" : "48.6890486", "lng" : "9.0024403"},
    };

    function checkStep1(){
        $(".error-email").text("");
        $(".error-firstname").text("");
        $(".error-lastname").text("");
        $(".error-phone").text("");
        var error = false;
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        var phoneformat = /\(?\+\(?49\)?[ ()]?([- ()]?\d[- ()]?){10}$/;
        if ($("#email").val().length == 0) {
            $(".error-email").text("Pflichtfelder");
            error = true;
        }else if(!$("#email").val().match(mailformat))
        {
            $(".error-email").text("Ungültige E-Mail");
            error = true;
        }
        if ($("#firstname").val().length == 0) {
            $(".error-firstname").text("Pflichtfelder");
        }
        if ($("#lastname").val().length == 0) {
            $(".error-lastname").text("Pflichtfelder");
        }
        if ($("#phone").val().length == 0) {
            $(".error-phone").text("Pflichtfelder");
        }
        /*
        else if(!$("#phone").val().match(phoneformat))
        {
            $(".error-phone").text("Ungültige Telefonnummer");
            error = true;
        }*/
        return error;
    }

    $("#select-store").on("change", function(){
        var store_choosed = $(this).find("option:selected").val();
        var lat_lng = stores[store_choosed];
        map.setCenter(lat_lng);
        map.setZoom(10);
    });

    function markerClick(evt){
        var data = evt.target.getData();
        var name = data.name;
        $("#select-store").val(name).change();
    }

    map.addEventListener('pointermove', function (event) {
        if (event.target instanceof H.map.Marker) {
            map.getViewPort().element.style.cursor = 'pointer';
        } else {
            map.getViewPort().element.style.cursor = 'auto';
        }
    }, false);

    var group = new H.map.Group();
    for (const [key, value] of Object.entries(stores)) {
        var icon = new H.map.Icon("/images/Bentley-logo-svg.svg");
        var marker = new H.map.Marker(value, {icon: icon, "data" : {"name" : key, "style" : "cursor:pointer"}});
        marker.set
        marker.addEventListener('tap', markerClick);
        map.addObject(marker);
        group.addObject(marker);
    }
    map.addObject(group);

    var step = 1;
    var swiper2 = null
    $(".next-btn").on("click", function(e){
        e.preventDefault();
        if (step == 1 && !checkStep1()){
            $(".step-1").hide();
            $(".step-2").show();
            $(".prev-btn").show();
            $(".circle").removeClass("active");
            $(".circle-2").addClass("active");
            step = 2;
            map.getViewPort().resize();
        } else if (step == 2){
            $(".step-2").hide();
            $(".step-3").show();
            $(".circle").removeClass("active");
            $(".circle-3").addClass("active");
            $(".next-btn").hide();
            $("#send-form").show();
            if (swiper2 == null) {
                swiper2 = new Swiper('.swiper2', {
                    // Optional parameters
                    direction: 'horizontal',
                    loop: true,
                  
                    effect: 'fade',
                    fadeEffect: {
                      crossFade: true
                    },
                    onlyExternal: true,
                    allowTouchMove: false
                });
            }
            var car2 = $("#select-cars-model").find("option:selected").val();
            console.log(car2);
            if (car2 == "BENTAYGA S") {
                swiper2.slideTo(0, 200);
            } else if (car2 == "FLYING SPUR S") {
                swiper2.slideTo(1, 200);
                console.log(swiper2);
            } else if (car2 == "CONTINENTAL GT S") {
                swiper2.slideTo(2, 200);
            } else if (car2 == "CONTINENTAL GTC S") {
                swiper2.slideTo(3, 200);
            }
            step = 3;
        }
    })
    $(".prev-btn").on("click", function(e){
        e.preventDefault();
        if (step == 2){
            $(".step-1").show();
            $(".step-2").hide();
            $(".prev-btn").hide();
            step = 1;
        } else if (step == 3){
            $(".step-2").show();
            $(".step-3").hide();
            $(".next-btn").show();
            $("#send-form").hide();
            step = 2;
        }
    })
    
});