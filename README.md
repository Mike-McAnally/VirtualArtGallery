# VirtualArtGallery
A-frame Virtual Reality Art Gallery UI Demo in a Park.

<p><img src="https://rocketvirtual.com/images/VirtualArtGallery.png" /></p>

Virtual Reality UI coding example of a WebVR Virtual Art Gallery to be used for e-commerce shopping (not included) and developed using <a href="https://aframe.io/docs/0.9.0/introduction/">A-Frame</a>, Javascript, HTML5, PHP, and MySQL Database. All hybrid technologies are combined. <a href="https://whatis.techtarget.com/definition/LAMP-Linux-Apache-MySQL-PHP">LAMP</a> full stack development experience level assumed.  This is a starting point for building your own Virtual Reality Art Gallery!  Note: this code represents aprox. 2 months of of carefully designed and coded VR work.

<strong>PROJECT DEMO:</strong> https://rocketvirtual.com/html/Virtual_Art_Gallery_WebXR.php


<strong>DATABASE ENTITY DIAGRAM</strong>
<p><img src="https://rocketvirtual.com/images/VirtualGalleryEntity.png" /></p>

<strong>THE DATABASE SCHEMA HAS BEEN DESIGNED TO MANAGE THE FOLLOWING</strong> (Capture 90% of classifiction, style, type and subject of everything out there for Painting, Photography and Sculpture artworks and possibly more allowing for filtering and selecting of artworks types in future versions of this coded database.  Art_Style, Art_Class, Art_Type, Art_Subject reference tables are loaded with the following values):


<strong>Art Styles or Genres:</strong> 
Abstract,
Abstract Expressionism,
Art Noveau,
Art Deco,
Avant-garde,
Baroque,
Classicism,
Conceptual Art,
Constructivism,
Contemporary Art,
Cubism,
Dada (Dadaism),
Expressionism,
Fauvism,
Futurism,
Impressionism,
Installation Art,
Land Art (Earth Art),
Minimalism,
Modern Art,
Neo-Impressionalism,
Neo-Classicism,
Painterly,
Performance Art,
Photorealism,
Pointillism,
Pop Art,
Post-Impressionism,
Realism (Naturalism),
Rococo,
Surrealism,
Suprematism



<strong>Subject Classifications of Art:</strong> Abstract art,
Algorithmic art,
Cartoons,
Child art,
Cityscapes,
Digital art,
Environmental art,
Figure drawing,
Folk art,
Graffiti art,
History painting,
Interactive art,
Internet art,
Landscape painting,
Line art,
Marine art (Maritime art),
Mosaic art,
Naive art,
Performing Arts,
Photography art,
Portrait painting,
Radio art,
Religious art (Sacred art),
Site-specific art,
Space art (Astronomical art),
Street art,
Still Life,
Tapestry art,
Urban Landscapes,
Vanitas,
Virtual art,
Wildlife art



<strong>Art Materials OR Type: </strong> 3D Printing,
3D Works,
Assemblage,
Acrylics,
Bronze,
Calligraphy,
Canvas Painting,
Ceramics,
Clay,
Collage,
Computer Animation,
Computer Graphics,
Computer Robotics,
Embellished Ornaments,
Encaustic Paints,
Engraving,
Etching,
Film,
Foil Imaging,
Furnishings,
Furniture,
Giclee Prints,
Glass,
Ink,
Ink and Wash,
Jewelry,
Lithography,
Marble,
Metal,
New media,
Oils,
Painting,
Paper (Origami),
Photography,
Plaster,
Printmaking,
Screen-printing,
Sculpture,
Stained glass,
Stencils,
Stone,
Tapestry,
Tempera,
Textile Fabric,
Tile,
Video,
Watercolor,
Wood,
Woodcuts


