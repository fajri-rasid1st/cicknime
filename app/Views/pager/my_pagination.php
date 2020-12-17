<?php $pager->setSurroundCount(0) ?>

<nav aria-label="Page navigation example">
    <ul class="pagination pagination-lg justify-content-center">
        <?php if ($pager->hasPrevious()) : ?>
            <li class="page-item mx-1">
                <a class="page-link" href="<?= $pager->getFirst() ?>" aria-label="<?= lang('Pager.first') ?>">
                    <span aria-hidden="true">
                        <i class="fas fa-angle-double-left"></i>
                    </span>
                </a>
            </li>
            <li class="page-item mx-1">
                <a class="page-link" href="<?= $pager->getPrevious() ?>" aria-label="<?= lang('Pager.previous') ?>">
                    <span aria-hidden="true">
                        <i class="fas fa-angle-left"></i>
                    </span>
                </a>
            </li>
        <?php endif ?>

        <?php foreach ($pager->links() as $link) : ?>
            <li class="page-item mx-1 <?= $link['active'] ? 'active' : '' ?>">
                <a class="page-link" href="<?= $link['uri'] ?>">
                    <?= $link['title'] ?>
                </a>
            </li>
        <?php endforeach ?>

        <?php if ($pager->hasNext()) : ?>
            <li class="page-item mx-1">
                <a class="page-link" href="<?= $pager->getNext() ?>" aria-label="<?= lang('Pager.next') ?>">
                    <span aria-hidden="true">
                        <i class="fas fa-angle-right"></i>
                    </span>
                </a>
            </li>
            <li class="page-item mx-1">
                <a class="page-link" href="<?= $pager->getLast() ?>" aria-label="<?= lang('Pager.last') ?>">
                    <span aria-hidden="true">
                        <i class="fas fa-angle-double-right"></i>
                    </span>
                </a>
            </li>
        <?php endif ?>
    </ul>
</nav>