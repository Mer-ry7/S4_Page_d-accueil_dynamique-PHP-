
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($nom) ?> - Portfolio</title>

    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/en-tete.css">
    <link rel="stylesheet" href="css/pied-de-page.css">
</head>

<body>

    <!-- HEADER -->
   <header>
        <a href="#accueil" class="logo">Mariam<span>.dev</span></a>
        <nav>
            <a href="#accueil">Home</a>
            <a href="#apropos">About</a>
            <a href="#projets">Projects</a>
            <a href="#contact">Contact</a>
        </nav>
        <a href="#contact" class="bouton-principal">Hire me</a>
    </header>


    <main>

        <!-- HOME SECTION -->
        <section id="accueil">

            <h1>
                Hi, I'm
                <span><?= htmlspecialchars($nom) ?></span>
            </h1>

            <p>
                A web developer who builds an idea, shows it to real
                people, and keeps polishing until it works.
            </p>

            <a href="#projets" class="bouton-principal">
                See my projects
            </a>

            <a href="#apropos" class="bouton-secondaire">
                About me
            </a>

        </section>


        <!-- ABOUT SECTION -->
        <section id="apropos">

            <h2>A little about me</h2>

            <div class="rangee">

                <img src="images/me.png" alt="Photo of Mariam Oumlil">

                <div class="carte">

                    <p>
                        I'm a developer intern who cares more about
                        solving the right problem than writing the
                        fanciest code. I start with a person and a
                        frustration, build a small prototype, then
                        ask others what they think.
                    </p>

                    <p>
                        My favorite moment is watching someone use
                        what I made and hearing what confused them.
                        That is how my projects get better.
                    </p>

                    <div class="skills-liste">

                        <?php foreach ($skills as $skill): ?>

                            <span class="skill">
                                <?= htmlspecialchars($skill) ?>
                            </span>

                        <?php endforeach; ?>

                    </div>

                </div>

            </div>

        </section>


        <!-- PROJECTS SECTION -->
        <section id="projets">

            <h2>Latest projects</h2>

            <div class="rangee">

                <?php foreach ($projets as $projet): ?>

                    <article class="carte">

                        <h3 class="title <?php if ($projet['color'] == 'bleu'): ?>bleu<?php else: ?>rose<?php endif; ?>">
                            <?= htmlspecialchars($projet["titre"]) ?>
                        </h3>

                        <p>
                            <?= htmlspecialchars(mb_substr($projet ['description'], 0, 109)) ?>...
                        </p>
                

                        <small>
                            Prototype ·
                            <?= htmlspecialchars($projet["technologies"]) ?>
                        </small>

                    </article>

                <?php endforeach; ?>

            </div>

        </section>


        <!-- CONTACT SECTION -->
        <section id="contact">

            <h2>Let's build something worth testing</h2>

            <p>
                Open to internships and junior web developer roles.
            </p>

            <a href="mailto:<?= htmlspecialchars($email) ?>" class="bouton">
                Email me
            </a>

        </section>

    </main>


    <!-- FOOTER -->
    <footer>


     <p>&copy; 2026 
        <?= htmlspecialchars($nom) ?> -
            <?= htmlspecialchars($email) ?>

</body>
</html>