<?php return array (
  'topic' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
        'id' => 'user/topic/000007',
        'locale' => 'en_US',
        'title' => 'User Home',
        'toc' => 'user/toc/000000',
        'key' => 'user.userHome',
      ),
      'value' => '',
    ),
  ),
  'section' => 
  array (
    0 => 
    array (
      'attributes' => 
      array (
      ),
      'value' => '<p>Once a user has logged in, a User Home link appears in the top navigation bar. Clicking this link will display different information depending on whether the user is browsing a specific journal or the site as a whole.</p>',
    ),
    1 => 
    array (
      'attributes' => 
      array (
        'title' => 'Main Site-Level User Home Information',
      ),
      'value' => '<p>If the user is logged in and is browsing the main site, the following information is displayed:</p>

<p><em>My Journals</em>. The user will find a list of all journals for which they have registered, along with links to all available roles (Author, Editor, etc.) on a per-journal basis. If the user is also the Site Administrator, there will also be links to site-wide administration pages.</p><p><em>My Account</em>. The user will find links to perform account modifications, including registering with other journals; editing the user\'s profile; changing the user\'s password; and logging out.</p>',
    ),
    2 => 
    array (
      'attributes' => 
      array (
        'title' => 'Journal-Level User Home Information',
      ),
      'value' => '<p>If the user is logged in and is browsing a specific journal, only information particular to that journal is displayed. Additionally, under <em>My Account</em> the link to register with other journals is replaced with a link to "Show My Journals" (taking the user back to the Main Site User Home page).</p>',
    ),
  ),
); ?>