<?php if (!defined('FLUX_ROOT')) exit; ?>

<h2>News</h2>
<?php if($newstype == '1'): ?>
    <?php if($news): ?>
    <div class="newsDiv">
        <?php foreach($news as $nrow):?>
            <h2>
                <a href="<?php echo $this->url('news-custom', 'view', array('id' => $nrow->id)) ?>">
                    <?php echo $nrow->title ?>
                </a>
            </h2>
        <?php endforeach; ?>
    </div>
    <?php else: ?>
        <p>
            <?php echo htmlspecialchars(Flux::message('CMSNewsEmpty')) ?><br/><br/>
        </p>
    <?php endif ?>
<?php else: ?>
    <p>Sorry, this addon only works for CMSNewsType 1.<br>Check CMSNewsType configuration option..</p>
<?php endif ?>
