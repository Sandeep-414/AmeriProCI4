<?= $this->include('layouts/header') ?>

<main class="contact-page">

    <!-- =====================================================
         CONTACT HERO
         ===================================================== -->

    <section class="contact-hero">

        <div class="contact-container">

            <span class="contact-eyebrow">
                AMERIPRO CONTACT
            </span>

            <h1>
                Let's start a<br>
                conversation.
            </h1>

            <p>
                We're currently accepting new client projects.
                We look forward to serving you.
            </p>

        </div>

    </section>


    <!-- =====================================================
         CONTACT CONTENT
         ===================================================== -->

    <section class="contact-content">

        <div class="contact-container">

            <div class="contact-heading">

                <span>CONTACT US</span>

                <h2>
                    We'd love to hear from you.
                </h2>

                <p>
                    Get in touch with AmeriPro Solutions to discuss
                    your technology and business requirements.
                </p>

            </div>


            <!-- =================================================
                 FORM + ADDRESS
                 ================================================= -->

            <div class="contact-main-grid">


                <!-- CONTACT FORM -->

                <div class="contact-form-area">

                    <h3>
                        Let's keep in touch
                    </h3>

                    <form
    action="<?= base_url('contact/submit') ?>"
    method="post"
    class="contact-form"
>

                        <div class="contact-form-group">

                            <label for="name">
                                Name
                            </label>

                            <input
                                type="text"
                                id="name"
                                name="name"
                                placeholder="Enter Name"
                            >

                        </div>


                        <div class="contact-form-group">

                            <label for="email">
                                Email
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="Enter Email"
                            >

                        </div>


                        <div class="contact-form-group">

                            <label for="phone">
                                Phone
                            </label>

                            <input
                                type="text"
                                id="phone"
                                name="phone"
                                placeholder="Enter Phone"
                            >

                        </div>


                        <div class="contact-form-group">

                            <label for="message">
                                Message
                            </label>

                            <textarea
                                id="message"
                                name="message"
                                rows="6"
                                placeholder="Enter Message"
                            ></textarea>

                        </div>


                        <button
                            type="submit"
                            class="contact-submit-button"
                        >
                            SEND YOUR MESSAGE
                        </button>

                    </form>

                </div>


                <!-- =================================================
                     COMPANY ADDRESSES
                     ================================================= -->

                <div class="contact-address-area">


                    <!-- USA -->

                    <div class="contact-address-block">

                        <h3>
                            Corporate Headquarters (USA)
                        </h3>

                        <p>
                            AmeriPro Solutions LLC,<br>
                            2972 Shady View Dr,<br>
                            High Point,<br>
                            NC 27265.
                        </p>

                        <p>
                            Ph: (336) 790-2875 &amp; (336) 510-9305
                        </p>

                        <p class="contact-email">
                            hr@ameripro-solutions.com
                        </p>

                    </div>


                    <!-- INDIA -->

                    <div class="contact-address-block">

                        <h3>
                            Global Delivery Center (INDIA)
                        </h3>

                        <p>
                            AmeriPro Solutions Pvt Ltd,<br>
                            Plot.No.38, 4th Floor, Road No.1,<br>
                            Venkateshwara Swamy Temple Road,<br>
                            Kakatiya Hills, Avenue 1, Madhapur,<br>
                            Hyderabad - 500033.
                        </p>

                        <p>
                            Ph: +91 88850 47227
                        </p>

                        <p class="contact-email">
                            hr@ameripro-solutions.com
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =====================================================
         LOCATION MAP
         ===================================================== -->

    <section class="contact-map">

        <iframe
            src="https://www.google.com/maps?q=2972+Shady+View+Dr,+High+Point,+NC+27265&output=embed"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            allowfullscreen
        ></iframe>

    </section>

</main>

<?= $this->include('layouts/footer') ?>