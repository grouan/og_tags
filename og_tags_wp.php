<?PHP // META Tags pour affichage d'un article de Blog WP sur les médias sociaux ?>

<?PHP // FACEBOOK, GOOGLE+... ?>
<meta property="og:title" content="<?PHP the_title(); ?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?PHP the_permalink(); ?>" />
<?PHP
	$thumbTemp = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
	$urlImg = $thumbTemp['0'];
?>
<meta property="og:image" content="<?PHP echo $urlImg; ?>" />
<?PHP $extrait = strip_tags(get_the_excerpt()); ?>
<meta property="og:description" content="<?PHP echo $extrait; ?>" />
<meta property="og:site_name" content="Nom et description de votre site web" />

<?PHP // TWITTER ?>
<meta name="twitter:card" content="summary_large_image"/>
<meta name="twitter:site" content="@profil_Twitter"/>
<meta name="twitter:creator" content="@profil_Twitter"/>
<meta name="twitter:title" content="<?PHP the_title(); ?>">
<meta name="twitter:description" content="<?PHP echo $extrait; ?>">
<meta name="twitter:image" content="<?PHP echo $urlImg; ?>">