<strong>Art Subjects (Most Common Themes): </strong> Abstract,
Animals,
Architecture,
Art For Kids,
Astronomy & Space,
Beach,
Book Illustration,
Botanical,
Busy Street,
Cats,
Celebrations,
City Block,
Comics,
Costumes,
Daily life,
Dance,
Dinner Gathering,
Dogs,
Domestic Settings,
Education,
Fantasy,
Fashion,
Figurative,
Flowers,
Food,
Group-portraits,
Hobbies,
Horses,
Holidays,
Home & Hearth,
Humor,
Interiors,
Markets,
Maps,
Motivational,
Movies,
Museums,
Music,
Nudes,
Outdoor Cafe,
Pet-portraits,
People,
Places,
Publications,
Religion & Spirituality,
Rooftops,
Scenic,
Seascape,
Seasons,
Self-portrait,
Ship-portraits,
Sports,
Street Corner,
Street Situations,
Still Life,
Tavern scenes (Bar),
Television,
Townscapes,
Transportation,
Typography & Symbols,
World Culture


<strong>DATABASE PREPARATION:</strong>
Prerequisite - You'll need a MySQL Database setup with security information and the ability to execute PHP.

1. Modify the "your_username_here", "your_password_here" and "your_database_name" throughout all the PHP files in the php directory.

2. Then using a browser launch
SETUP_VIRTUAL_GALLERY_DB.html
and by going through each of the listed steps, in order, you should be able to setup and load your database properly.

3. Now just use the WebVR_Virtual_Art_Gallery_build_version_247.php file in a compatible browser with a VR headset to view the WebVR Virtual Art Gallery.  This code is a work in progress.


<strong>KNOWN BUGS AND BEHAVIOR (to be tested and fixed):</strong>
<br>Browser and Headset Bugs...  At this time best WebVR experiencefor this app is in FireFox.

<strong>WebVR Browser Firefox:</strong>  Controllers - toggle and teleport work fine in correct directions.  Teleport outside of building still possible.  Teleport/looking Inside of console viewable.  Layer jitters in wall of gallery label and outside on overlapping trees.

<strong>WebVR Browser Supermedium:</strong> Slow loading, supermedium loading aprears, gallery apears, loading then apear again appears, then finally gallery. Controllers - Toggle and teleport work, but in wrong directions, either back to front or right to left always reversed.  No e-commerce possible through paypal shopping cart. Teleport outside of building still possible.  Teleport/looking Inside of console viewable.  Layer jitters in wall of gallery label and outside on overlapping trees.

<strong>WebVR Browser Edge WMR:</strong> Controllers - Toggle doesn't work at all, or trackpad.  Teleport works fine. Teleport outside of building still possible.  Teleport/looking Inside of console viewable.  Layer jitters in wall of gallery label and outside on overlapping trees.

<strong>WebVR Browser Chrome:</strong> Not working, Google attempting to "lockdown WebVR" into new WebXR spec with API's.  Possible migration-integration with WebXR/A-frame code in the future, or possibly a complete rewrite to become compatable may be necessary, hence no daydream compatiblity is attempted at this time.  Wait and see.

<strong>WebVR Browser Safari:</strong>  Not clear what Apple's plans are, still waiting on Headset Hardware to be released. Possibly first quarter 2020. Wait and see.

<strong>=== At this time best experience in VR headset is Compatible Windows Mixed Reality (WMR) headsets with two controllers. </strong>

<strong>For VR Headset WMR/Samsung Odyssey</strong>, Firefox works best and has e-commerce capabilities.  However controllers are jittery and sometime switch right and left.  Poor inside-out tracking controller hardware.  Seen it happen with other games/apps.

<strong>For VR Headset HTC Vive (Firefox)</strong>, Controllers are very stable, no problem with jitters, however no toggle and trackpad is reversed in one of the directions.

<strong>For VR Headset Oculus Rift</strong>, Not tested yet... requires access to hardware.

<strong>For VR Headset Oculus Quest</strong>, Not tested yet... reqires access to hardware.

<strong>For VR Headset GearVR/Oculus Go</strong>, Slow and Not working because this design requires two controllers.


<strong>DEMO OF VR GALLERY EXPERIENCE VIDEO LINK (BINOCULAR)</strong>

https://www.youtube.com/watch?v=jqBEEpSduHo
