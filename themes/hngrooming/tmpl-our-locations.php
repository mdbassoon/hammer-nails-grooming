<?php
/**
 * Template Name: Our Locations
 *
 * @package WordPress
 */
get_header();
?>
<?php $key = 'AIzaSyDTfEMCccFxb8xUKhA6wFn92TCqTREbKTE'; ?>
<script src="<?php echo get_template_directory_uri();?>/js/markcluster.js?1" type="text/javascript"></script>
<script src="https://unpkg.com/@google/markerclustererplus@5.0.1/dist/markerclustererplus.min.js" type="text/javascript"></script>
<style>
    .gm-style-iw-d h3 {
        color: #000;
        font-size: 40px;
        font-family: 'Moonshiner';
    }
    .gm-style-iw-d p {
        color:#000;
        font-weight: 300;
        font-size: 13px;
        font-family: 'Moonshiner';
        padding-top:10px;
    }
    .gm-style-iw-d p strong,.gm-style-iw-d a {
        color:#e3c76c!important
    }
    .cluster div {
        font-size: 18px;
        font-weight:bold;
        color: #dbb339;
        margin-top: -25px;
    }
</style>
    <main class="overflow-hidden">

        <!--================ location-area start ================-->
        <section class="location-area">
            <div class="container">
                <div class="location-upper">
                    <form action="/our-locations">
                        <div class="location-item justify-content-center">
                            <input class="text-16" type="text" name="zip" placeholder="Enter Your City Or Zip" required>
                            <button class="button" type="submit">Submit</button>
                        </div>
                    </form> 
                </div>
                <div class="location-tablinks">
                    <ul class="nav nav-tabs" role="tablist">
                        <li>
                            <a href="#" class="nav-link active text-34" data-state="all">All</a>
                        </li>
                        <?php 
                        $states = hn_state_abbr();
                        $locations_by_state = array();
                        foreach($states as $abbr=>$state){
                            $locations_in_state = get_posts(array(
                                'post_type'=>'location',
                                'meta_key'      => 'state',
                                'meta_value'    => $abbr,
                                'fields' => 'ids',
                                'posts_per_page'=>-1,
                                'orderby' => 'title',
                                'order' => 'ASC',
                            ));
                            if(count($locations_in_state)>0){
                                $locations_by_state[$abbr] = $locations_in_state
                                ?>
                                <li>
                                    <a href="#" class="nav-link text-34" data-state="<?php echo $abbr; ?>"><?php echo $state; ?></a>
                                </li>
                                <?php
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <style>
                .map-section {
                    position:relative;
                }
                .map-section .vertical-textcnt {
                    display: flex;
                    justify-content: center;
                    position: absolute;
                    left: -52px;
                    top: 0px;
                    height: 100%;
                    padding: 5px;
                }
            </style>
            <div class="location-tabmain">
                <div class="tab-content">
                    <div class="tab-pane active" id="tab1" role="tabpanel">
                        <div class="row g-0">
                            <div class="col-lg-5 order-2 order-lg-1">
                                <div class="map-left maptab1">
                                    <?php 
                                    $i = 0;
                                    $weekday = date('l');
                                    $all_coord = array();
                                    foreach($locations_by_state as $abbr=>$state_info){
                                        ?>
                                        <div class="map-section state-<?php echo $abbr; ?>">
                                            <div class="vertical-textcnt veticaltext<?php echo (($i+1) % 2); ?>">
                                                <span><?php echo hn_state_abbr($abbr); ?></span>
                                            </div>
                                        <?php 
                                        foreach($state_info as $location_id){
                                            if(get_field('location_status',$location_id)['hide_listing'][0]=='1'){
                                                continue;
                                            }
                                            $hours = get_field('hours',$location_id);
                                            $todays_hours = '';
                                            foreach($hours as $time){
                                                if($time['day']==$weekday){
                                                    //$todays_hours = $time['times'];
                                                    //break;
                                                }
                                            }
                                            $linkActive = true;
                                            if(get_field('location_status',$location_id)['is_it_live'][0]!='1'&&get_field('location_status',$location_id)['presale'][0]!='1'){
                                                $linkActive = false;
                                            }
                                            $all_coord[] = array(
                                                'lat'=>get_field('coordinates',$location_id)['lat'],   
                                                'lng'=>get_field('coordinates',$location_id)['lng'],
                                                'info'=>array(
                                                    'title'=>get_the_title($location_id),
                                                    'address'=>get_field('address',$location_id)['address'],
                                                    'phone'=>get_field('address',$location_id)['phone'],
                                                    'link'=>get_the_permalink($location_id),
                                                    'linkActive'=>$linkActive,
                                                ),
                                            );
                                            ?>
                                            <div class="mapleft-item">
                                                <div class="mapleft-cnt">
                                                    <h3 class="title-lg4"><?php echo get_the_title($location_id); ?></h3>
                                                    <?php 
                                                    if(get_field('location_status',$location_id)['hide_link'][0]=='1'){
                                                        ?>
                                                        <p class="text-16">Coming Soon</p>
                                                        <?php
                                                    } else {
                                                        ?>
                                                        <p class="text-16"><?php 
                                                        var_dump(get_field('address',$location_id)['address']);
                                                        //echo get_field('address',$location_id)['address']; 
                                                        
                                                        ?></p>
                                                        <ul class="d-flex align-items-center">
                                                            <li><a href="<?php echo get_the_permalink($location_id); ?>" class="button view-btn">View</a></li>
                                                            <li><a href="<?php echo get_field('booking_link',$location_id); ?>" class="button book-btn">Book</a></li>
                                                        </ul>
                                                        <?php
                                                    }
                                                    ?>
                                                    
                                                </div>
                                                <div class="mapright-cnt">
                                                    <div class="mapinner-cnt" style="style="<?php // echo get_field('location_status',$location_id)['is_it_live'][0]!='1'?'display:none;':''; ?>">
                                                        <h4 class="title-sm">Call Us</h4>
                                                        <a href="#" class="text-16"><?php //echo get_field('address',$location_id)['phone']; ?> </a>
                                                    </div>
                                                    <div>
                                                        <h4 class="title-sm">Today's Hours</h4>
                                                        <p class="text-16"><?php //echo get_field('location_status',$location_id)['is_it_live'][0]!='1'?'Coming Soon':$todays_hours; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        } ?>
                                        </div>
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-lg-7 order-1 order-lg-2">
                                <div class="map-right">
                                    <div id="map" style="width:100%;height:100%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--================ location-area2 start ================-->
        <section class="location-area2">
            <div class="container"><?php
                foreach($locations_by_state as $abbr=>$state_info){ ?>

                    <div class="location2-part">
                        <div class="location2-title">
                            <h1 class="title-xxl"><?php echo hn_state_abbr($abbr); ?></h1>
                        </div>
                        <div class="row">
                            <?php 
                            $coming_soon_locations = array();
                            foreach($state_info as $location_id){
                                if(get_field('location_status',$location_id)['is_it_live'][0]!='1'&&get_field('location_status',$location_id)['presale'][0]!='1'){
                                    $coming_soon_locations[] = $location_id;
                                    
                                } else {
                                    ?>
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="location2-item">
                                            <div class="location2-banner">
                                                <a href="<?php echo get_the_permalink($location_id); ?>">
                                                    <img src="<?php echo get_the_post_thumbnail_url($location_id)?get_the_post_thumbnail_url($location_id):get_theme_file_uri( 'assets/images/brea-ca.jpg'); ?>" alt="brea-ca">
                                                </a>
                                            </div>
                                            <h4>
                                                <a class="title-lg4" href="<?php echo get_the_permalink($location_id); ?>"><?php echo get_the_title($location_id); ?> </a>
                                            </h4>
                                            <div class="location2-btn">
                                                <a href="tel: <?php echo preg_replace("/[^0-9]/", "", get_field('address',$location_id)['phone']); ?>" class="button"><?php echo get_field('address',$location_id)['phone']; ?></a>
                                                <?php 
                                                if(get_field('location_status',$location_id)['presale'][0]!='1'&&get_field('booking_link')!=''){
                                                    ?>
                                                    <a href="<?php echo get_field('booking_link'); ?>" class="button">Schedule appointment</a>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <a href="<?php echo get_field('membership_link'); ?>" class="button">Join Our Club</a>
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                            } 
                            foreach($coming_soon_locations as $location_id){
                                ?>
                                <div class="col-sm-6 col-lg-3">
                                    <div class="location2-item">
                                        <div class="location2-banner">
                                            <a href="<?php echo get_the_permalink($location_id); ?>">
                                                <img src="<?php echo get_theme_file_uri( 'assets/images/comming-soon.jpg'); ?>" alt="comming-soon">
                                            </a>
                                        </div>
                                        <h4>
                                            <a class="title-lg4" href="<?php echo get_the_permalink($location_id); ?>"><?php echo get_the_title($location_id); ?></a>
                                        </h4>
                                        <p class="text-12">COMING SOON!</p>
                                    </div>
                                </div>
                                <?php
                            }
                            
                            ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </section>

    </main>

    <?php
get_footer();
?>

<script type="text/javascript">
        var clicked_event = true;
        let userLocation = null;
        let mapStyles = [
            {
            "featureType": "all",
            "elementType": "labels.text.fill",
            "stylers": [
                {
                    "saturation": 36
                },
                {
                    "color": "#000000"
                },
                {
                    "lightness": 40
                }
            ]
            },
            {
            "featureType": "all",
            "elementType": "labels.text.stroke",
            "stylers": [
                {
                    "visibility": "on"
                },
                {
                    "color": "#000000"
                },
                {
                    "lightness": 16
                }
            ]
            },
            {
            "featureType": "all",
            "elementType": "labels.icon",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
            },
            {
            "featureType": "administrative",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "lightness": 20
                }
            ]
            },
            {
            "featureType": "administrative",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "color": "#e3c76c"
                },
                {
                    "lightness": 17
                },
                {
                    "weight": 1.2
                }
            ]
            },
            {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "lightness": 20
                }
            ]
            },
            {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "lightness": 21
                }
            ]
            },
            {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "lightness": 17
                }
            ]
            },
            {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "lightness": 29
                },
                {
                    "weight": 0.2
                }
            ]
            },
            {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "lightness": 18
                }
            ]
            },
            {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "lightness": 16
                }
            ]
            },
            {
            "featureType": "transit",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "lightness": 19
                }
            ]
            },
            {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#e7cf83"
                },
                {
                    "lightness": 17
                }
            ]
            }
        ];
        
        let currentState = '';
        let mainMap;
        function scrollToLocation(map,centerCoord){
            let latLng = map.center;
            if(centerCoord){
                latLng = new google.maps.LatLng(centerCoord['lat'],centerCoord['lng']);
            }
            console.log('new center',latLng);
            let geocoder = new google.maps.Geocoder();
            
            geocoder.geocode({ 'latLng': latLng }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[1]) {
                        let addressComponents = results[1]['address_components'];
                        let state = '';
                        addressComponents.map(function(addressArr){
                            if(addressArr.types[0]=="administrative_area_level_1"){
                                state = addressArr.short_name;
                            }
                        });
                        if(state!=currentState){
                            let stateElement = jQuery('.state-'+state);
                            if(stateElement.length>0){
                                let top = jQuery('.state-'+state).position().top;
                                jQuery('.map-left').animate({
                                    scrollTop:top
                                },300);
                            }
                            currentState = state;
                        }
                        
                    }
                }
            });
        }
        function makeMaps(centerCoord=null){
            
            let zoom_per_view = 4.35;
                
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                zoom_per_view = 3.3;
            }
            
            if(centerCoord){
                
                console.log('centercoord',centerCoord);
                zoom_per_view = 5.5;
            }
            let g_coord = new google.maps.LatLng('39.50','-98.35');
            if(centerCoord){
                g_coord = new google.maps.LatLng(centerCoord['lat'],centerCoord['lng']);
            }
            
            mainMap = new google.maps.Map(document.getElementById('map'),{
                zoom: zoom_per_view,
                maxZoom: 20,
                center: g_coord,
                backgroundColor: "#ffffff",
                panControl: !1,
                scrollwheel: !1,
                styles: mapStyles,
            });
            
            let coordinates = <?php echo count($all_coord)>0?json_encode($all_coord):json_encode(array()); ?>;

            let markers = [];
            let infoWindows = [];

            let markerIcon = new google.maps.MarkerImage('<?php echo get_theme_file_uri( 'assets/images/pin.png'); ?>',null,null,null,new google.maps.Size(38,45));

            coordinates.map(function(map,i){
                let mapCoord = new google.maps.LatLng(parseFloat(map.lat),parseFloat(map.lng));
                
                let info = map.info;
                
                let address = (info.address&&info.address!=''?'<p>'+info.address+'</p>':'<p>COMING SOON</p>');
                let phone = (info.phone&&info.phone!=''?'<a href="tel: '+info.phone+'" tabindex="0">'+info.phone+'</a>':'');
                let link = (info.linkActive==true?'</strong></p><p><a href="'+info.link+'" target="_blank">View Location</a>':'');

                let infoWindow = new google.maps.InfoWindow({
                    content: '<div><h3>'+info.title+'</h3>'+address+'<p><strong>'+phone+link+'</div></p>',
                    maxWidth: 300,
                    pixelOffset: new google.maps.Size(0,-10)
                });
                
                infoWindows.push(infoWindow);

                let marker = new google.maps.Marker({
                    map: mainMap,
                    position: mapCoord,
                    icon: markerIcon,
                });
                markers.push(marker);

                marker.addListener("click", (function() {
                    console.log(marker);
                    infoWindows.map(function(window){
                        window.close();
                    });
                    infoWindows[i].open(mainMap, markers[i]);
                }));
                
            });
            new MarkerClusterer(mainMap,markers,{
                maxZoom: 12,
                averageCenter: !0,
                styles: [{
                    url: "<?php echo get_theme_file_uri( 'assets/images/cluster-pin.png'); ?>",
                    width: 55,
                    height: 70,
                    anchorText: [40, -1]
                }],
            });


            
            
        }
    
        function init() {
            const urlParams = new URLSearchParams(window.location.search);
            const zip = urlParams.get('zip');
            if(zip){
                console.log('search by zip');
                let geocoder = new google.maps.Geocoder();
                geocoder.geocode( { 'address':'zipcode '+zip}, function(results, status) {
                        if (status == google.maps.GeocoderStatus.OK) {
                            let centerCoord = {};
                            centerCoord['lat']  = results[0].geometry.location.lat();
                            centerCoord['lng']  = results[0].geometry.location.lng();                         
                            makeMaps(centerCoord); 

                        } else {
                            console.log("Geocode Error: " + status);
                            makeMaps();
                        }
                });
            } else {
                const successCallback = (position) => {
                    console.log(position);
                    let centerCoord = {};
                    centerCoord['lat']  = position.coords.latitude;
                    centerCoord['lng']  = position.coords.longitude;                    
                    makeMaps(centerCoord); 
                };
                const errorCallback = (error) => {
                    makeMaps();
                };

                navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
            }            
        }  
        console.log('loaded');

        jQuery('.location-tablinks a').on('click',function(e){
            console.log('clicked');
            e.preventDefault();
            
            jQuery('.nav-link').removeClass('active');
            jQuery(this).closest('.nav-link').addClass('active');
            
            let abbr = jQuery(this).attr('data-state');
            let top = 0;

            if(abbr!='all'){
                top = jQuery('.state-'+abbr).position().top;
            }
            let geocoder = new google.maps.Geocoder();
            geocoder.geocode({ 'address':'state '+abbr }, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    if (results[0]) {
                        console.log('results!',results);
                        mainMap.setCenter(results[0].geometry.location);
                    }
                }
            });
            jQuery('.map-left').animate({
                scrollTop:top
            },300);
        }); 
</script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?php echo $key;?>&callback=init"></script>