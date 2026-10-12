
<!-- =====================================================
     DESIGN 3 FOOTER
====================================================== -->

<!-- BOOTSTRAP ICONS FOR FOOTER -->
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
>

<!-- FONT AWESOME ICONS -->
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
>

<footer class="d3-footer">

    <div class="d3-footer-container">

        <!-- COMPANY -->
        <div class="d3-footer-company">

            <img
                src="<?= base_url('assets/images/design3/ameripro-logo.png') ?>"
                alt="AmeriPro Solutions"
            >

            <p>
                2972 Shady View Dr,<br>
                High Point, NC 27265.
            </p>

            <p>
                (336) 790-2875<br>
                (336) 510-9305
            </p>

            <p>
                hr@ameripro-solutions.com
            </p>

            <!-- FONT AWESOME SOCIAL MEDIA ICONS -->
            <div class="d3-social-links">

                <a href="#" aria-label="Facebook">
                    <i class="fa-brands fa-facebook-f"
                       aria-hidden="true"></i>
                </a>

                <a href="#" aria-label="X">
                    <i class="fa-brands fa-x-twitter"
                       aria-hidden="true"></i>
                </a>

                <a href="#" aria-label="LinkedIn">
                    <i class="fa-brands fa-linkedin-in"
                       aria-hidden="true"></i>
                </a>

                <a href="#" aria-label="Instagram">
                    <i class="fa-brands fa-instagram"
                       aria-hidden="true"></i>
                </a>

            </div>

        </div>

        <!-- QUICK LINKS -->
        <div class="d3-footer-column">

            <h3>QUICK LINKS</h3>

            <a href="<?= base_url('design3') ?>">
                <i class="bi bi-house-door-fill"></i>
                <span>Home</span>
            </a>

            <a href="<?= base_url('design3/about') ?>">
                <i class="bi bi-person-fill"></i>
                <span>About Us</span>
            </a>

            <a href="<?= base_url('design3/careers') ?>">
                <i class="bi bi-briefcase-fill"></i>
                <span>Careers</span>
            </a>

            <a href="<?= base_url('design3/contact') ?>">
                <i class="bi bi-envelope-fill"></i>
                <span>Contact Us</span>
            </a>

            <a href="<?= base_url('design3/services/application-development') ?>">
                <i class="bi bi-code-slash"></i>
                <span>Application Development</span>
            </a>

            <a href="<?= base_url('design3/services/application-maintenance') ?>">
                <i class="bi bi-gear-fill"></i>
                <span>Application Maintenance</span>
            </a>

        </div>

        <!-- SERVICES -->
        <div class="d3-footer-column">

            <h3>SERVICES</h3>

            <a href="<?= base_url('design3/services/business-intelligence') ?>">
                <i class="bi bi-bar-chart-fill"></i>
                <span>Business Intelligence</span>
            </a>

            <a href="<?= base_url('design3/services/cloud-computing') ?>">
                <i class="bi bi-cloud-fill"></i>
                <span>Cloud Computing</span>
            </a>

            <a href="<?= base_url('design3/services/infrastructure-management') ?>">
                <i class="bi bi-hdd-rack-fill"></i>
                <span>Infrastructure Management</span>
            </a>

            <a href="<?= base_url('design3/services/product-application-testing') ?>">
                <i class="bi bi-check2-circle"></i>
                <span>Product &amp; Application Testing</span>
            </a>

            <a href="<?= base_url('design3/services/strategic-resourcing') ?>">
                <i class="bi bi-people-fill"></i>
                <span>Strategic Resourcing</span>
            </a>

            <a href="<?= base_url('design3/services/website-development') ?>">
                <i class="bi bi-globe2"></i>
                <span>Website Development</span>
            </a>

        </div>

        <!-- SOLUTIONS -->
        <div class="d3-footer-column">

            <h3>SOLUTIONS</h3>

            <a href="<?= base_url('design3/solutions/automated-messaging') ?>">
                <i class="bi bi-chat-dots-fill"></i>
                <span>Automated Messaging</span>
            </a>

            <a href="<?= base_url('design3/solutions/data-warehousing') ?>">
                <i class="bi bi-database-fill"></i>
                <span>Data Warehousing</span>
            </a>

            <a href="<?= base_url('design3/solutions/sap-solutions') ?>">
                <i class="bi bi-box-fill"></i>
                <span>SAP Solutions</span>
            </a>

            <a href="<?= base_url('design3/solutions/gis-solutions') ?>">
                <i class="bi bi-geo-alt-fill"></i>
                <span>GIS Solutions</span>
            </a>

            <a href="<?= base_url('design3/solutions/crm') ?>">
                <i class="bi bi-person-lines-fill"></i>
                <span>CRM</span>
            </a>

            <a href="<?= base_url('design3/solutions/document-management') ?>">
                <i class="bi bi-file-earmark-text-fill"></i>
                <span>Document Management</span>
            </a>

        </div>

    </div>

    <!-- COPYRIGHT -->
    <div class="d3-footer-bottom">
        © 2011 – 2026 AmeriPro Solutions LLC.
        All Rights Reserved.
    </div>

</footer>

<!-- =====================================================
     DESIGN 3 - SCROLL UP NAVBAR
====================================================== -->

<script>
document.addEventListener("DOMContentLoaded", function () {

    const navbar = document.querySelector(".d3-header");

    if (!navbar) {
        return;
    }

    let lastScrollTop = 0;

    window.addEventListener("scroll", function () {

        const currentScroll =
            window.pageYOffset ||
            document.documentElement.scrollTop;

        if (currentScroll <= 20) {
            navbar.classList.remove("d3-nav-hidden");
            navbar.classList.remove("d3-nav-visible");

            lastScrollTop = currentScroll;
            return;
        }

        if (currentScroll < lastScrollTop) {
            navbar.classList.remove("d3-nav-hidden");
            navbar.classList.add("d3-nav-visible");
        } else if (currentScroll > lastScrollTop) {
            navbar.classList.remove("d3-nav-visible");
            navbar.classList.add("d3-nav-hidden");
        }

        lastScrollTop = currentScroll;

    });

});
</script>