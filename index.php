<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='UTF-8'/>
    <title>TechipLtd.</title>
    <link rel='stylesheet' href='assign3.php'/>
  </head>
  <body>
    <!-- Logo and Nav bar -->
    <?php include 'header.php' ?>
    <!-- Logo and Nav bar -->

    <!-- About TechipLtd. -->
    <article>
      <h1>TechipLtd.</h1>
      <p>TechipLtd. was established in March, 2019.</p>
      <p>TechipLtd. is one of Canada’s best and most successful Laptop retailers.
        TechipLtd. sells laptop from many of the best brands. The Company offers consumers
        a unique shopping experience with the latest technology products,
        at the right price.

        The first TechipLtd. stores were opened during the winter of 2019,
        in the Greater Toronto Area. Since then. TechipLtd. has been planning to expand
        across Canada, opening stores from coast-to-coast.</p>
    </article>
    <!-- About TechipLtd. -->

    <section id="multimedia">
      <!-- Embedding a audio -->
      <h2>Audio clip</h2>
      <audio controls>
        <source src="./sample1.mp3"/>
      </audio><br /><br />

      <!-- Embedding a youtube video -->
      <h2>Video clip</h2>
      <iframe width="806" height="453" src="https://www.youtube.com/embed/xDLHnGSvbA0"
       allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
      </iframe>
    </section>

    <!-- footer -->
    <?php include('footer.php'); ?>
  </body>
