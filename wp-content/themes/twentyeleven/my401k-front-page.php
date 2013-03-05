<?php
/**
 * Template Name: My401k Front Page
 * Description: A Page Template that uses the my401k portal styles
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<html><head>

    <title>My 401k Made Easy</title>

    <style>
      @import url(http://fonts.googleapis.com/css?family=News+Cycle);
      @import url('/stylesheets/overcast/jquery-ui-1.8.18.custom.css');
    </style>

    <link type="text/css" rel="stylesheet" media="screen" href="/assets/application.css?body=1">
    <script type="text/javascript" src="/assets/application.js?body=1"></script><style></style>

    <style>
      /* NOTE: set to 'display: none; ' if sign_up is disabled */
      a[href='/users/sign_up']{ display: inline; }

      /* #content{ display: none; } */
      #wpadminbar{ display: none; }

    </style>
  <link rel="stylesheet" href="http://localhost:3637/tinymce/jscripts/tiny_mce/themes/advanced/skins/default/ui.css"><link rel="stylesheet" href="http://localhost:3637/tinymce/jscripts/tiny_mce/plugins/inlinepopups/skins/clearlooks2/window.css">
<?php wp_head(); ?>
</head>

<body>
  <!-- used when the need for sign in arises during an ajax call -->
  <a style="display: none; " id="sign-in" href="/users/sign_in">Sign in</a>
  <div id="frame">
    <div id="canvas">
      <div id="header">
        <div class="top-bar"></div>
        <div class="log-out-profile-button">
          <ul class="menu">
            <li class="first"><a rel="nofollow" data-method="delete" href="/users/sign_out">Log-out</a></li>
            <li><a href="javascript:void(0);">Profile</a></li>
          </ul>
          <div class="who-am-i">Welcome, <span class="user-id">dcvezzani@gmail.com</span></div>
        </div>
      </div>
      <div id="body">
        <div id="left">
          <div class="xeasy-browse" id="logo">
            <a style="display: none; " href="/plan_participant"></a>
            <div class="logo-graphic corporate first">
              {My 401K Made Easy Logo}
              <div class="ribbon-shadow"></div>
            </div>
            <div class="logo-graphic sponsor"></div>
          </div>
          <div class="left-navigation" id="test-drive-resources">
          </div>
          <div id="communications">
            <div class="communication-item blog-summary first">
              <div class="head">
                <h2 class="title">Plan Blog</h2>
                <ul class="inline-block menu content">
                  <li class="first"><a href="javascript: void(0);">subscribe</a></li>
                  <li class="" id="summary-plan-blog-entries"><a href="/plan_blog_entries/summary">view all posts</a></li>
                </ul>
              </div>
              <div class="body">
                <div class="canvas">
                  <div class="entry first">
                    <img src="/assets/My401KMadeEasy/photo-plan-blog.png">
                    <h3 class="title">Donec sodales sagittis</h3>
                    <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque.</p>
                  </div>
                  <div class="entry-div"></div>
                  <div class="entry">
                    <img src="/assets/My401KMadeEasy/photo-plan-blog.png">
                    <h3 class="title">Donec sodales sagittis</h3>
                    <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque.</p>
                    <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque.</p>
                    <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque.</p>
                  </div>
                </div>
              </div>
              <div id="blog-entry-sample" style="border: 0px none;"><a href="/plan_blog_entries/1/display">entry</a></div>
            </div>
            <div class="communication-item quick-links">
              <div class="head">
                <h2 class="title">Quick Links</h2>
                <ul class="inline-block menu content">
                  <li class="first"><a href="javascript: void(0);">customize</a></li>
                </ul>
              </div>
              <div class="body">
                <div class="entry first">
                  <img src="/assets/My401KMadeEasy/submit-feedback-icon.png">
                  <h3 class="title">Donec sodales sagittis</h3>
                  <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque.</p>
                </div>
                <div class="entry">
                  <img src="/assets/My401KMadeEasy/submit-feedback-icon.png">
                  <h3 class="title">Tellus eget condimentum</h3>
                  <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="left-navigation" id="left-navigation">
            <div class="tools" id="plan_sponsor_tools"></div>
          </div>
        </div>
        <div id="center-right">
          <div id="header-body">
            <div id="header-instructions">
              Hover over the buttons to get STARTED.
            </div>
            <div id="header-navigation">
              <ul class="inline-block">
                <li class="button easy-browse button-about-plan first"><a href="/plan_participant/about_plan">About Plan</a></li>
                <li class="button easy-browse button-manage-account"><a href="/plan_participant/manage_account">Manage Account</a></li>
                <li class="button easy-browse button-helpful-resources"><a href="/plan_participant/helpful_resources">Helpful Resources</a></li>
                <li class="button easy-browse button-enroll"><a href="/plan_participant/enroll">Enroll</a></li>
                <li class="button easy-browse button-special-offers"><a href="/plan_participant/special_offers">Special Offers</a></li>
              </ul>
            </div>
          </div>
          <div id="mid-section">
            <div id="banner"></div>
            <div id="topic">Plan Participant</div>
            <?php the_post() ?>
            <?php the_content() ?>
            <div class="" id="content">
              <div class="section-bar">
                <div class="section-bar-side left"></div>
                <div class="section-bar-side right"></div>
                <div class="bar-title">
                  <p class="title">Featured Content</p>
                </div>
                <div class="bar-actions"></div>
              </div>
              <div class="tile-row">
                <div class="tile first ">
                  <div class="head">
                    <div class="graphic icon-forms"></div>
                    <div class="title">
                      vulputate eget arcu In enim
                    </div>
                    <div class="line-break"></div>
                  </div>
                  <div class="body">
                    <div class="content">      Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis      </div>
                    <div class="action">Read more</div>
                  </div>
                </div>
                <div class="tile  ">
                  <div class="head">
                    <div class="graphic icon-forms"></div>
                    <div class="title">
                      In enim justo rhoncus ut
                    </div>
                    <div class="line-break"></div>
                  </div>
                  <div class="body">
                    <div class="content">      Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</div>
                    <div class="action">Read more</div>
                  </div>
                </div>
                <div class="tile  featured">
                  <div class="head">
                    <div class="graphic icon-sphere"></div>
                    <div class="title">
                      rhoncus ut imperdiet a venenatis
                    </div>
                    <div class="line-break"></div>
                  </div>
                  <div class="body">
                    <div class="content">      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</div>
                    <div class="action">Read more</div>
                  </div>
                </div>
                <div class="tile  ">
                  <div class="head">
                    <div class="graphic icon-sponsor"></div>
                    <div class="title">
                      imperdiet a venenatis vitae justo
                    </div>
                    <div class="line-break"></div>
                  </div>
                  <div class="body">
                    <div class="content">      Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</div>
                    <div class="action">Read more</div>
                  </div>
                </div>
              </div>
              <div class="section-bar">
                <div class="section-bar-side left"></div>
                <div class="section-bar-side right"></div>
                <div class="bar-title">
                  <p class="title">Content Directory</p>
                </div>
                <div class="bar-actions">
                  <div class="bar-action first search">
                    <div class="magnifying-glass"></div>
                  </div>
                </div>
              </div>
              <div class="tile-row">
                <div class="tile first featured">
                  <div class="head">
                    <div class="graphic icon-sphere"></div>
                    <div class="title">
                      rhoncus ut imperdiet a venenatis
                    </div>
                    <div class="line-break"></div>
                  </div>
                  <div class="body">
                    <div class="content">      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</div>
                    <div class="action">Read more</div>
                  </div>
                </div>
                <div class="tile  ">
                  <div class="head">
                    <div class="graphic icon-forms"></div>
                    <div class="title">
                      vulputate eget arcu In enim
                    </div>
                    <div class="line-break"></div>
                  </div>
                  <div class="body">
                    <div class="content">      Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis      </div>
                    <div class="action">Read more</div>
                  </div>
                </div>
                <div class="tile  ">
                  <div class="head">
                    <div class="graphic icon-forms"></div>
                    <div class="title">
                      In enim justo rhoncus ut
                    </div>
                    <div class="line-break"></div>
                  </div>
                  <div class="body">
                    <div class="content">      Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</div>
                    <div class="action">Read more</div>
                  </div>
                </div>
                <div class="tile  ">
                  <div class="head">
                    <div class="graphic icon-sponsor"></div>
                    <div class="title">
                      imperdiet a venenatis vitae justo
                    </div>
                    <div class="line-break"></div>
                  </div>
                  <div class="body">
                    <div class="content">      Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</div>
                    <div class="action">Read more</div>
                  </div>
                </div>
              </div>
              <div class="tile-row">
                <div class="tile first ">
                  <div class="head">
                    <div class="graphic icon-sponsor"></div>
                    <div class="title">
                      Phasellus viverra nulla.
                    </div>
                    <div class="line-break"></div>
                  </div>
                  <div class="body">
                    <div class="content">      Aenean massa odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.</div>
                    <div class="action">Read more</div>
                  </div>
                </div>
                <div class="tile  ">
                  <div class="head">
                    <div class="graphic icon-forms"></div>
                    <div class="title">
                      Vulputate eget arcu In enim.
                    </div>
                    <div class="line-break"></div>
                  </div>
                  <div class="body">
                    <div class="content">      Integer commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis      </div>
                    <div class="action">Read more</div>
                  </div>
                </div>
                <div class="tile  ">
                  <div class="head">
                    <div class="graphic icon-sphere"></div>
                    <div class="title">
                      Etiam rhoncus; maecenas.
                    </div>
                    <div class="line-break"></div>
                  </div>
                  <div class="body">
                    <div class="content">      Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi.</div>
                    <div class="action">Read more</div>
                  </div>
                </div>
                <div class="tile  featured">
                  <div class="head">
                    <div class="graphic icon-forms"></div>
                    <div class="title">
                      Duis leo; sed fringilla.
                    </div>
                    <div class="line-break"></div>
                  </div>
                  <div class="body">
                    <div class="content">      Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</div>
                    <div class="action">Read more</div>
                  </div>
                </div>
              </div>
              <div class="tile-row">
                <div class="tile first ">
                  <div class="head">
                    <div class="graphic icon-sponsor"></div>
                    <div class="title">
                      imperdiet a venenatis vitae justo
                    </div>
                    <div class="line-break"></div>
                  </div>
                  <div class="body">
                    <div class="content">      Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</div>
                    <div class="action">Read more</div>
                  </div>
                </div>
                <div class="tile  featured">
                  <div class="head">
                    <div class="graphic icon-forms"></div>
                    <div class="title">
                      vulputate eget arcu In enim
                    </div>
                    <div class="line-break"></div>
                  </div>
                  <div class="body">
                    <div class="content">      Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis      </div>
                    <div class="action">Read more</div>
                  </div>
                </div>
                <div class="tile  ">
                  <div class="head">
                    <div class="graphic icon-sphere"></div>
                    <div class="title">
                      rhoncus ut imperdiet a venenatis
                    </div>
                    <div class="line-break"></div>
                  </div>
                  <div class="body">
                    <div class="content">      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</div>
                    <div class="action">Read more</div>
                  </div>
                </div>
                <div class="tile  ">
                  <div class="head">
                    <div class="graphic icon-forms"></div>
                    <div class="title">
                      In enim justo rhoncus ut
                    </div>
                    <div class="line-break"></div>
                  </div>
                  <div class="body">
                    <div class="content">      Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</div>
                    <div class="action">Read more</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="page-with-shadows"></div>
        </div>
      </div>
      <div id="footer">
        <div class="social-media">
          <div class="icon-social-media first icon-social-media-twitter"></div>
          <div class="icon-social-media icon-social-media-rss-feed"></div>
          <div class="icon-social-media icon-social-media-facebook"></div>
        </div>
        <ul class="menu">
          <li class="first"><a href="javascript: void(0);">Feedback &amp; Questions</a></li>
          <li><a href="javascript: void(0);">Contacts</a></li>
          <li><a href="javascript: void(0);">Terms of Service</a></li>
          <li><a href="javascript: void(0);">Privacy Policy</a></li>
          <li><a href="javascript: void(0);">Refer</a></li>
        </ul>
        <div class="powered-by">Powered by My 401k Made Easy</div>
        <div class="bottom-bar"></div>
      </div>
    </div>
  </div>
  <?php wp_footer(); ?>
</body>

</html>


