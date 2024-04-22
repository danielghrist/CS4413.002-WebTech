<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>💻 Welcome to Daniel Ghrist's (kda458) Website! 💻</title>

  <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/owl.carousel.css">
  <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="assets/css/templatemo-style.css">
</head>


<!-- TEMPLATE -->

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

  <!-- MENU -->
  <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

      <div class="navbar-header">
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
        </button>

        <!-- lOGO TEXT HERE -->
        <a href="#top" class="navbar-brand">Danny's Site</a>
      </div>

      <!-- Begin Dynamic Menu Links -->
      <?php
      include('navigation.php');
      ?>
    </div>
  </section>
  <!-- End Dynamic Menu Links -->


  <!-- Begin Dynamic Content -->
  <?php
  // Check if $page is set and send the homepage if not, otherwise set $page to what was in $_GET:
  if (!isset($_GET['page'])) {
    $page = 'home';
  } else {
    $page = $_GET['page'];
  }

  // Serve the page contents depending on the $page variable:
  switch ($page) {
    case 'work':
      include('work.php');
      break;
    case 'school':
      include('school.php');
      break;
    case 'hobbies':
      include('hobbies.php');
      break;
    case 'movies':
      include('movies.php');
      break;
    case 'contact':
      include('contact.php');
      break;
    default:
      include('home.php');
      break;
  };
  ?>
  <!-- End Dynamic Content -->

  <!-- <section id="testimonial">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div id="greeting-div"></div>
          <div class="section-title">
            <h1>👋🏻 It's Me, Hi, I'm The Problem...It's Me 👋🏻</h1>
            <h2>Introduction<small>all about danny</small></h2>
          </div>
          <div class="p-left">
            <p><b>Hi! 🙋🏻‍♂️ I'm Danny.</b> I am a non-traditional, <i>post-bacc</i>, student who is coming back to
              UTSA for a second bachelor's degree in Computer Science. My first degree was in Finance, but I graduated
              into the Great Recession so ended up just doing accounting for a while, then transitioned to working with
              a large tech company creating and project managing contracts for certain services. I actually originally
              started my first degree as a Computer Science major, however I was young and dumb and switched to
              something that I thought would be easier (Finance). Since then I have always dreamed of coming back and
              finishing my Computer Science degree. So in the Spring of 2022 I noticed a lot of classes were online
              which would enable me to work a full-time job and also attend classes much easier. So I signed up and have
              been going strong ever since. I was actually laid off in late 2022 so now I am just using the severance
              and savings to go to school full-time. Not gonna lie, I really like not having a job, lol. Anyways, thats
              me. Enjoy my first static webpage for this class (CS4413.002: Web Technologies).
            </p>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia doloremque a quas beatae fugiat fuga
              magnam ipsam, quaerat amet voluptatem nostrum saepe. Tempora incidunt, quas inventore assumenda architecto
              dolor ducimus. Itaque, libero neque aspernatur rerum tempore voluptatibus? Quae iure magni nihil, hic
              dolore nemo ducimus omnis dolor obcaecati consequuntur facilis modi adipisci temporibus earum enim ab
              dolorum accusamus. Est, accusamus. Cumque voluptatum officiis necessitatibus mollitia dolore, eaque
              praesentium consectetur voluptates nam autem facere harum eveniet nesciunt officia deserunt ab? Saepe
              quasi nihil repellat maiores reiciendis a minus molestias blanditiis aspernatur.
            </p>
            <p> Qui porro, eveniet in magnam error quaerat quae voluptatibus. Eos tempora reprehenderit, earum harum
              architecto deleniti voluptatibus provident delectus enim quas exercitationem obcaecati voluptas rem ut
              nulla, doloremque velit pariatur.
            </p>
            <p> Exercitationem reiciendis accusamus velit. Quo minus molestiae consectetur nostrum ipsa itaque adipisci,
              tempora a blanditiis, natus recusandae deserunt laborum ex vel quos ipsum tempore. Dolorum quasi expedita
              odio excepturi necessitatibus!
            </p>
            <p> Fugit odio cum commodi corporis accusantium illum quos illo unde facilis. Voluptate eligendi nam
              doloribus quod, quae voluptatibus repudiandae accusamus quidem a recusandae ipsum, atque perspiciatis
              explicabo nobis minima ab! Quos consectetur doloremque vel earum ipsam aperiam debitis cupiditate possimus
              cum! Mollitia reiciendis praesentium iste temporibus rerum? Quibusdam, debitis vitae error beatae ad
              tenetur, nulla aliquam expedita animi voluptate repellat.
            </p>
            <p>
              Temporibus debitis at voluptate maiores consectetur laudantium illum excepturi earum repellendus obcaecati
              iste
              ducimus culpa illo sed aliquam, perferendis incidunt molestias. Ipsum quo, voluptas itaque impedit
              laboriosam
              excepturi sunt corporis!
            </p>
            <p>
              Architecto quo minima nostrum repellendus cum perferendis molestiae error. Ea totam adipisci impedit
              facilis
              atque
              nihil ullam maxime debitis. Ea non maxime earum dolorum voluptatibus at quae necessitatibus ipsa eveniet?
              Aspernatur qui dolorum enim excepturi, consectetur alias rem fugit ipsa earum assumenda voluptatem
              cupiditate
              facilis. Aut repudiandae quia earum deserunt magni! Iure quas fuga voluptates necessitatibus officia quo
              omnis.
              Dignissimos?
            </p>
          </div>
          <hr>
        </div>
      </div>
    </div>
  </section> -->

  <!-- Greeting Javascript -->
  <!-- <script src="assets/js/add-content.js"></script> -->
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- BootStrap 3 Javascript -->
  <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>