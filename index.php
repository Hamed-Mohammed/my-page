<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>my page</title>



    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="css/flexslider.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">


</head>

<body>

<section id="fh5co-hero" class="js-fullheight" style="background-image: url(img/img01.jpg);" data-next="yes">
    <div class="fh5co-overlay"></div>
    <div class="container">

        <div class="fh5co-intro js-fullheight">
            <div class="fh5co-intro-text">

                <div class="fh5co-left-position">

                    <h2 class="animate-box">
                        <script>

                            var text="<center> Welcome<br> to <br> my page</center>"
                            var speed=80

                            if (document.all||document.getElementById){
                                document.write('<span id="highlight">' + text + '</span>')
                                var storetext=document.getElementById? document.getElementById("highlight") : document.all.highlight
                            }
                            else
                                document.write(text)
                            var hex=new Array("00","14","28","3C","50","64","78","8C","A0","B4","C8","DC","F0")
                            var r=1
                            var g=1
                            var b=1
                            var seq=1
                            function changetext(){
                                rainbow="#"+hex[r]+hex[g]+hex[b]
                                storetext.style.color=rainbow
                            }
                            function change(){
                                if (seq==6){
                                    b--
                                    if (b==0)
                                        seq=1
                                }
                                if (seq==5){
                                    r++
                                    if (r==12)
                                        seq=6
                                }
                                if (seq==4){
                                    g--
                                    if (g==0)
                                        seq=5
                                }
                                if (seq==3){
                                    b++
                                    if (b==12)
                                        seq=4
                                }
                                if (seq==2){
                                    r--
                                    if (r==0)
                                        seq=3
                                }
                                if (seq==1){
                                    g++
                                    if (g==12)
                                        seq=2
                                }
                                changetext()
                            }
                            function starteffect(){
                                if (document.all||document.getElementById)
                                    flash=setInterval("change()",speed)
                            }
                            starteffect()
                        </script>
                    </h2>
                    <br>
                    <br>
                </div>
                <ul class="pull-right right-menu">
                    <div class="animate-box">
                        <img src="img/img2.jpg" width="200">
                    </div>
                </ul>


            </div>
        </div>
    </div>
</section>


<section id="fh5co-features-2">
    <div class="container">
        <div class="col-md-6 col-md-push-6">
            <figure class="fh5co-feature-image animate-box">
                <img src="img/img1.JPG">
            </figure>
        </div>
        <div class="col-md-6 col-md-pull-6">
            <span class="fh5co-label animate-box"></span>
            <h2 class="fh5co-lead animate-box">I am</h2>
            <div class="fh5co-feature">

                <div class="fh5co-text animate-box">
                    <h3>Hamed Mohammed Saheb</h3>
                    <p>11/5/1993, From Baghdad, Iraq </p>
                </div>
            </div>
            <div class="fh5co-feature">
                <div class="fh5co-icon animate-box"><i class="icon-check2"></i></div>
                <div class="fh5co-text animate-box">
                    <h3>Diploma in Information and Communications Technology</h3>
                    <p>From Institute of technology Baghdad </p>
                </div>
            </div>
            <div class="fh5co-feature">
                <div class="fh5co-icon animate-box"><i class="icon-check2"></i></div>
                <div class="fh5co-text animate-box">
                    <h3>Bachelor of Information Engineering</h3>
                    <p>From Al-Nahrain University </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="fh5co-projects">
    <div class="container">
        <div class="row row-bottom-padded-md">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h2 class="fh5co-lead animate-box">Certifiate</h2>
                <p class="fh5co-sub-lead animate-box"> </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
                <div class="fh5co-project-item ">
                    <img src="img/img9.JPG" alt="Image" class="img-responsive">
                    <div class="fh5co-text">
                        <h2>MTCNA</h2>
                        <p>From MikroTik</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
                <div class="fh5co-project-item ">
                    <img src="img/img8.JPG" alt="Image" class="img-responsive" >
                    <div class="fh5co-text">
                        <h2>Alkhazen System</h2>
                        <p>From First Processor</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
                <div class="fh5co-project-item ">
                    <img src="img/img10.JPG" alt="Image" class="img-responsive">
                    <div class="fh5co-text">
                        <h2>Outloook</h2>
                        <p>From Microsoft</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
                <div class="fh5co-project-item ">
                    <img src="img/img11.JPG" alt="Image" class="img-responsive" >
                    <div class="fh5co-text">
                        <h2>PowerPoint</h2>
                        <p>From Microsoft</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
                <div class="fh5co-project-item ">
                    <img src="img/img12.JPG" alt="Image" class="img-responsive" >
                    <div class="fh5co-text">
                        <h2>Excel</h2>
                        <p>From Microsoft</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
                <div class="fh5co-project-item ">
                    <img src="img/img13.JPG" alt="Image" class="img-responsive" >
                    <div class="fh5co-text">
                        <h2>Word</h2>
                        <p>From Microsoft</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
                <div class="fh5co-project-item ">
                    <img src="img/img6.JPG" alt="Image" class="img-responsive" >
                    <div class="fh5co-text">
                        <h2>HTML</h2>
                        <p>Online from Sololearn</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
                <div class="fh5co-project-item ">
                    <img src="img/img7.JPG" alt="Image" class="img-responsive" >
                    <div class="fh5co-text">
                        <h2>JavaScript</h2>
                        <p>Online from Sololearn</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
$skills =[
    ['name'=>'Web Programming and Developer','skill'=>'HTML, JavaScript, CSS, Bootstrap, PHP and MySQL'],
    ['name'=>'Programming','skill'=>'C++, C#, Vb, Vb.net, Java and Python'],
    ['name'=>'Network','skill'=>'Cisco CCNA and MTCNA'],
    ['name'=>'Design','skill'=>'Designs, Programs Design and website Design'],
    ['name'=>'Computer Systems and programs','skill'=>'Linux, Photoshop, Matlab, Wireshark and CorelDraw']
]
?>



<section id="fh5co-projects">
    <div class="container">
        <div class="row row-bottom-padded-md">
            <div class="col-md-6 col-md-offset-3 text-center">
                <h2 class="fh5co-lead animate-box">Skills</h2>

            </div>
        </div>
        <?php foreach ($skills as $item): ?>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 animate-box">
                <div class="fh5co-feature">
                    <?php echo  "<h3>". $item['name'] ." </h3>" ."<br><p>". $item['skill'] . "</p>"; ?>

                </div>

            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>




</body>
</html>