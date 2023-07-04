<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/navigation.php') ?>


<main>
  <br>
<a href="/notes/create"  class="inline-flex items-center rounded-md bg-gray-100 px-10 py-2 text-m font-medium text-gray-600 ring-1 ring-inset ring-gray-500">Create Note </a>




<ul role="list" class="divide-y divide-gray-100">
<?php foreach ($notes as $note) : ?>

  <li class="flex justify-between gap-x-6 py-5">
    <div class="flex gap-x-4">
      <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
      <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                    <?= htmlspecialchars($note['body']) ?>
                </a>
            </li>
      

        
        <p class="mt-1 truncate text-xs leading-5 text-gray-500">  </ul>
        <ul role="list" class="divide-y divide-gray-100">
    <p><?= htmlspecialchars($note['body']) ?></p>


    </p>
      </div>
    </div>

      <div class="min-w-0 flex-auto">
        <p class="text-sm font-semibold leading-6 text-gray-900">
    <div class="hidden sm:flex sm:flex-col sm:items-end">
      <p class="text-sm leading-6 text-gray-900">Co-Founder / CEO</p>

      <p class="mt-1 text-xs leading-5 text-gray-500">User id: <time datetime="2023-01-23T13:23Z"><?= htmlspecialchars($note['user_id']) ?></time></p>
    </div>
  </li>
  <?php endforeach; ?>
  </ul>

</main>

<?php require base_path('views/partials/footer.php') ?>

