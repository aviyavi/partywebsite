<div class="footer">
	<!-- <ul class="footer-nav">
		<li><a href="index.html">ГЛАВНАЯ</a></li>
		<li><a href="biography.html">БИОГРАФИЯ</a></li>
		<li><a href="news.html">НОВОСТИ</a></li>
		<li><a href="photo.html">ФОТО</a></li>
		<li><a href="contacts.html">КОНТАКТЫ</a></li>
		<li><a href="help.html">ПОМОЩЬ</a></li>
		<li><a href="search.html">ПОИСК</a></li>
	</ul> -->
	<?php

      $args=array (
  'theme_location'  => '',
  'menu'            => '',
  'container'       => 'ul',
  'container_class' => 'nav-navbar',
  'container_id'    => '',
  'menu_class'      => 'nav-navbar',
  'menu_id'         => '',
  'echo'            => true,
  'fallback_cb'     => 'wp_page_menu',
  'before'          => '',
  'after'           => '',
  'link_before'     => '',
  'link_after'      => '',
  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
  'depth'           => 0,
  'walker'          => '',
  );
      wp_nav_menu ($args); ?>
	<div class="social">
		<a href="https://vk.com/public213049540"><img src="<?= get_template_directory_uri(); ?>/img/vk.png" alt="">
</a>
	</div>
	<p>© 2022 Официальный сайт. Ясинская Марина Владимировна</p>
	<p>E-mail: partiya.osvobozhdeniay@gmail.com</p>
</div>
</div>
</body>
</html>
