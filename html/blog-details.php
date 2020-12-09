<!DOCTYPE html>
<html lang="en">
<head>

  <?php include "header.php"?>

</head>
<body>

<?php include "navbar.php" ?>

<main>

  <div class="page-hero-section bg-image hero-mini" style="background-image: url(../assets/img/hero_mini.svg);">
    <div class="hero-caption">
      <div class="container fg-white h-100">
        <div class="row justify-content-center align-items-center text-center h-100">
          <div class="col-lg-6">
            <h3 class="mb-4 fw-medium">Blog</h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-dark justify-content-center bg-transparent">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 py-3">
          <article class="blog-single-entry">
            <div class="post-thumbnail">
              <img src="../assets/img/blogs/blog_1.jpg" alt="">
            </div>
            <div class="post-date">
              Posted on <a href="#">Jan 19, 2020</a>
            </div>
            <h1 class="post-title">Duis feugiat neque sed dolor cursus, sed lacinia nisl pretium</h1>
            <div class="entry-meta mb-4">
              <div class="meta-item entry-author">
                <div class="icon">
                  <span class="mai-person"></span>  
                </div>
                by <a href="#">Admin</a>
              </div>
              <div class="meta-item">
                <div class="icon">
                  <span class="mai-pricetags"></span>
                </div>
                Category: 
                <a href="#">Business</a>, 
                <a href="#">Finances</a>
              </div>
              <div class="meta-item">
                <div class="icon">
                  <span class="mai-chatbubble-ellipses"></span>
                </div>
                <a href="#">24 Comments</a>
              </div>
            </div>
            <div class="entry-content">
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum ea voluptatibus perspiciatis quis voluptatem dolor. Optio harum fugiat neque. Placeat, eligendi omnis! Ipsa qui nemo eveniet, dignissimos ullam aut molestiae.</p>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum ea voluptatibus perspiciatis quis voluptatem dolor. Optio harum fugiat neque. Placeat, eligendi omnis! Ipsa qui nemo eveniet, dignissimos ullam aut molestiae.</p>
            </div>
          </article>

          <!-- Comments -->
          <div class="comment-area">
            <h3 class="mb-5">6 Comments</h3>
            <!-- Comment List -->
            <ul class="comment-list">
              <li class="comment">
                <div class="vcard bio">
                <img src="../assets/img/person/person_1.png" alt="Image placeholder">
                </div>
                <div class="comment-body">
                <h3>Jacob Smith</h3>
                <div class="meta">January 9, 2018 at 2:21pm</div>
                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                <p><a href="#" class="reply">Reply</a></p>
                </div>
              </li>
          
              <li class="comment">
                <div class="vcard bio">
                <img src="../assets/img/person/person_2.png" alt="Image placeholder">
                </div>
                <div class="comment-body">
                <h3>Chris Meyer</h3>
                <div class="meta">January 9, 2018 at 2:21pm</div>
                <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                <p><a href="#" class="reply">Reply</a></p>
                </div>
          
                <ul class="children">
                <li class="comment">
                  <div class="vcard bio">
                  <img src="../assets/img/person/person_3.png" alt="Image placeholder">
                  </div>
                  <div class="comment-body">
                  <h3>Chintan Patel</h3>
                  <div class="meta">January 9, 2018 at 2:21pm</div>
                  <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                  <p><a href="#" class="reply">Reply</a></p>
                  </div>
          
                  <ul class="children">
                  <li class="comment">
                    <div class="vcard bio">
                    <img src="../assets/img/person/person_2.png" alt="Image placeholder">
                    </div>
                    <div class="comment-body">
                    <h3>Jean Doe</h3>
                    <div class="meta">January 9, 2018 at 2:21pm</div>
                    <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                    <p><a href="#" class="reply">Reply</a></p>
                    </div>
          
                    <ul class="children">
                    <li class="comment">
                      <div class="vcard bio">
                      <img src="../assets/img/person/person_1.png" alt="Image placeholder">
                      </div>
                      <div class="comment-body">
                      <h3>Ben Afflick</h3>
                      <div class="meta">January 9, 2018 at 2:21pm</div>
                      <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                      <p><a href="#" class="reply">Reply</a></p>
                      </div>
                    </li>
                    </ul>
                  </li>
                  </ul>
                </li>
                </ul>
              </li>
          
              <li class="comment">
                <div class="vcard bio">
                <img src="../assets/img/person/person_3.png" alt="Image placeholder">
                </div>
                <div class="comment-body">
                <h3>Jean Doe</h3>
                <div class="meta">January 9, 2018 at 2:21pm</div>
                <p>Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
                <p><a href="#" class="reply">Reply</a></p>
                </div>
              </li>
            </ul> <!-- END .comment-list -->
        
            <div class="comment-form-wrap pt-5">
              <h3 class="mb-5">Leave a comment</h3>
              <form action="#" class="">
                <div class="form-row form-group">
                  <div class="col-md-6">
                    <label for="name">Name *</label>
                    <input type="text" class="form-control" id="name">
                  </div>
                  <div class="col-md-6">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="website">Website</label>
                  <input type="url" class="form-control" id="website">
                </div>
          
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="msg" id="message" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Post Comment" class="btn btn-primary">
                </div>
              </form>
            </div>
          </div> <!-- end comment -->
        </div>

        <!-- Sidebar -->
        <div class="col-lg-4 py-3">
          <div class="widget-wrap">
            <form action="#" class="search-form">
              <h3 class="widget-title">Search</h3>
              <div class="form-group">
                <span class="icon mai-search"></span>
                <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
              </div>
            </form>
          </div>

            <div class="widget-wrap">
              <h3 class="widget-title">Jobs</h3>
              <ul class="categories">
                <li><a href="#">Graphic Designer <span>12</span></a></li>
                <li><a href="#">Visual Assistant <span>22</span></a></li>
                <li><a href="#">Programing <span>37</span></a></li>
                <li><a href="#">Office Admin <span>42</span></a></li>
                <li><a href="#">Web Designer <span>14</span></a></li>
                <li><a href="#">Language <span>140</span></a></li>
              </ul>
            </div>

            <div class="widget-wrap">
              <h3 class="widget-title">Recent Blog</h3>
              <div class="blog-widget">
                <div class="blog-img">
                  <img src="../assets/img/blogs/blog_1.jpg" alt="">
                </div>
                <div class="entry-footer">
                  <div class="blog-title mb-2"><a href="#">Duis feugiat neque sed dolor cursus, sed lacinia nisl pretium</a></div>
                  <div class="meta">
                    <a href="#"><span class="icon-calendar"></span> July 12, 2018</a>
                    <a href="#"><span class="icon-person"></span> Admin</a>
                    <a href="#"><span class="icon-chat"></span> 19</a>
                  </div>
                </div>
              </div>
              <div class="blog-widget">
                <div class="blog-img">
                  <img src="../assets/img/blogs/blog_2.jpg" alt="">
                </div>
                <div class="entry-footer">
                  <div class="blog-title mb-2"><a href="#">Duis feugiat neque sed dolor cursus, sed lacinia nisl pretium</a></div>
                  <div class="meta">
                    <a href="#"><span class="icon-calendar"></span> July 12, 2018</a>
                    <a href="#"><span class="icon-person"></span> Admin</a>
                    <a href="#"><span class="icon-chat"></span> 19</a>
                  </div>
                </div>
              </div>
              <div class="blog-widget">
                <div class="blog-img">
                  <img src="../assets/img/blogs/blog_3.jpg" alt="">
                </div>
                <div class="entry-footer">
                  <div class="blog-title mb-2"><a href="#">Duis feugiat neque sed dolor cursus, sed lacinia nisl pretium</a></div>
                  <div class="meta">
                    <a href="#"><span class="icon-calendar"></span> July 12, 2018</a>
                    <a href="#"><span class="icon-person"></span> Admin</a>
                    <a href="#"><span class="icon-chat"></span> 19</a>
                  </div>
                </div>
              </div>
            </div>

          <div class="widget-wrap">
            <h3 class="widget-title">Tag Cloud</h3>
            <div class="tag-clouds">
              <a href="#" class="tag-cloud-link">dish</a>
              <a href="#" class="tag-cloud-link">menu</a>
              <a href="#" class="tag-cloud-link">food</a>
              <a href="#" class="tag-cloud-link">sweet</a>
              <a href="#" class="tag-cloud-link">tasty</a>
              <a href="#" class="tag-cloud-link">delicious</a>
              <a href="#" class="tag-cloud-link">desserts</a>
              <a href="#" class="tag-cloud-link">drinks</a>
            </div>
          </div>

          <div class="widget-wrap">
            <h3 class="widget-title">Paragraph</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
          </div>
        </div> <!-- end sidebar -->

      </div> <!-- .row -->
    </div>
  </div>

</main>

<?php include "footer.php"?>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/mobster.js"></script>

</body>
</html>