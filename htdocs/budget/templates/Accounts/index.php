<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Account> $accounts
 */
?>

<div class="row">
    <ul class="list-group list-group-horizontal mb-5">
        <li class="list-group-item">
            <?= $this->Html->link(__('New Account'), ['action' => 'add'], ['class' => 'button float-right']) ?>
        </li>
    </ul>

    <h3><?= __('Accounts') ?></h3>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('category') ?></th>
                    <th><?= $this->Paginator->sort('type') ?></th>
                    <th><?= $this->Paginator->sort('image') ?></th>
                    <th><?= $this->Paginator->sort('iban') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($accounts as $account): ?>
                <tr>
                    <td><?= $this->Number->format($account->id) ?></td>
                    <td><?= h($account->name) ?></td>
                    <td><?= h($account->description) ?></td>
                    <td><?= h($account->category) ?></td>
                    <td><?= h($account->type) ?></td>
                    <td><?= h($account->image) ?></td>
                    <td><?= h($account->iban) ?></td>
                    <td><?= h($account->created) ?></td>
                    <td><?= h($account->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $account->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $account->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $account->id], ['confirm' => __('Are you sure you want to delete # {0}?', $account->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('First')) ?>
            <?= $this->Paginator->prev('< ' . __('Previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Next') . ' >') ?>
            <?= $this->Paginator->last(__('Last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </nav>
</div>
