<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Account $account
 */
?>

<div class="row">

    <ul class="list-group list-group-horizontal mb-5">
                <li class="list-group-item">
            <?= $this->Form->postLink(
            __('Delete'),
            ['action' => 'delete', $account->id],
            ['confirm' => __('Are you sure you want to delete # {0}?', $account->id), 'class' => 'side-nav-item']
            ) ?>
        </li>
                <li class="list-group-item">
            <?= $this->Html->link(__('List Accounts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </li>

    </ul>

    <div class="card">
        <div class="accounts card-body">
            <h4 class="card-title mb-4"><?= __('Edit Account') ?></h4>
            <?= $this->Form->create($account) ?>

                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                    echo $this->Form->control('category');
                    echo $this->Form->control('type');
                    echo $this->Form->control('image');
                    echo $this->Form->control('iban');
                ?>

            <div class="row">
                <?= $this->Form->button(__('Submit')) ?>
            </div>

            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
