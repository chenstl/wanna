<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="mdui-container pageBody shadow-2">
    <div class="mdui-typo pageHead">
        <h3><?php $this->title() ?></h3>
        <div class="taptap">
            <div>
                <span><i class="mdui-icon material-icons">check</i>评论：<a><?php $this->commentsNum('%d  条'); ?></a></span>
                <span><i class="mdui-icon material-icons">change_history</i>Tags：<?php $this->category(','); ?></span>
            </div>
            <div class="pageDataRight">
                <span>
                    作者 : <a><?php $this->author() ?></a></span>
                <span>
                    <i class="mdui-icon material-icons">date_range</i>日期 : <?php $this->date('Y / F j'); ?></span>
            </div>

        </div>
    </div>
    <div class="mdui-divider" style="margin: 10px 0"></div>
    <div class="mdui-typo pageContent">
        <h4></h4>
        <p><?php $this->content('Continue Reading...'); ?></p>
    </div>
</div>

<?php $this->need('comments.php'); ?>
<?php $this->need('footer.php'); ?>
