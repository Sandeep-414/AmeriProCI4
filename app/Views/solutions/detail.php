<?= $this->include('layouts/header') ?>

<main class="solution-detail-page">

    <!-- =====================================================
         SOLUTION IMAGE
    ====================================================== -->

    <section class="solution-detail-hero">

        <div class="solution-detail-image">

            <img
                src="<?= esc($solution['image']) ?>"
                alt="<?= esc($solution['title']) ?>"
            >

        </div>

    </section>


    <!-- =====================================================
         SOLUTION CONTENT
    ====================================================== -->

    <section class="solution-detail-content">

        <div class="container">


            <!-- CATEGORY -->

            <?php if (!empty($solution['category'])): ?>

                <div class="solution-detail-label">

                    <?= esc($solution['category']) ?>

                </div>

            <?php endif; ?>


            <!-- TITLE -->

            <h1 class="solution-detail-title">

                <?= esc($solution['title']) ?>

            </h1>


            <!-- DESCRIPTION -->

            <?php if (!empty($solution['description'])): ?>

                <p class="solution-detail-description">

                    <?= esc($solution['description']) ?>

                </p>

            <?php endif; ?>


            <!-- PARAGRAPHS -->

            <?php if (!empty($solution['paragraphs'])): ?>

                <?php foreach ($solution['paragraphs'] as $paragraph): ?>

                    <p class="solution-detail-text">

                        <?= esc($paragraph) ?>

                    </p>

                <?php endforeach; ?>

            <?php endif; ?>


        </div>

    </section>


    <!-- =====================================================
         SOLUTION SECTIONS
    ====================================================== -->

    <?php if (!empty($solution['sections'])): ?>

        <?php foreach ($solution['sections'] as $index => $section): ?>

            <section class="solution-detail-section">

                <div class="container">

                    <div class="solution-section-inner">


                        <!-- NUMBER -->

                        <div class="solution-section-number">

                            <?= str_pad(
                                $index + 1,
                                2,
                                '0',
                                STR_PAD_LEFT
                            ) ?>

                        </div>


                        <div class="solution-section-content">


                            <!-- SECTION TITLE -->

                            <?php if (!empty($section['title'])): ?>

                                <h2>

                                    <?= esc($section['title']) ?>

                                </h2>

                            <?php endif; ?>


                            <!-- SECTION CONTENT -->

                            <?php if (!empty($section['content'])): ?>

                                <p>

                                    <?= esc($section['content']) ?>

                                </p>

                            <?php endif; ?>


                            <!-- LIST -->

                            <?php if (!empty($section['list'])): ?>

                                <ul>

                                    <?php foreach ($section['list'] as $item): ?>

                                        <li>

                                            <?= esc($item) ?>

                                        </li>

                                    <?php endforeach; ?>

                                </ul>

                            <?php endif; ?>


                            <!-- NUMBERED LIST -->

                            <?php if (!empty($section['numbered_list'])): ?>

                                <ol>

                                    <?php foreach ($section['numbered_list'] as $item): ?>

                                        <li>

                                            <?= esc($item) ?>

                                        </li>

                                    <?php endforeach; ?>

                                </ol>

                            <?php endif; ?>


                        </div>

                    </div>

                </div>

            </section>

        <?php endforeach; ?>

    <?php endif; ?>


    <!-- =====================================================
         CTA
    ====================================================== -->

    <section class="solution-detail-cta">

        <div class="container">

            <div class="solution-detail-cta-box">

                <div>

                    <span>
                        AMERIPRO SOLUTIONS
                    </span>

                    <h2>
                        Technology solutions
                        designed around your business.
                    </h2>

                    <p>
                        Explore more AmeriPro solutions designed
                        to support modern business requirements.
                    </p>

                </div>


                <a
                    href="<?= base_url('solutions') ?>"
                    class="solution-detail-cta-button"
                >
                    View All Solutions →
                </a>

            </div>

        </div>

    </section>

</main>

<?= $this->include('layouts/footer') ?>