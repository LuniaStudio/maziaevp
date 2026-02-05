<!doctype html>
<html lang="en">
<title>Mazia EVP | Development</title>
<base href="<?= URL ?>">

<!-- Security -->

<meta http-equiv="Content-Security-Policy" content="form-action 'self' usebasin.com">

<!-- Metadata -->

<meta charset="utf-8">
<meta name="pagename" content="Mazia EVP">
<meta name="description" content="Lightning-fast mobile app development">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

<!-- Canonical URL -->

<link rel="canonical" href="https://www.maziaevp.com/development/">

<!-- Open graph -->

<meta property="og:site_name" content="Mazia EVP">
<meta property="og:title" content="Mazia EVP | Development">
<meta property="og:description" content="Lightning-fast mobile app development">
<meta property="og:locale" content="en_ZA">
<meta property="og:url" content="https://www.maziaevp.com/development">
<meta property="og:type" content="website">
<meta property="og:image" content="https://www.maziaevp.com/images/logo.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="322">
<meta property="og:image:alt" content="Mazia EVP">

<!-- Icons -->

<link href="favicon.svg" rel="icon">
<link href="favicon.svg" color="#e11d3c" rel="mask-icon">
<link href="favicon.svg" rel="apple-touch-icon">
<link href="favicon.svg" rel="shortcut icon">

<!-- Critical styles -->

<link href="css/variables.css" rel="stylesheet">
<link href="css/base.css" rel="stylesheet">

<!-- Async styles -->

<link href="css/async.css" as="style" onload="this.onload=null;this.rel='stylesheet'" rel="preload">

<!-- Inline styles -->

<style></style>

<!-- Async scripts -->

<script src="scripts/animation.js" async></script>
<script src="scripts/focus.js" async></script>

<!-- TrustPilot script -->

<script src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>

<!-- Custom elements -->

<custom-element name="layout-wrapper"></custom-element>
<custom-element name="content-wrapper"></custom-element>
<custom-element name="layout-tile"></custom-element>
<custom-element name="input-group"></custom-element>
<custom-element name="no-break"></custom-element>

<!-- Header -->

<header data-util="row(cc)s bgd(gry)s">

    <!-- Layout wrapper -->

    <layout-wrapper data-util="row(jc)s wid(max)s pad.x(2,0)s">

        <!-- Logo -->

        <a data-image="mazia-evp" href="./" aria-label="Go to the home page" tabindex="0"></a>

        <!-- Mobile menu icon -->

        <image-container class="secondary menu-icon" data-util="dis(off)l wid(min)s pad(1,0)s" id="menu-button" data-role="button" tabindex="0"><span data-image="menu"></span></image-container>

        <!-- Mobile menu icon -->

        <nav class="menu-container" data-util="col(ct)s row(rc)l gap(2,0)s wid(max)s pad.l(4,0)s- pad.l(4,0)m- pad.t(8,0)s- pad.t(8,0)m- pad.b(4,0)s- pad.b(4,0)m-">

            <!-- Development item -->

            <a class="menu-item" data-util="col(lc)s wid(max)s- wid(max)m- txt(3)s txt(2)l txt(bld)s txt(wht)s txt(red.2)l txt(red.1)h" href="development" title="Development" aria-label="Development" tabindex="0">Development</a>

            <!-- Integrations item -->

            <a class="menu-item" data-util="col(lc)s wid(max)s- wid(max)m- txt(3)s txt(2)l txt(bld)s txt(wht)s txt(blk.2)l txt(red.1)h" href="integrations" title="Integrations" aria-label="Integrations" tabindex="0">Integrations</a>

            <!-- Reporting item -->

            <a class="menu-item" data-util="col(lc)s wid(max)s- wid(max)m- txt(3)s txt(2)l txt(bld)s txt(wht)s txt(blk.2)l txt(red.1)h" href="reporting" title="Reporting" aria-label="Reporting" tabindex="0">Reporting</a>

            <!-- Apps item -->

            <a class="menu-item" data-util="col(lc)s wid(max)s- wid(max)m- txt(3)s txt(2)l txt(bld)s txt(wht)s txt(blk.2)l txt(red.1)h" href="apps" title="Apps" aria-label="Apps" tabindex="0">Apps</a>

            <!-- Offices link -->

            <a class="menu-item" data-util="col(lc)s wid(max)s- wid(max)m- txt(3)s txt(2)l txt(bld)s txt(wht)s txt(blk.2)l txt(red.1)h" href="offices" title="Offices" aria-label="Offices" tabindex="0">Offices</a>

            <!-- Contact link -->

            <a class="menu-item" data-util="col(lc)s wid(max)s- wid(max)m- txt(3)s txt(2)l txt(bld)s txt(wht)s txt(blk.2)l txt(red.1)h" href="#contact" title="Contact" aria-label="Contact" tabindex="0">Contact</a>

        </nav>

    </layout-wrapper>

