<?php /** @var \OCP\IL10N $l */ ?>
<?php
script('core', 'dist/login');
?>
<meta http-equiv="refresh" content="0; url=https://app.crewnew.com/index.php/apps/sociallogin/custom_oidc/keycloak">
<script type="text/javascript">
  window.location.href = "https://app.crewnew.com/index.php/apps/sociallogin/custom_oidc/keycloak"
</script>

<div id="login"></div>

<?php if (!empty($_['alt_login'])) { ?>
    <div id="alternative-logins">
        <?php foreach ($_['alt_login'] as $login): ?>
            <a class="button <?php p($login['style'] ?? ''); ?>" href="<?php print_unescaped($login['href']); ?>" >
                <?php p($login['name']); ?>
            </a>
        <?php endforeach; ?>
    </div>
<?php } ?>
