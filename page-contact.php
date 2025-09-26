<?php
get_header();?>

<div id="content" class="site-content">
    <main id="main" class="site-main">
        <section class="contact-hero">
            <div class="container">
                <h1>Contact Us</h1>
                <p>We'd Love To Hear From You!</p>
            </div>
        </section>

        <section class="contact-form-section">
            <div class="container">
                <form action="" method="post" class="contact-form">
                    <p>
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" required>
                    </p>
                    <p>
                        <label for="email">Your Email</label>
                         <input type="email" id="email" name="email" required>
                    </p>
 
                        <label for="email">Subject</label>
                         <input type="text" id="subject" name="subject">
                    </p>
                     <p>
                        <label for="email">Message</label>
                         <input type="message" id="message" rows="6"></textarea>
                    </p>
                    <p>
                    <input type="submit" name="submit_contact" value="Send message">
                    </p>
                </form>
            </div>
        </section>
    </main>
</div>

<?php get_footer();?>