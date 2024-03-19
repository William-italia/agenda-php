<?php include_once("templates/header.php")?>

  <div class="flex flex-col items-center mt-20 min-h-screen">
    <!-- card show -->
    <div class="relative">
        <div class="flex flex-col">
            <h1 class="text-4xl font-medium mb-6"><?= $contact['name'] ?></h1>
            <p class="text-xl mb-3 font-bold">Telefone: </p>
            <p><?= $contact['phone'] ?></p>
            <p class="text-xl mb-3 font-bold mt-6">Observações: </p>
            <p><?= $contact['observations'] ?></p>
            <a href="<?php $BASE_URL ?>index.php" class="absolute -bottom-20 -right-20 border-2 p-2 rounded-lg text-blue-500 border-blue-500 border-solid">Voltar</a>
        </div>
    </div>
  </div>

<?php include_once("templates/footer.php")?>
