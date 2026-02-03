<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Nexcent</title>
</head>

<body>
    <?php require_once("./component/header.php") ?>
    <main>
        <section id="section_one" class="Hero">
            <div class="container_left">
                <h1>Lessons and insights <span>from 8 years</span></h1>
                <p>Where to grow your business as a photographer: site or social media?</p>
                <div class="group_element">
                    <button>Register</button>
                    <div class="circles">
                        <div class="circle"></div>
                        <div class="circle"></div>
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <div class="container_illustration">
                <img src="./assets/images/Illustration.png" alt="">
            </div>
        </section>
        <section>
            <div class="sponsors_logos">
                <div>
                    <h2>Our Clients</h2>
                    <p>We have been working with some Fortune 500+ clients</p>
                </div>
                <div class="sponsors">
                    <div><?php
                            require("./assets/svg/icons/logo-sponsor-1.html")
                            ?></div>
                    <div><?php
                            require("./assets/svg/icons/logo-sponsor-2.html")
                            ?></div>
                    <div><?php
                            require("./assets/svg/icons/logo-sponsor-3.html")
                            ?></div>
                    <div><?php
                            require("./assets/svg/icons/logo-sponsor-4.html")
                            ?></div>
                    <div><?php
                            require("./assets/svg/icons/logo-sponsor-5.html")
                            ?></div>
                    <div><?php
                            require("./assets/svg/icons/logo-sponsor-6.html")
                            ?></div>
                </div>
            </div>
            <div class="community">
                <div>
                    <p>Manage your entire community in a single system</p>
                    <p>Who is Nextcent suitable for?
                    </p>
                </div>
                <div class="card">
                    <div>
                        <div><?php
                                require("./assets/svg/icons/logo-members.html")
                                ?></div>
                        <span></span>
                    </div>
                    <div>
                        <h3>Membership Organisations</h3>
                    </div>
                    <div>
                        <p>Our membership management software provides full automation of membership renewals and payments</p>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div><?php
                                require("./assets/svg/icons/logo-location.html")
                                ?></div>
                        <span></span>
                    </div>
                    <div>
                        <h3>National Associations</h3>
                    </div>
                    <div>
                        <p>Our membership management software provides full automation of membership renewals and payments</p>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div><?php
                                require("./assets/svg/icons/logo-clubs.html")
                                ?></div>
                        <span></span>
                    </div>
                    <div>
                        <h3>Clubs And Groups</h3>
                    </div>
                    <div>
                        <p>Our membership management software provides full automation of membership renewals and payments</p>
                    </div>
                </div>

            </div>
        </section>
    </main>
</body>

</html>