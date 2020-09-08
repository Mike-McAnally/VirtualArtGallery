<!DOCTYPE>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,shrink-to-fit=no,user-scalable=no,maximum-scale=1,minimum-scale=1">
    <title>Virtual Art Gallery</title>
    <meta name="description" content="A-frame Virtual Reality Art Gallery Demo in a Park. By Michael McAnally, July 29, 2019. Dual controller compatible for teleport movement and raycaster click selection launches. Integration Note: Presently for e-commerce use Firefox browser.  Artist data loaded from Database using PHP/MySQL on server-side."></meta>
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0, shrink-to-fit=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="gray-translucent" />
    <!-- A-frame and other useful component libraries -->
    <script src="https://rocketvirtual.com/aframe-masterNEW/dist/aframe-master.min.js"></script>
    <script src="https://rocketvirtual.com/aframe-extras-masterNEW/dist/aframe-extras.min.js"></script>
    <script src="https://rocketvirtual.com/aframe-environment-component-masterNEW/dist/aframe-environment-component.js"></script>
    <script src="https://rocketvirtual.com/aframe-teleport-controls-masterNEW/dist/aframe-teleport-controls.min.js"></script>
    <script src="https://rocketvirtual.com/aframe-teleport-extras-masterNEW/dist/aframe-teleport-extras.min.js"></script>
    <script src="https://rocketvirtual.com/superframe-masterNEW/components/event-set/dist/aframe-event-set-component.min.js"></script>
    <script src="https://rocketvirtual.com/superframe-masterNEW/components/thumb-controls/dist/aframe-thumb-controls-component.min.js"></script>
    <script src="https://rocketvirtual.com/superframe-masterNEW/components/text-geometry/dist/aframe-text-geometry-component.min.js"></script>
<!-- 
    <script src="https://rocketvirtual.com/aframe-particle-system-component-master/dist/aframe-particle-system-component.min.js"></script>
 -->

     
    <!-- for creating Navmesh... Also uncomment a-scene inspector-plugin-recast
    <script src="https://recast-api.donmccurdy.com/aframe-inspector-plugin-recast.js"></script>
-->

<script type="text/javascript">

var showDescription = [false, false, false, false, false, false, false];

function artwork_Information(art_object) {

  switch(art_object) {

    // Make artwork text description and buy button, visible/not visible
    case "artworkPosition1":

        if (showDescription[1]) {
          document.getElementById('buyCardLettering1').setAttribute('visible', true);
          showDescription[1] = false;
        } else {
          document.getElementById('buyCardLettering1').setAttribute('visible', false);
          showDescription[1] = true;
        }

        break;
    case "artworkPosition2":
        if (showDescription[2]) {
          document.getElementById('buyCardLettering2').setAttribute('visible', true);
          showDescription[2] = false;
        } else {
          document.getElementById('buyCardLettering2').setAttribute('visible', false);
          showDescription[2] = true;
        }
        break;
    case "artworkPosition3":
        if (showDescription[3]) {
          document.getElementById('buyCardLettering3').setAttribute('visible', true);
          showDescription[3] = false;
        } else {
          document.getElementById('buyCardLettering3').setAttribute('visible', false);
          showDescription[3] = true;
        }
        break;
    case "artworkPosition4":
        if (showDescription[4]) {
          document.getElementById('buyCardLettering4').setAttribute('visible', true);
          showDescription[4] = false;
        } else {
          document.getElementById('buyCardLettering4').setAttribute('visible', false);
          showDescription[4] = true;
        }
        break;
    case "artworkPosition5":
        if (showDescription[5]) {
          document.getElementById('buyCardLettering5').setAttribute('visible', true);
          showDescription[5] = false;
        } else {
          document.getElementById('buyCardLettering5').setAttribute('visible', false);
          showDescription[5] = true;
        }
        break;
    case "artworkPosition6":
        if (showDescription[6]) {
          document.getElementById('buyCardLettering6').setAttribute('visible', true);
          showDescription[6] = false;
        } else {
          document.getElementById('buyCardLettering6').setAttribute('visible', false);
          showDescription[6] = true;
        }
        break;
    case "artworkPosition7":
        if (showDescription[7]) {
          document.getElementById('buyCardLettering7').setAttribute('visible', true);
          showDescription[7] = false;
        } else {
          document.getElementById('buyCardLettering7').setAttribute('visible', false);
          showDescription[7] = true;
        }
        break;
    default:
    }
}