</header>

<!-- Main -->

<main>

    <!-- Hero article -->

    <article data-util="bgd(gry)s">

        <!-- Hero layout wrapper -->

        <layout-wrapper data-util="col(lc)s">

            <!-- Hero content wrapper -->

            <content-wrapper data-util="col(cc)s row(lc)l gap(1,0)m pad.x(2,0)s">

                <!-- Hero inner content section -->

                <section class="hero-copy" data-util="col(lt)s gap(1,5)s pad.y(4,0)s">

                    <!-- Hero heading -->

                    <h1 data-util="fnt(ttl)s txt(5)s txt(8)m txt(blk.2)s">Lightning-fast mobile app development</h1>

                    <!-- Hero summary -->

                    <p data-util="txt(3)s txt(blk.2)s">We use a Rapid Application Development approach to innovate, build features, and get your mobile app to customers in half the time of <no-break>traditional development</no-break>.</p>

                    <!-- Hero call to action -->

                    <a class="primary" data-util="wid(min)s" href="development#contact" data-role="button" title="Let's Start" aria-label="Let's Start" tabindex="0">Let's Start</a>

                </section>

                <!-- Hero large media query photo aside -->

                <aside class="image-wrapper" data-util="dis(off)s- dis(off)m-">

                    <!-- Hero large media query photo -->

                    <image-container data-photo="development-2" role="img" aria-label="Woman sitting at a desk looking at code"></image-container>

                </aside>

            </content-wrapper>

        </layout-wrapper>

        <!-- Hero small media query photo aside -->

        <aside class="image-wrapper" data-util="dis(off)l">

            <!-- Hero small media query photo -->

            <image-container data-photo="development-2" role="img" aria-label="Woman smiling while holding a phone"></image-container>

        </aside>

    </article>

    <!-- Partnerships article -->

    <article data-util="bgd(wht)s" id="partnerships">

        <!-- Partnerships layout wrapper -->

        <layout-wrapper data-util="col(cc)s">

            <!-- Partnerships content wrapper -->

            <content-wrapper data-util="col(cc)s gap(4,0)s pad.y(4,0)s pad.x(2,0)s">

                <!-- Partnerships header section -->

                <section class="wrap" data-util="row(cc)s gap(1,5)s">

                    <!-- Partnerships heading -->

                    <h2 data-util="wid(max)s wid(70)m fnt(ttl)s txt(c)s txt(5)s txt(7)m txt(blk.2)s">We get more done using smarter tools</h2>

                    <!-- Partnerships summary -->

                    <p data-util="wid(max)s wid(90)m txt(3)s txt(c)s txt(blk.2)s">The pace of innovation is relentless, and traditional software development is too slow and cumbersome to match evolving demands and shifting market dynamics. We streamline the development cycle by focusing on user testing to provide immediate feedback and iterative updates to provide continuous user <no-break>experience improvements</no-break>.</p>

                </section>

                <!-- Partnerships logos section -->

                <section class="wrap" data-util="row(ct)s gap(4,0)s gap(6,0)m">

                    <!-- Partnerships partner logos -->

                    <a data-util="siz(1,25)s" data-logo="alpha-transform" href="https://www.alphasoftware.com/no-code-app-builder" target="_blank" rel="noopener" aria-label="Go to the Alpha Software website" tabindex="0" data-animate="up"></a>

                    <a data-util="siz(1,25)s" data-logo="alpha-anywhere" href="https://www.alphasoftware.com/mobile-app-development-platform" target="_blank" rel="noopener" aria-label="Go to the Alpha Software website" tabindex="0" data-animate="up" data-animate-delay="200"></a>

                </section>

            </content-wrapper>

        </layout-wrapper>

    </article>

    <!-- Benefits article -->

    <article data-util="bgd(blk.2)s">

        <!-- Benefits layout wrapper -->

        <layout-wrapper data-util="col(cc)s">

            <!-- Benefits content wrapper -->

            <content-wrapper data-util="col(cc)s gap(4,0)s pad.y(4,0)s pad.x(2,0)s">

                <!-- Tiles content section -->

                <section data-util="col(cc)s gap(2,0)s">

                    <!-- Tiles content wrapper -->

                    <content-wrapper data-util="col(cc)s row(str)m wid(max)s gap(2,0)s">

                        <!-- Agility and Speed tile -->

                        <layout-tile data-util="col(ct)s gap(1,5)s wid(max)s pad(2,0)s rad(2)s bgd(wht)s">

                            <!-- Agility and Speed icon -->

                            <image-container data-icon="dial"></image-container>

                            <!-- Agility and Speed heading -->

                            <h3 data-util="wid(max)s fnt(ttl)s txt(4)s txt(c)s txt(blk.2)s">Agility and Speed</h3>

                            <!-- Agility and Speed summary -->

                            <p data-util="wid(max)s txt(3)s txt(c)s txt(blk.2)s">We get mobile apps to market fast, keeping you ahead of emerging trends while avoiding <no-break>missed opportunities</no-break>.</p>

                        </layout-tile>

                        <!-- Cost Efficiency tile -->

                        <layout-tile data-util="col(ct)s gap(1,5)s wid(max)s pad(2,0)s rad(2)s bgd(wht)s">

                            <!-- Cost Efficiency icon -->

                            <image-container data-icon="piggy-bank"></image-container>

                            <!-- Cost Efficiency heading -->

                            <h3 data-util="wid(max)s fnt(ttl)s txt(4)s txt(c)s txt(blk.2)s">Cost Efficiency</h3>

                            <!-- Cost Efficiency summary -->

                            <p data-util="wid(max)s txt(3)s txt(c)s txt(blk.2)s">Our focus on iterative development reduces the chances that effort will be spent on features that do not align with actual <no-break>user needs</no-break>.</p>


                        </layout-tile>

                    </content-wrapper>

                    <!-- Tiles content wrapper -->

                    <content-wrapper data-util="col(cc)s row(str)m wid(max)s gap(2,0)s">

                        <!-- Reduced Risk tile -->

                        <layout-tile data-util="col(ct)s gap(1,5)s wid(max)s pad(2,0)s rad(2)s bgd(wht)s">

                            <!-- Reduced Risk icon -->

                            <image-container data-icon="umbrella"></image-container>

                            <!-- Reduced Risk heading -->

                            <h3 data-util="wid(max)s fnt(ttl)s txt(4)s txt(c)s txt(blk.2)s">Reduced Risk</h3>

                            <!-- Reduced Risk summary -->

                            <p data-util="wid(max)s txt(3)s txt(c)s txt(blk.2)s">User involvement from the beginning of the development cycle means we can catch any issues before they escalate into <no-break>larger problems</no-break>.</p>


                        </layout-tile>

                        <!-- User Alignment tile -->

                        <layout-tile data-util="col(ct)s gap(1,5)s wid(max)s pad(2,0)s rad(2)s bgd(wht)s">

                            <!-- User Alignment icon -->

                            <image-container data-icon="users"></image-container>

                            <!-- User Alignment heading -->

                            <h3 data-util="wid(max)s fnt(ttl)s txt(4)s txt(c)s txt(blk.2)s">User Alignment</h3>

                            <!-- User Alignment summary -->

                            <p data-util="wid(max)s txt(3)s txt(c)s txt(blk.2)s">Early-stage testing ensures that your app matches what users want, resulting in a product that is intuitive, effective, <no-break>and engaging</no-break>.</p>

                        </layout-tile>

                    </content-wrapper>

                </section>

            </content-wrapper>

        </layout-wrapper>

    </article>

        <!-- Contact article -->

    <article data-util="bgd(gry)s" id="contact">

        <!-- Contact layout wrapper -->

        <layout-wrapper data-util="col(cc)s">

            <!-- Contact content wrapper -->

            <content-wrapper data-util="col(cc)s gap(3,0)s pad.x(2,0)s pad.y(4,0)s">

                <!-- Contact header section -->

                <section data-util="col(cc)s gap(2,0)s wid(max)s">

                    <!-- Contact heading -->

                    <h2 data-util="pad(0,75)s rad(1)s bgd(wht)s txt(3)s txt(bld)s txt(red.2)s">Contact</h2>

                    <!-- Contact sub-heading -->

                    <h3 data-util="wid(max)s wid(80)m fnt(ttl)s txt(c)s txt(5)s txt(7)m txt(blk.2)s">Let's talk about developing your mobile app</h3>

                </section>

                <!-- Contact form section -->

                <section data-util="row(cc)s gap(1,0)s wid(max)s">

                    <!-- Contact form -->

                    <form data-util="col(lc)s gap(2,0)s wid(max)s wid(500)m pad(2,0)s rad(2)s shd(1)s bgd(wht)s" action="https://usebasin.com/f/09e47d7025be" method="POST" accept-charset="utf-8">

                        <!-- Contact form input group -->

                        <input-group data-util="col(lc)s gap(0,5)s wid(max)s">

                            <label data-util="pad.l(0,25)s txt(blk.2)s" for="name">Name</label>

                            <input data-util="pad(1,0)s" name="name" id="name" type="text" maxlength="50" autocomplete="given-name" title="Name" placeholder="John Smith" tabindex="0" aria-label="Name" aria-required="true" required>

                        </input-group>

                        <!-- Contact form input group -->

                        <input-group data-util="col(lc)s gap(0,5)s wid(max)s">

                            <label data-util="pad.l(0,25)s txt(blk.2)s" for="email">Email</label>

                            <input data-util="pad(1,0)s" name="email" id="email" type="email" maxlength="50" autocomplete="email" title="Email" placeholder="john@example.com" tabindex="0" aria-label="Email" aria-required="true" required>

                        </input-group>

                        <!-- Contact form input group -->

                        <input-group data-util="col(lc)s gap(0,5)s wid(max)s">

                            <label data-util="pad.l(0,25)s txt(blk.2)s" for="message">Message</label>

                            <input data-util="pad(1,0)s" name="message" id="message" type="text" maxlength="200" title="Message" tabindex="0" aria-label="Message" aria-required="true" required>

                        </input-group>

                        <!-- Contact form input group -->

                        <input-group data-util="dis(off)s">

                            <label data-util="txt(1)s txt(ylw1)s" for="service">Service</label>

                            <input name="service" id="service" type="text" maxlength="1" title="Service" value="Development" tabindex="0" aria-label="Service">

                        </input-group>

                        <!-- Contact form input group -->

                        <input-group data-util="dis(off)s">

                            <label data-util="txt(1)s txt(ylw1)s" for="human">Are you human?</label>

                            <input name="human" id="human" type="tel" inputmode="tel" maxlength="1" title="Are you human?" tabindex="0" aria-label="Are you human?">

                        </input-group>

                        <!-- Contact form button -->

                        <button class="primary" data-util="col(cc)s wid(max)s" role="button" data-role="submit" title="Send" aria-label="Send" tabindex="0" data-track="send-message">Send</button>

                    </form>

                </section>

            </content-wrapper>

        </layout-wrapper>

    </article>

    <!-- Footer -->

    <footer data-util="bgd(blk.2)s">

        <!-- Layout wrapper -->

        <layout-wrapper data-util="col(lc)s">

            <!-- Wrapper -->

            <content-wrapper data-util="col(lc)s gap(3,0)s pad.x(2,0)s pad.y(4,0)s">

                <!-- Logo section -->

                <section data-util="col(lc)s row(jc)m gap(3,0)s wid(max)s">

                    <!-- TrustPilot widget -->

                    <div class="trustpilot-widget" data-util="col(cc)s pad.y(1,0)s rad(2)s bgd(gry)s" data-locale="en-ZA" data-template-id="5419b6a8b0d04a076446a9ad" data-businessunit-id="65092e7031f664e8aa18633e" data-style-height="24px" data-theme="light" data-min-review-count="5">

                        <a href="https://www.trustpilot.com/review/maziaevp.com" target="_blank" rel="noopener">Trustpilot</a>

                    </div>

                    <!-- Logo -->

                    <a data-image="mazia-evp-mono" href="./" aria-label="Go to the home page" tabindex="0"></a>

                </section>


                <!-- Menu section -->

                <section data-util="col(lt)s row(lt)m gap(3,0)s gap(4,0)m">

                    <!-- Menu -->

                    <ul class="no-style" data-util="col(lt)s gap(0,5)s- gap(0,5)m- txt(bld)s txt(3)s">

                        <!-- Items -->

                        <li><a data-util="txt(wht)s txt(red.1)h" href="development">Development</a></li>

                        <li><a data-util="txt(wht)s txt(red.1)h" href="integrations">Integrations</a></li>

                        <li><a data-util="txt(wht)s txt(red.1)h" href="reporting">Reporting</a></li>

                        <li><a data-util="txt(wht)s txt(red.1)h" href="apps">Apps</a></li>

                        <li><a data-util="txt(wht)s txt(red.1)h" href="#contact">Contact</a></li>

                    </ul>

                    <!-- Link -->

                    <?php require MARKUP . 'Blocks/downloads-ul.html' ?>

                </section>

                <!-- Copyright section -->

                <?php require MARKUP . 'Blocks/copyright-section.html' ?>

            </content-wrapper>

        </layout-wrapper>

    </footer>

</main>

<!-- Scripts -->

<script src="scripts/menu.js"></script>

</html>
