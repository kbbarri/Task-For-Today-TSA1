<?= view('templates/header') ?>

<section class="page-heading">
    <div>
        <p class="eyebrow">TASK MANAGEMENT</p>
        <h1>All Tasks</h1>
        <p class="subtitle">
            Complete list of scheduled tasks
        </p>
    </div>

    <div class="task-count">
        <strong><?= count($tasks) ?></strong>
        <span>Total Tasks</span>
    </div>
</section>

<div class="table-wrapper">

    <table class="task-table">

        <thead>
            <tr>
                <th>ID</th>
                <th>Task</th>
                <th>Status</th>
                <th>Task Date</th>
                <th>Created</th>
            </tr>
        </thead>

        <tbody>

        <?php foreach ($tasks as $task): ?>

            <tr>

                <td>
                    #<?= esc($task['id']) ?>
                </td>

                <td class="task-title">
                    <?= esc($task['title']) ?>
                </td>

                <td>
                    <span class="status <?= esc($task['status']) ?>">
                        <?= esc(ucfirst($task['status'])) ?>
                    </span>
                </td>

                <td>
                    <?= date('M d, Y', strtotime($task['task_date'])) ?>
                </td>

                <td>
                    <?= date('M d, Y', strtotime($task['created_at'])) ?>
                </td>

            </tr>

        <?php endforeach; ?>

        </tbody>

    </table>

</div>

<?= view('templates/footer') ?>