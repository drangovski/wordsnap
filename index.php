<?php include('header.php'); ?>
        <script type="text/javascript">
            var userFeed = new Instafeed({
                get: 'user',
                userId: '3025661474',
                accessToken: '3025661474.7f01fee.7cbca98fc28a4cd497575656a8a89134',
                limit: '9',
                template: '<a class="instagram-image" href="{{link}}" target="_blank"><img src="{{image}}" /></a>',
                resolution: 'standard_resolution'
            });
            userFeed.run();
        </script>
        <!-- TOP SECTION -->
        <div class="top-section-wrapper">
            <div class="top-section-inner">
                <div class="tsi-content">
                    <h1>OWN BOOK PACK</h1>
                    <p>Subscribe to our email list and get free book pack now. And many more times.</p>
                    <div class="subscribe-field">
                        <input type="email" placeholder="Enter your email address" />
                        <button class="fa fa-envelope"></button>
                    </div>
                </div>
                <a class="fa fa-angle-down tsi-scroll-down" href="javascript:;"></a>
            </div>
        </div>
        <!-- TOP SECTION -->

        <!-- MISSION SECTION -->
        <div class="mission-section-wrapper" id="mission-section">
            <div class="mission-section-inner">
                <div class="msi-content">
                    <h2>THE MISSION</h2>
                    <p>Idea for WordSnap, has shown up as an epiphany. Out of nowhere. The idea is to collect tons of world’s knowledge, and make it available to everyone, everywhere.<br /><br />Our hope is that WordSnap will connect every open minded folk out here, to the sweetest fruits of the world’s most excellent thinkers, and inspire new seeds of brilliance.<br /><br />We believe that you want to be part of this experience. Take a look at our WordSnaps at our Instagram profile and share your own WordSnap there. Or if you have wisdom to share with others, don't be afraid to Contribute and get published in our Articles section.</p>
                    <div class="msi-content-buttons">
                        <a class="msi-wordsnaps" href="javascript:;">WordSnaps</a>
                        <a class="msi-articles" href="javascript:;">Articles</a>
                        <a class="msi-contribute" href="javascript:;">Contribute</a>
                    </div>
                    <img src="images/books-image.png" alt="wordsnap books" />
                </div>
            </div>
        </div>
        <!-- MISSION SECTION -->

        <!-- INSTAGRAM SECTION -->
        <div class="instagram-section-wrapper">
            <div class="instafeed-cont" id="instafeed">
                
            </div>
        </div>
        <!-- INSTAGRAM SECTION -->


<?php include('footer.php'); ?>