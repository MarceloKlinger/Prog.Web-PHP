<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = (string)$_POST['fullname'];
  $email = (string)$_POST['email'];
  $subject = $_POST['subject'];
  $items_list = $_POST['items_list'];
  $gender = $_POST['gender'];
  $message = (string)$_POST['message'];

  echo 'Nome cadastrado: ' . $name;
  echo '</br> e-mail: ' . $email;
  echo '</br> Assunto: ' . $subject;
  echo '</br> Item: ' . $items_list;
  echo '</br> Sexo: ' . $gender;
  echo '</br> Mensagem: ' . $message;

  exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Linguagem Web</title>
</head>

<body class="min-h-screen flex items-center justify-center bg-blue-400">
  <div class="bg-white p-16 rounded shadow-2x1 w-2/3">
    <h2 class="text-3x1 font-bold mb-8">Formulário de contato</h2>
    <form action="index.php" method="post" class="space-y-3">
      <div class="flex flex-wrap items-stretch w-full mb-4 relative">
        <label class="mb-1 font-bold text-sm pr-4" name="fullname">Nome Completo: </label>
        <input class="flex-shrink flex-grow flex-auto leading-normal w-px flex-1 border-gray-400 px-2 border border-gray-400 rounded-lg outline-none focus:border-blue-400" type="text" name="fullname" required="required">
      </div>
      <div class="flex flex-wrap items-stretch w-full mb-4 relative">
        <label class="mb-1 font-bold text-sm pr-4" nome="email">E-mail: </label>
        <input class="flex-shrink flex-grow flex-auto leading-normal w-px flex-1 px-2 border-gray-400 border border-gray-400 rounded-lg outline-none focus:border-blue-400" type="text" name="email" required="required">
      </div>
      <div class="flex flex-wrap items-stretch w-full mb-4 relative">
        <label class="mb-1 font-bold text-sm pr-4" nome="subject">Assunto</label>
        <input class="flex-shrink flex-grow flex-auto leading-normal w-px flex-1 px-2 border-gray-400 border border-gray-400 rounded-lg outline-none focus:border-blue-400" type="text" name="subject" required="required">
      </div>
      <div class="flex flex-wrap items-stretch w-full mb-4 relative">
        <label class="mb-1 font-bold text-sm pr-4" nome="items_list">Opções</label>
        <select required class="px-2 border focus:border-blue-400" id="items_list" name="items_list">
          <option style="display:none;"></option>
          <option value="item_list1">Item 1</option>
          <option value="item_list2">Item 2</option>
          <option value="item_list3">Item 3</option>
          <option value="item_list4">Item 4</option>
        </select>
      </div>
      <div>
        <label class="block mb-1 font-bold text-sm" for="gender">Sexo</label>
        <input class="border border-gray-400 p-1 rounded-lg outline-none focus:border-blue-400" type="radio" required id="male" name="gender" value="masculino">
        <label class="mb-1 font-bold text-sm" for="male">Masculino</label><br>
        <input class="border border-gray-400 p-1 rounded-lg outline-none focus:border-blue-400" type="radio" id="female" name="gender" value="feminino">
        <label class="mb-1 font-bold text-sm" for="female">Feminino</label><br>
      </div>
      <div>
        <label class="block mb-1 font-bold text-sm" for="mensage">Mensagem</label>
        <textarea class="h-40 w-full border border-gray-400 p-1 rounded-lg outline-none focus:border-blue-400" required name="message">
      </textarea>
      </div>
      <input class="block w-full bg-green-400 p-4 rounded" type="submit" value="enviar">
    </form>
  </div>
</body>

</html>