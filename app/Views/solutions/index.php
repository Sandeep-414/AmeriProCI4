<?= $this->include('layouts/header') ?>

<main class="solutions-page">

    <!-- HERO -->
    <section class="solutions-hero">
        <div class="container">
            <span class="solutions-eyebrow">
                AMERIPRO SOLUTIONS
            </span>

            <h1>
                Solutions designed<br>
                around your business.
            </h1>

            <p>
                AmeriPro Solutions provides technology solutions
                designed to help organizations improve efficiency,
                manage information and achieve better business outcomes.
            </p>
        </div>
    </section>


    <!-- SOLUTIONS -->
    <section class="solutions-list-section">

        <div class="container">

            <div class="solutions-section-heading">
                <span>SOLUTIONS</span>

                <h2>
                    Our Technology Solutions
                </h2>

                <p>
                    Explore our solutions and discover how AmeriPro
                    Solutions can support your business requirements.
                </p>
            </div>


            <div class="solutions-grid">

                <?php foreach ($solutions as $solution): ?>

                    <article class="solution-card">

                        <div class="solution-number">
                            <?= esc($solution['number']) ?>
                        </div>

                        <div class="solution-content">

                            <span class="solution-category">
                                <?= esc($solution['category']) ?>
                            </span>

                            <h3>
                                <?= esc($solution['title']) ?>
                            </h3>

                            <p>
                                <?= esc($solution['description']) ?>
                            </p>

                            <a
                                href="<?= base_url('solutions/' . $solution['slug']) ?>"
                                class="solution-link"
                            >
                                Explore Solution
                                <span>→</span>
                            </a>

                        </div>

                    </article>

                <?php endforeach; ?>

            </div>

        </div>

    </section>

</main>

<?= $this->include('layouts/footer') ?>