//   Solves Google mute of audio problem (see...) https://stackoverflow.com/questions/47921013/play-sound-on-click-in-a-frame?answertab=active#tab-top
AFRAME.registerComponent('audiohandler', {
  init:function() {
     let playing = false;
     let audio = document.querySelector("#playAudio");
     this.el.addEventListener('click', () => {

          if(!playing) {
              audio.play();
           } else {
              audio.pause();
              audio.currentTime = 0;
           }
           playing = !playing;
     });
  }
})

function playSound() {

//alert("TEST Sound playing functional!!!");
}


</script>
  </head>
<body>




<div id="video-permission">
    <button id="video-permission-button">Allow VR video</button>
</div>


<!-- Audio goes here -->
<button id="playButton" type="button">Play Music</button>
<!--  turn on audio for fountain and gallery
 <audio id="playAudio" autoplay loop>
        <source src="https://rocketvirtual.com/webvr/mp3/20190317_140202.mp3" type="audio/mpeg">
 </audio>
 -->


 
<!-- used for creating Navmesh... see javascript component above <a-scene inspector-plugin-recast>  https://github.com/donmccurdy/aframe-inspector-plugin-recast-->

<a-scene render-order="menuBackground, menuItem, button">

    <!-- Load our assets -->    
    <!-- <a-assets timeout="35000">   -->
    <a-assets>

      <!-- 7 artwork filenames will be loaded from database here... -->

<!-- Open a connection to the database, we are going to need it. Closed at the end -->
<?php
$servername = "localhost";
$username = "touchvoi_michael";
$password = "ButtHole69!";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Featured Artist
$Known_As = 'Michael McAnally';

// Select Artist_ID = Michael Blade
$sql = "SELECT Artist_ID FROM touchvoi_Virtual_Gallery.Artist WHERE Known_As = 'Michael McAnally' AND Birth_Date = '1961-03-19'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "Artist_ID: " .$row["Artist_ID"]. "<br>";
        $id1 = $row["Artist_ID"];
    }
} else {
    //echo "0 results";
}


// Select Gallery_ID
$sql = "SELECT Gallery_ID FROM touchvoi_Virtual_Gallery.Gallery WHERE Gallery_Name = 'Virtual Art Gallery'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "Gallery_ID: " .$row["Gallery_ID"]. "<br>";
        $id2 = $row["Gallery_ID"];
    }
} else {
    //echo "0 results";
}


// Important Programmer Note: At the moment Gallery is limited to 7 artworks of "one artist's type of work".  Not two types as in Painter and Photographer types like my case.  This is a know limitation and the artist may only have one Artist_Type_ID or one record (or row) in the Artist table (i.e. Artist and type of artist is essentially unique).
for ($curate = 1; $curate <= 7; $curate++) {

    // Select gallery Artwork for Michael Blade, Photographer, Curate 3-7
    $sql = "SELECT Dir, File FROM touchvoi_Virtual_Gallery.Artwork WHERE Artist_ID = '" .$id1. "' AND Gallery_ID = '" .$id2. "' AND Curate_ID = ' .$curate. '";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

              $artwork_num = "artwork" .$curate;
              echo '<img crossorigin="anonymous" id="' .$artwork_num. '" src="' .$row["Dir"].$row["File"]. '"/>';
        }
    } else {
        echo "0 results";
    }

} 


