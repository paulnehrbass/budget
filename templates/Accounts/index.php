
<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Account> $accounts
*/
?>

<div class="table-responsive">
        <?= $this->Html->link(__('New Account'), ['action' => 'add'], ['class' => 'button float-right']) ?>
        <table class="table caption-top">
        <caption><?= __('Accounts') ?></caption>
        <thead>
        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('name') ?></th>
                            <th><?= $this->Paginator->sort('type') ?></th>
                            <th><?= $this->Paginator->sort('bic') ?></th>
                            <th><?= $this->Paginator->sort('iban') ?></th>
                            <th><?= $this->Paginator->sort('adviser') ?></th>
                            <th><?= $this->Paginator->sort('phone') ?></th>
                            <th><?= $this->Paginator->sort('image') ?></th>
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
                                                                                                                                                                <td><?= h($account->type) ?></td>
                                                                                                                                                                <td><?= h($account->bic) ?></td>
                                                                                                                                                                <td><?= h($account->iban) ?></td>
                                                                                                                                                                <td><?= h($account->adviser) ?></td>
                                                                                                                                                                <td><?= h($account->phone) ?></td>
                                                                                                                                                                <td><?= h($account->image) ?></td>
                                                                                                                                                                <td><?= h($account->created) ?></td>
                                                                                                                                                                <td><?= h($account->modified) ?></td>
                                                                        <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $account->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $account->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $account->id], ['confirm' => __('Are you
                sure you want to delete # {0}?', $account->id)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<div class="container-fluid mt-5">
    <p><?= $this->Paginator->counter() ?></p>
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <?= $this->Paginator->first(__('<<')) ?>
            <?= $this->Paginator->prev(__('<')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('>')) ?>
            <?= $this->Paginator->last(__('>>')) ?>
        </ul>
    </nav>
</div>
