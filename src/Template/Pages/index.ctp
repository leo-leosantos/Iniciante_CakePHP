<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading">Ações</li>
        <li><?= $this->Html->link('Nova Página', ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3>Páginas</h3>

    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>Título</th>
                <th>Url</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pages as $page): ?>
            <tr>
                <td><?php echo $page->title; ?></td>
               <td><?php echo $page->url; ?></td>
                    <td></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>








</div>