$conn->close();
?>

      <a-asset-item id="LefthandModel" src="../assets/leftHand.json"></a-asset-item>
      <a-asset-item id="RighthandModel" src="../assets/rightHand.json"></a-asset-item>

      <!-- Gallery and various decrative assets  -->
      <a-asset-item id="artGallery" src="../gltf/finalVRArtGallery.gltf" nav-agent="speed: 1.5; active: true"></a-asset-item>
      <a-asset-item id="marbleFountain" src="../gltf/fountain/scene.gltf"></a-asset-item>
      <img crossorigin="anonymous" id="waterDroplet" src="../images/dot2.png">
      <a-asset-item id="walkwayStone" src="../gltf/stone.glb"></a-asset-item>
      <a-asset-item id="kioskGallery" src="../gltf/kiosks5.glb"></a-asset-item>

      <img crossorigin="anonymous" id="buyNow" src="../images/buyNow2.png">
      <img crossorigin="anonymous" id="methodsOfPayment" src="../images/methodsOfPayment.png">
      <img crossorigin="anonymous" id="transparentMenuBack" src="../images/transparentBack4.png">

      <img crossorigin="anonymous" id="VRnode_HelloIsland" src="https://rocketvirtual.com/A-Frame_WebXR/assets/img/HelloIslandBanner1.png">

      <!-- Fonts  -->
      <img crossorigin="anonymous" id="whiteHue" src="../images/whiteHue3.png">
      <a-asset-item id="dawningFont" src="../superframe-master/components/text-geometry/examples/vaporwave/fonts/dawningOfANewDayRegular.typeface.json"></a-asset-item>
      <a-asset-item id="exoFont" src="../superframe-master/components/text-geometry/examples/vaporwave/fonts/exo2Black.typeface.json"></a-asset-item>
      <a-asset-item id="exoItalicFont" src="../superframe-master/components/text-geometry/examples/vaporwave/fonts/exo2BlackItalic.typeface.json"></a-asset-item>
      <!-- Video Player Controls  -->
      <img crossorigin="anonymous" src="../images/play.png" id="play" >
      <img crossorigin="anonymous" src="../images/pause.png" id="pause" >
      <img crossorigin="anonymous" src="../images/volume-normal.png" id="volume-normal" >
      <img crossorigin="anonymous" src="../images/volume-mute.png" id="volume-mute" >
      <img crossorigin="anonymous" src="../images/seek-back.png" id="seek-back" >
      <!-- Video source .mp4-->
      <video crossorigin="anonymous" id="video-src" src="../video/VirtualRealityArtworkGallery.mp4"></video>

      <!-- Black Menu Back -->
      <img crossorigin="anonymous" id="menuBlack" src="../artwork/DSC_0295.jpg">
      <img crossorigin="anonymous" id="menuLogo" src="../images/RVlogo.png">

    </a-assets>

    <!-- Display the Gallery  -->
    <a-entity id="theGallery" gltf-model="#artGallery" scale="1 1 1" position="-18.826 0.006 19.083" rotation="0 0 0" nav-agent="speed: 1.5; active: true" ></a-entity>

    <!-- nav-mesh working  -->
    <a-entity gltf-model="../gltf/navmesh.gltf" scale="" position="0.04732 0.006 -0.0117" rotation="" visible="false" nav-mesh=""></a-entity>

    <!-- Name of the Gallery   -->
    <a-entity id="galleryLettering" text-geometry="value: Virtual Art Gallery"; font: #exoFont; bevelEnabled: true; bevelSize: 0.05; bevelThickness: 0.05; curveSegments: 12; size: .11; height: 0; material="color:black; metalness:3; roughness: 0; transparent: true; opacity: 1" position="3.86855 1.671 -2.85655" scale="0.3 0.3 0.3" rotation="0 99.63 0" ></a-entity>

    <!-- Create the Park environment -->
    <a-entity id="outside" environment="preset: forest; shadow: true; dressingAmount: 375; horizonColor: #dbdedb; playArea: 1.25;" visible=""></a-entity>

    <!-- External park environment and lighting -->
    <a-entity class="environment" position="-1.2 0.88 -0.55" light="intensity: 0.6; castShadow: true; shadowCameraLeft: -10; shadowCameraBottom: -10; shadowCameraRight: 10; shadowCameraTop: 10; color: #1e751c; groundColor: #44713e" visible=""></a-entity>
    <a-entity class="environment" position="0 50 0" light="type: hemisphere; color: #41623c; intensity: 0.7; groundColor: #14210c" visible=""></a-entity>
    <a-sky radius="200" theta-length="110" class="environment" material="shader: gradientshader; topColor: #11abc6; bottomColor: #6fd6fd" visible="" geometry=""></a-sky>
    <a-entity rotation="-90 0 0" class="environmentGround environment" visible="" scale="1 1 4.18" shadow=""></a-entity>

    <!-- Marble Fountain from SketchFab https://sketchfab.com/3d-models/fountain-2e9061fb2e974bf796a8c9c8ffb0cc98  -->
    <a-entity id="marbleWaterFountain" gltf-model="#marbleFountain" scale="0.75 0.75 0.75" position="12.79 -0.25283 1.39702" ></a-entity>

    <!-- Gallery Kiosk scaled to size -->
    <a-entity id="kiosk" gltf-model="#kioskGallery" scale="0.004 0.0018 0.002" position="-7.73 -0.21958 -6.929" rotation="-0.04 28.75 0.099" ></a-entity>

    <!-- Modified water for fountain  -->
    <a-entity id="waterFountain" position="12.79 1.559 1.39702" scale="0.75 0.75 0.75" particle-system="color:#000, #FFF;duration:NaN;velocitySpread:5 3.75 5;velocityValue:0 12 0;accelerationSpread:1 0 1;particleCount:75;maxAge:1.5;texture:https://rocketvirtual.com/webvr/images/dot2.png"></a-entity>
    <!-- General light  -->
    <a-entity position="25.73 7.326 0" rotation="0 0 98.748" light="intensity: 0.3"></a-entity>

    <!-- Stone Walkway from SketchFab https://sketchfab.com/3d-models/walkway-stone-a03dc7cd34e84fa9bdca0e2b8be73840  -->
    <a-entity id="stoneWalkway1" gltf-model="#walkwayStone" scale="1 1 1" rotation="0 7.582 0" position="0.94107 0 2.39884"></a-entity>
    <a-entity id="stoneWalkway2" gltf-model="#walkwayStone" scale="1 1 1" rotation="0 7.582 0" position="0.640 0 0.563"></a-entity>
    <a-entity id="stoneWalkway3" gltf-model="#walkwayStone" scale="1 1 1" rotation="0 7.582 0" position="2.79529 0 2.14799"></a-entity>
    <a-entity id="stoneWalkway4" gltf-model="#walkwayStone" scale="1 1 1" rotation="0 7.582 0" position="4.65025 0 1.89293"></a-entity>
    <a-entity id="stoneWalkway5" gltf-model="#walkwayStone" scale="1 1 1" rotation="0 7.582 0" position="2.510 0 0.305"></a-entity>
    <a-entity id="stoneWalkway6" gltf-model="#walkwayStone" scale="1 1 1" rotation="0 7.582 0" position="4.38536 0 0.04847"></a-entity>

    <a-link href="https://rocketvirtual.com/A-Frame_WebXR/HelloIsland.html" color="white" image="#VRnode_HelloIsland" visible="true" title="Return to Hello Island" on="click" position="-5.12 1.794 6.558" rotation="0 -92.2 0" scale=".75 .75 .75" material="shader: portal; borderEnabled: 1; pano: #VRnode_HelloIsland; side: back"></a-link>

    <a-cylinder position="-5.12 0.44777 6.558" scale="1 0.6 1" radius="0.5" height="1.5" color="#704C0E" shadow></a-cylinder>

      <!-- Setup the camera and controller hands for basic movement, selection and teleport  -->
      <a-entity id="rig" movement-controls="constrainToNavMesh: true;" position="0 0 5">
            <a-entity id="cam" camera position="0 1.6 0" look-controls="pointerLockEnabled: true"></a-entity>
                
                <a-entity id="leftController" hand-controls="hand: left; handModelStyle: lowPoly; color: #15ACCF" tracked-controls vive-controls="hand: left" oculus-touch-controls="hand: left" windows-motion-controls="hand: left" teleport-controls="cameraRig: #rig; button: trigger; curveShootingSpeed: 20;" visible="true"></a-entity>

                <a-entity id="rightController" hand-controls="hand: right; handModelStyle: lowPoly; color: #15ACCF" tracked-controls vive-controls="hand: right" oculus-touch-controls="hand: right" windows-motion-controls="hand: right" laser-controls raycaster="showLine: true; far: 20; interval: 0; objects: .clickable, a-link;" line="color: lawngreen; opacity: 0.5" visible="true"></a-entity>
      
      </a-entity>



