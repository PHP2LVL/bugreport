<?php
include 'header.php';
$user = getUserMail($_SESSION[SLAPTAS]['id']);
?>
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <?php echo avatar($user['email'], 48); ?>
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php
                        if(! empty($user['vardas']) && ! empty($user['pavarde'])) {
                            echo $user['vardas'] . ' ' . $user['pavarde'];
                        } else {
                            echo $user['nick'];
                        }
                    ?>
                </div>
                <div class="email"><?php echo $user['email']; ?></div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <?php if(isset($conf['puslapiai']['view_user.php'])) { ?>
                            <li>
                                <a href="<?php echo url( '?id,' . $conf['puslapiai']['view_user.php']['id'] . ';' . $user['nick'] ); ?>"><i class="material-icons">person</i><?php echo $lang['user']['user_profile']; ?></a>
                            </li>
                        <?php } ?>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="/<?php echo $lang['user']['logout']; ?>"><i class="material-icons">input</i><?php echo $lang['user']['logout']; ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">
                    <?php echo $lang['admin']['menu_main']; ?>
                </li>
                <?php foreach (getAdminPages() as $id => $file) { ?>
                    <?php
                        $linkValue = (isset( $lang['admin'][basename($file, '.php')] ) ? $lang['admin'][basename($file, '.php')] : nice_name($file));
                    ?>
                    <li <?php echo ( isset( $_GET['a'] ) && $_GET['a'] == $id ? 'class="active"' : '' ); ?>>
                        <?php if(isset($buttons[$id]) && ! empty($buttons[$id])) { ?>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons"><?php echo adminMenuIcon($id); ?></i>
                                <span><?php echo $linkValue; ?></span>
                            </a>
                            <ul class="ml-menu" id="sub-menu-admin">
                                <?php foreach($buttons[$id] as $button) { ?>
                                    <li>
                                        <a href="<?php echo $button['url']; ?>"><?php echo $button['value']; ?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php } else { ?>
                            <a href="<?php echo url( '?id,999;a,' . $id ); ?>">
                                <i class="material-icons"><?php echo adminMenuIcon($id); ?></i>
                                <span><?php echo $linkValue; ?></span>
                            </a>
                        <?php } ?>
                    </li>
                <?php } ?>
                
                <?php if(! empty(getAdminExtensionsMenu())) { ?>
                    <li class="header">
                        <?php echo $lang['admin']['menu_extensions']; ?>
                    </li>
                    <?php foreach (getAdminExtensionsMenu() as $id => $file) { ?>
                        <?php
                            $linkValue = (isset( $lang['admin'][basename($file, '.php')] ) ? $lang['admin'][basename($file, '.php')] : nice_name($file));
                        ?>
                        <li <?php echo ( isset( $_GET['a'] ) && $_GET['a'] == $id ? 'class="active"' : '' ); ?>>
                            <?php if(! empty(buttons($id))) { ?>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <i class="material-icons"><?php echo adminMenuIcon($id); ?></i>
                                    <span><?php echo $linkValue; ?></span>
                                </a>
                                <ul class="ml-menu" id="sub-menu-admin">
                                    <?php foreach(buttons($id) as $button) { ?>
                                        <li>
                                            <a href="<?php echo $button['url']; ?>"><?php echo $button['value']; ?></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } else { ?>
                                <a href="<?php echo url( '?id,999;a,' . $id ); ?>">
                                    <i class="material-icons"><?php echo adminMenuIcon($id); ?></i>
                                    <span><?php echo $linkValue; ?></span>
                                </a>
                            <?php } ?>
                        </li>
                    <?php } ?>
                <?php } ?>
            </ul>
        </div>
        <!-- #Menu -->

		<!-- REPORT BUG BUTTON -->
		<div class="report">
			<button class="my-btn" title="Report bug">Report BUG</button>
			<p id="coords"></p>
		</div>
		<!-- END OF REPORT BUG -->

        <!--bug report form-->
        <div class="form-popup" id="myForm">
            <form action="" method="POST" enctype="multipart/form-data" class="form-container">
                <label for="bugdesc">
                    <b>Bug description</b>
                </label>
                <textarea rows="15" cols="32" name="bugdesc" required></textarea>

                <input type="submit" name="pateikti" value="pateikti" class="btn">
                <button type="button" name="cancelis" class="btn cancel" onclick="closeForm()">Close</button>
            </form>
        </div>
        <!-- Footer -->
        <div class="legal">
            <!-- <div class="copyright">
                &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
            </div> -->
            <div class="version">
                <b>Versija: </b> <?php echo versija(); ?>
            </div>
        </div>
        <script type="text/javascript">
            var forma = document.querySelector('.form-container .btn');
            forma.addEventListener('click', function(e){
                var versija = <?php echo versija(); ?>;
                var info = document.querySelector('.form-container textarea').value;
                e.preventDefault();
                var $this = $(this);
                var serializedData = JSON.stringify($($this).nestable('serialize')),
                data = {
                    versija: versija,
                    info: info,
                    action: 'atsakymas',
                    action_functions: 'modulis',
                    formData: serializedData
                };

                $.post("<?php echo url( "?id,999;a,ajax;" ); ?>", data, function(response) {
                    if(response) {
                        console.log(response);
                        // showNotification('success', response);
                    }
                });
            });
        </script>

        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>

<section class="content">
    <div class="container-fluid">
        <?php adminPages(); ?>
    </div>
</section>

<?php include 'footer.php'; ?>