<?php include "config.php";
$sql="SELECT * FROM blog LEFT JOIN categories ON blog.category=categories.cat_id LEFT JOIN users ON blog.author_id=users.id";
$run=mysqli_query($config,$sql);
$row=mysqli_num_rows($run);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hebrons-teens-Blog</title>

    <!--
    - favicon
  -->
    <link
      rel="shortcut icon"
      href="./assets/images/favicon.ico"
      type="image/x-icon"
    />

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="style.css" />

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
  </head>

  <body class="light-theme">
    <!--
    - #HEADER
  -->

    <header>
      <div class="container">
        <nav class="navbar">
          <a href="#">
           
          </a>

          <div class="btn-group">
            <button class="theme-btn theme-btn-mobile light">
              <ion-icon name="moon" class="moon"></ion-icon>
              <ion-icon name="sunny" class="sun"></ion-icon>
            </button>

            <button class="nav-menu-btn">
              <ion-icon name="menu-outline"></ion-icon>
            </button>
          </div>

          <div class="flex-wrapper">
            <ul class="desktop-nav">
              <li>
                <a href="#" class="nav-link">Home</a>
              </li>

              <li>
                <a href="#" class="nav-link">About Me</a>
              </li>

              <li>
                <a href="#" class="nav-link">Contact</a>
              </li>

              <li>
                <a href="/mum/login/index.php" class="nav-link">Login</a>
              </li>
            </ul>

            <button class="theme-btn theme-btn-desktop light">
              <ion-icon name="moon" class="moon"></ion-icon>
              <ion-icon name="sunny" class="sun"></ion-icon>
            </button>
          </div>

          <div class="mobile-nav">
            <button class="nav-close-btn">
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="wrapper">
              <p class="h3 nav-title">Main Menu</p>

              <ul>
                <li class="nav-item">
                  <a href="#" class="nav-link">Home</a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">About Me</a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">Contact</a>
                </li>
              </ul>
            </div>

            <div>
              <p class="h3 nav-title">Topics</p>

              <ul>
                <li class="nav-item">
                  <a href="#" class="nav-link">Database</a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">Accessibility</a>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">Web Performance</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <main>
      <!--
      - #HERO SECTION
    -->

      <div class="hero">
        <div class="container">
          <div class="left">
            <h1 class="h1">
              App cake Parsing page </b> <br />
            </h1>

            <div class="btn-group">
            </div>
          </div>

          <div class="right">
            <div class="pattern-bg"></div>
            <div class="img-box">

              <div class="shape shape-1"></div>
              <div class="shape shape-2"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="main">

        <div class="container">
          <!--
          - BLOG SECTION
        -->
          <div class="blog">
            <h2 class="h2">Latest Blog Post</h2
              <?php if ($row) {
                while($result=mysqli_fetch_assoc($run)){   
                   ?>
                  <div class="blog-card-group">
              <div class="blog-card">
                <div class="blog-card-banner">

                  <img
                    src="blog.jpg"
                    alt="Building microservices with Dropwizard, MongoDB & Docker"
                    width="250"
                    class="blog-banner-img"
                  />
                </div>

                <div class="blog-content-wrapper">
                  <h3>
                    <a href="#" class="h3">
                      Building microservices with Dropwizard, MongoDB & Docker
                    </a>
                  </h3>

                  <p class="blog-text">
                    This NoSQL database oriented to documents (by documents like
                    JSON) combines some of the features from relational
                    databases, easy to use and the multi-platform is the best
                    option for scale up and have fault tolerance, load
                    balancing, map reduce, etc.
                  </p>

                  <div class="wrapper-flex">
                    </div>

                    <div class="wrapper">
                      <p class="text-sm">
                        <time datetime="2022-01-17">Jan 17, 2022</time>
                        <span class="separator"></span>
                        <ion-icon name="time-outline"></ion-icon>
                        <time datetime="PT3M">3 min</time>
                      </p>
                    </div>
                  </div>
                </div>
              </div>

          </div>
          </div>
          <?php } }?>
          <!--
          - ASIDE
        -->
        <div class="pagination">
          <li class="page-item previous-page disable"><a class="page-link" href="">prev</a></li>
          <li class="page-item current-page active"><a class="page-link" href="">1</a></li>
          <li class="page-item dots"><a class="page-link" href="">....</a></li>
          <li class="page-item current-page"><a class="page-link" href="">1</a></li>
          <li class="page-item current-page"><a class="page-link" href="">1</a></li>
          <li class="page-item dots"><a class="page-link" href="">....</a></li>
          <li class="page-item current-page"><a class="page-link" href="">1</a></li>
          <li class="page-item next-page"><a class="page-link" href="">Next</a></li>
        </div>
      </div>





                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!--
    - #FOOTER
  -->

    <footer>
      <div class="container">
        <div class="wrapper">

          </a>


          </ul>
        </div>
      </div>

      
    </footer>

    <!--
    - custom js link
  -->
    <script src="./assets/js/script.js"></script>

    <!--
    - ionicon link
  -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    <script type="text/javascript">
    function getPageList(, page, maxlength){
      function range(start, end){
        return Array.from(Array(end - start + 1), (_, i) => 1 + start);
      }

      var sideWidth = maxlength < 9 ? 1 : 2;
      var leftWidth = (maxlength - sideWidth * 2 - 3) >> 1;
      var rightWidth = (maxlength - sideWidth * 2 - 3) >> 1;

      if(totalPages <= maxLength){
        return range(1, totalPages);
      }

      if(page <= maxLength - sideWidth - 1 - rightWidth){
        return range(1, maxLength - sideWidth - 1).concat(0, range(totalPages - sideWidth + 1, totalPages));
      }

      if(page >= totalPages -  sideWidth - 1 - rightWidth){
        return range(1, sideWidth).concat(0, range(totalPages- sideWidth - 1 - rightWidth - leftWidth, totalPages));
      }

      return range(1, sideWidth).concat(0, range(page - leftWidth, page + rightWidth), 0, range(totalPages -  sideWidth + 1, totalPages));
    }
;
    $(function(){
      var numberOfItems = $(".blog .blog-card-group").length;
      var limitPerPage = 10;
      var totalPages = Math.ceil(mumberOfItems / limitPerPage);
      var paginationSize = 7;
      var currentPage;

      function showPage(whichPage){
        if(whichPage , 1 || whichPage > totalPages) return false;

        currentPage = whichPage;

        $(".blog .blog-card-group").hide().slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage).show();

        $(".pagination li").slice(1, -1).remove();

        getPageList(totalPages, currentPage, paginationSize).forEach(item => {
          $("<li>").addClass("page-item").addClass(item ? "currentPage" : "dots")
          .toggleClass("active", item === currentPage).append($("<a>").addClass("page-link")
          .attr({href: "javascript:void(0)"}).text(item || "...")).insertBefore(".next-page");
        });

        $(".previous-page").toggleClass("disable", currentPage === 1);
          $(".next-page").toggleClass("disable", currentPage === totalPages);
          return true;
      }

      $(".pagination").append(
        $("<li>").addClass("Page-item").addClass("previous-page").append($("<a>").addClass("page-link").attr({href: "javascript:void(0)"}).text("Prev")),
        $("<li>").addClass("Page-item").addClass("next-page").append($("<a>").addClass("page-link").attr({href: "javascript:void(0)"}).text("Next")),
      );

      $(".card-content").show();
      showPage(1);

      %(document).on("cick", ".pagination li.current-page:not(.active)", function(){
        return showPage(+$(this).text());
    });

    $("next-page").on("click, function())
    });
    </script>
  </body>
</html>