<?php
$servername = "localhost";
$username = "touchvoi_michael";
$password = "ButtHole69!";

$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//Featured Artist
$Known_As = 'Michael McAnally';


// Select Artist_ID = Michael Blade
$sql = "SELECT Artist_ID FROM touchvoi_Virtual_Gallery.Artist WHERE Known_As = 'Michael McAnally' AND Birth_Date = '1961-03-19'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "Artist_ID: " .$row["Artist_ID"]. "<br>";
        $id1 = $row["Artist_ID"];
    }
} else {
    //echo "0 results";
}


// Select Gallery_ID
$sql = "SELECT Gallery_ID FROM touchvoi_Virtual_Gallery.Gallery WHERE Gallery_Name = 'Virtual Art Gallery'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "Gallery_ID: " .$row["Gallery_ID"]. "<br>";
        $id2 = $row["Gallery_ID"];
    }
} else {
    //echo "0 results";
}


for ($curate = 1; $curate <= 7; $curate++) {

    // Select from Curate
    $sql = "SELECT * FROM touchvoi_Virtual_Gallery.Curate WHERE Curate_ID = '" .$curate. "' AND Gallery_ID = '" .$id2. "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

            $artwork_num = "artwork" .$curate;
            $artworkPosition_num = "artworkPosition" .$curate;
            $spot_num = "spot" .$curate;

            // The Artwork Piece: It's position in the gallery, scale, rotation, transparency, visibility
            echo '<a-plane id="' .$artworkPosition_num. '" class="clickable" position="' .$row["Pos_X"]. ' ' .$row["Pos_Y"]. ' ' .$row["Pos_Z"]. '" scale="' .$row["Scale_X"]. ' ' .$row["Scale_Y"]. ' ' .$row["Scale_Z"]. '" rotation="' .$row["Rot_X"]. ' ' .$row["Rot_Y"]. ' ' .$row["Rot_Z"]. '" material="src: #' .$artwork_num. '; color: white; transparent: true" geometry="" animation="property: visible; to: true; startEvents: materialtextureloaded" onclick="artwork_Information(' .$artworkPosition_num. ');"></a-plane>';

            // The Spot Light: It's position, angle, intensity
            echo '<a-entity id="' .$spot_num. '" position="' .$row["Spot_X"]. ' ' .$row["Spot_Y"]. ' ' .$row["Spot_Z"]. '" rotation="' .$row["Spot_Rot_X"]. ' ' .$row["Spot_Rot_Y"]. ' ' .$row["Spot_Rot_Z"]. '" scale="' .$row["Spot_Scale_X"]. ' ' .$row["Spot_Scale_Y"]. ' ' .$row["Spot_Scale_Z"]. '" light="type: spot; intensity: ' .$row["Spot_Intensity"]. '; angle: ' .$row["Spot_Angle"]. '"></a-entity>';          

            $Desc_X = $row["Desc_X"];
            $Desc_Y = $row["Desc_Y"];
            $Desc_Z = $row["Desc_Z"];

            $Desc_Rot_X = $row["Desc_Rot_X"];
            $Desc_Rot_Y = $row["Desc_Rot_Y"];
            $Desc_Rot_Z = $row["Desc_Rot_Z"];

            $Desc_Scale_X = $row["Desc_Scale_X"];
            $Desc_Scale_Y = $row["Desc_Scale_Y"];
            $Desc_Scale_Z = $row["Desc_Scale_Z"];

            $Buy_X = $row["Buy_X"];
            $Buy_Y = $row["Buy_Y"];
            $Buy_Z = $row["Buy_Z"];

            $Buy_Rot_X = $row["Buy_Rot_X"];
            $Buy_Rot_Y = $row["Buy_Rot_Y"];
            $Buy_Rot_Z = $row["Buy_Rot_Z"];

            $Buy_Scale_X = $row["Buy_Scale_X"];
            $Buy_Scale_Y = $row["Buy_Scale_Y"];
            $Buy_Scale_Z = $row["Buy_Scale_Z"];

        }
    } else {
        echo "0 results";
    }


    // Select from Artwork
    $sql = "SELECT * FROM touchvoi_Virtual_Gallery.Artwork WHERE Artist_ID = '" .$id1. "' AND Gallery_ID = '" .$id2. "' AND Curate_ID = '" .$curate. "'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {

            //$row["Artwork_Notes"]
            //$row["Materials_Process_Used"]            
            //$row["Size_Z"]
            //Framed_Flag
            //Unique_Flag
            //For_Sale_Flag
            //Sold_Flag

            $buyNowButton_num = "buyNowButton" .$curate;
            $buyCardLettering_num = "buyCardLettering" .$curate;

            //Programmer Note: Removing onclick href for e-commerce link.  Add field to Artwork table, put in echo below...
            // onclick="location.href='https://rocketvirtual.com/?q=node/54';"
            // add e_URL to database, a unique product_ID link for each artwork item buy button.

            $eurl = "location.href='https://rocketvirtual.com/?q=node/54'";

            // The BUY button
            echo '<a-plane id="' .$buyNowButton_num. '" class="clickable" src="#buyNow" position="' .$Buy_X. ' ' .$Buy_Y. ' ' .$Buy_Z. '" rotation="' .$Buy_Rot_X. ' ' .$Buy_Rot_Y. ' ' .$Buy_Rot_Z. '" scale="' .$Buy_Scale_X. ' ' .$Buy_Scale_Y. ' ' .$Buy_Scale_Z. '" visible="true" onclick="' .$eurl. '";" cursor-listener></a-plane>';

            // The Artwork's Description
            echo '<a-entity id="' .$buyCardLettering_num. '" text-geometry="value: Title: ' .$row["Title"]."\n\n". 'Photographer: ' .$Known_As."\n\n". 'Creation Date: ' .$row["Date_Created"]."\n\n". 'Description: ' .$row["Description"]."\n\n". 'Dimensions: ' .$row["Size_X"]. ' inches Wide x ' .$row["Size_Y"]." inches High, Landscape\n\n". 'Price: $' .$row["Price"]. '" ;="" font:="" #exofont;="" bevelEnabled: true; bevelSize: 0.05; bevelThickness: 0.05; curveSegments: 12; size: .15; height: 0; visible="true" material="color: white; metalness: 3; roughness: 0; transparent: true" position="' .$Desc_X. ' ' .$Desc_Y. ' ' .$Desc_Z. '" scale="' .$Desc_Scale_X. ' ' .$Desc_Scale_Y. ' ' .$Desc_Scale_Z. '" rotation="' .$Desc_Rot_X. ' ' .$Desc_Rot_Y. ' ' .$Desc_Rot_Z. '"></a-entity>';



        }
    } else {
        echo "0 results";
    }


}


$conn->close();
?>


    <!--  Menu Back -->      
    <a-plane id="blackMenuBack" position="-7.67849 1.26117 -6.8436" scale="0.830 0.60 0.50685" rotation="-30.8 28.852435689402864 0.071" material="src:#menuBlack;color:black;transparent:false"></a-plane>  

    <!--  Menu Logo -->
    <a-plane id="MenuLogoBack" position="-7.72139 1.66481 -6.92094" scale="0.52257 0.15496 0.50685" rotation="-30.799999999999997 28.852435689402864 0.071" material="src:#menuLogo;transparent:true" geometry="" visible="false"></a-plane>

    <!-- Kiosk Text   -->
    <a-entity id="playVideoText" text-geometry="value: Virtual Art Gallery"; font: #exoFont; bevelEnabled: true; bevelSize: 0.05; bevelThickness: 0.05; curveSegments: 12; size: .11; height: 0; material="color:white; sphericalEnvMap: #whiteHue; metalness:3; roughness: 0; transparent: true; opacity: 1" position="-8.02123 1.32632 -6.74466" scale="0.12936 0.15004 1" rotation="-29.99 27.599 0.101"></a-entity>

    <!-- MEDIAS HOLDER -->
    <a-sound id="alert-sound" src="src: url(https://rocketvirtual.com/webvr/assets/action.wav)" autoplay="false" position="0 0 0"></a-sound>
    <a-video id="video-screen" src="#video-src" position="-10.54169 3.17313 -12.45254" width="6" height="3" rotation="-0.04 28.75 0.099" visible="false" material="" geometry=""></a-video>

    <!-- PLAY VIDEO CONTROL -->
    <a-image class="clickable" id="control-play" width="0.4" height="0.4" src="#play" position="-7.66447 1.20548 -6.80266" rotation="-29.99 27.599 0.101" scale="0.4 0.4 1"></a-image>

    <!-- see commented out sections in the play code below   -->
    <a-image class="clickable" id="control-back" width="0.4" height="0.4" src="#seek-back" position="-10.9 0.6 -12.1" visible="false" scale="0.85 0.85 0.85" rotation="-0.04 28.75 0.099"></a-image>
    <!-- see commented out sections in the play code below   -->
    <a-image class="clickable" id="control-volume" width="0.4" height="0.4" src="#volume-mute" position="-9.04 0.595 -13.13" visible="false" scale="0.75 0.75 1" rotation="-0.04 28.75 0.099"></a-image>

    <!-- PROGRESSBAR -->
    <!-- see commented out sections in the play code below   -->
    <a-entity id="progress-bar" geometry="primitive:plane;height:0.1;width:4" material="opacity:0;transparent:true;visible:false" position="-10.02624 0.88506 -12.61837" rotation="-0.04 28.75 0.099">
    <!-- see commented out sections in the play code below   -->  
    <a-plane id="progress-bar-track" width="4" height="0.1" color="gray" position="0 0 0" opacity="0.2" visible="false"></a-plane>
    <!-- see commented out sections in the play code below   -->
    <a-plane id="progress-bar-fill" width="1.3027969689224046" height="0.1" color="#7198e5" position="-1.3486015155387978 0 0.01" geometry="" visible="false"></a-plane>

</a-scene>
<!-- These following scripts are required to make the video player and audio work...  -->
<script>
//Google Code for un-audio mute
// Existing code unchanged.
window.onload = function() {
  var context = new AudioContext();
  // Setup all nodes

}

// One-liner to resume playback when user interacted with the page.
document.querySelector('button').addEventListener('click', function() {
  context.resume().then(() => {
    console.log('Playback resumed successfully');
  });
});

//Video player code starts here . . .
      var AVideoPlayer = function() {
      // Vals
      this.duration         = 0;
      this.current_progress = 0;
      this.progressWidth    = 4;
      this.paused           = true;
      // Elems
      this.elProgressBar   = null;
      this.elProgressTrack = null;
      this.elProgressFill  = null;
      this.elAlertSound    = null;
      this.elVideo         = null;
      this.elVideoScreen   = null;
      this.elControlBack   = null;
      this.elControlPlay   = null;
      this.elControlVolume = null;
      this._initElements = function() {
        this.elProgressBar   = document.getElementById('progress-bar');
        this.elProgressTrack = document.getElementById('progress-bar-track');
        this.elProgressFill  = document.getElementById('progress-bar-fill');
        this.elAlertSound    = document.getElementById('alert-sound');
        this.elVideo         = document.getElementById('video-src');
        this.elVideoScreen   = document.getElementById('video-screen');
        this.elControlBack   = document.getElementById('control-back');
        this.elControlPlay   = document.getElementById('control-play');
        this.elControlVolume = document.getElementById('control-volume');
      }
      /**
      * PROGRESS
      */
      this.setProgress = function(progress) {
        var new_progress = this.progressWidth*progress;
        this._setProgressWidth(new_progress);
        var progress_coord = this._getProgressCoord();
        if (progress_coord != undefined) {
         progress_coord.x = -(this.progressWidth-new_progress)/2;
         this._setProgressCoord(progress_coord);
        }
      }
      this._getProgressCoord = function() {
        return AFRAME.utils.coordinates.parse(this.elProgressFill.getAttribute("position"))
      }
      this._getProgressWidth = function() {
        return parseFloat(this.elProgressFill.getAttribute("width"));
      }
      this._setProgressCoord = function(coord) {
        this.elProgressFill.setAttribute("position", coord);
      }
      this._setProgressWidth = function(width) {
        this.elProgressFill.setAttribute("width", width);
      }
      /*
      * UI SETTERS
      */
      this.isProgressBarVisible = function(isVisible) {
        // *** uncomment below to make progress bar appear  **
        //this.elProgressTrack.setAttribute("visible", isVisible);
        //this.elProgressFill.setAttribute("visible", isVisible);
      }
      this.isControlVisible = function(isVisible) {
        // *** uncomment below to make Back and Volume buttons appear
        //this.elControlBack.setAttribute("visible", isVisible);
        //this.elControlVolume.setAttribute("visible", isVisible);
        this.elVideoScreen.setAttribute("visible", isVisible);
      }
      /*
      * EVENTS
      */
      this._addPlayerEvents = function() {
        var that = this;
        this.elVideo.pause();
        this.elVideo.onplay = function() {
          that.duration = this.duration;
        }
        this.elVideo.ontimeupdate = function() {
          if (that.duration > 0) {
            that.current_progress = this.currentTime/that.duration;
          }
          that.setProgress(that.current_progress);
        }
      }
      this._addControlsEvent = function() {
        var that = this;
        this.elControlPlay.addEventListener('click', function () {
          that._playAudioAlert();
          if (that.elVideo.paused) {
            this.setAttribute('src', '#pause');
            that.elVideo.play();
            that.paused = false;
            that.isProgressBarVisible(true);
            that.isControlVisible(true);
          } else {
            this.setAttribute('src', '#play');
            that.elVideo.pause();
            that.paused = true;
            that.isProgressBarVisible(false);
            that.isControlVisible(false);
         }
        });
        this.elControlVolume.addEventListener('click', function () {
          that._playAudioAlert();
          if (that.elVideo.muted) {
            that.elVideo.muted = false;
            this.setAttribute('src', '#volume-normal');
          } else {
            that.elVideo.muted = true;
            this.setAttribute('src', '#volume-mute');
          }
        });
        this.elControlBack.addEventListener('click', function () {
          that._playAudioAlert();
          that.elVideo.currentTime = 0;
        });
      }
      this._addProgressEvent = function() {
        var that = this;
        this.elProgressBar.addEventListener('click', function (e) {
          if (e.detail == undefined || e.detail.intersection == undefined || that.duration === 0) {
            return;
          }
          let seekedPosition = (e.detail.intersection.point.x+(that.progressWidth/2))/that.progressWidth;
          try {
            let seekedTime = seekedPosition*that.duration;
            that.elVideo.currentTime = seekedTime;
          } catch (e) {
          }
        });
      }
      this._playAudioAlert = function() {
        if (this.elAlertSound.components !== undefined && this.elAlertSound.components.sound !== undefined) {
         // uncoment annoying ping sound
         //this.elAlertSound.components.sound.playSound();
        }
      }
      /**
      * MOBILE PATCH TO PLAY VIDEO
      */
      this._mobileFriendly = function() {
        if (AFRAME.utils.device.isMobile()) {
          var that = this;
          let video_permission        = document.getElementById('video-permission');
         let video_permission_button = document.getElementById('video-permission-button');
          video_permission.style.display = 'block';
          video_permission_button.addEventListener("click", function() {
            video_permission.style.display = 'none';
            that.elVideo.play();
            that.elVideo.pause();
          }, false);
        }
      }
      this.init = function() {
        this._initElements();
        //this._determinateProgressWidth();
        this.setProgress(this.current_progress);
        this._addPlayerEvents();
        this._addControlsEvent();
        this._addProgressEvent();
        this._mobileFriendly();
      }
      this.init();
    }
      let scene = document.querySelector('a-scene');
      var cursor = document.querySelector('a-cursor');
      /**
      * CINEMA MODE
      */
      scene.lightOff = function() {
        scene.islightOn = true;
        //scene.removeAttribute('animation__fogback');
        //scene.setAttribute('animation__fog', "property: fog.color; to: #0c192a; dur: 800; easing: easeInQuad;");
      }
      scene.lightOn = function() {
        scene.islightOn = false;
        //scene.removeAttribute('animation__fog');
        //scene.setAttribute('animation__fogback', "property: fog.color; to: #dbdedb; dur: 800");
      }
      /**
      * AVideoPlayer
      */
      var videoPlayer = new AVideoPlayer();
      document.querySelector('#control-play').addEventListener('click', function () {
        if (videoPlayer.paused) {
          // uncomment out the lightOn        scene.lightOn()
        } else {
          // uncomment out the lightOff       scene.lightOff();
        }
      });
    </script>
</body>
</html>
