<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="task-container">
    Task
    <input type="text" placeholder="What do you need to do?"><br>
    <button>Save Item</button>
  </div>
  <div class="task-container">
    ToDo:
    <div class="task">
      Some work
      <select>
        <option>Completed</option>
        <option>Uncompleted</option>
      </select>
      <i>&#9989</i>
      <i>&#x274C;</i>
    </div>

    <script>
      function addTask() {
        let taskInput = document.querySelector('.task-container input[type="text"]');
        let taskText = taskInput.value.trim();

        if (taskText !== '') {
          let newTaskContainer = document.createElement('div');
          newTaskContainer.classList.add('task-container');

          let newTask = document.createElement('div');
          newTask.classList.add('task');
          newTask.textContent = taskText;

          let select = document.createElement('select');
          select.innerHTML = '<option>Completed</option><option>Uncompleted</option>';

          let checkIcon = document.createElement('i');
          checkIcon.innerHTML = '&#9989;';
          checkIcon.addEventListener('click', function () {
            newTask.classList.toggle('completed');
          });

          newTask.appendChild(select);
          newTask.appendChild(checkIcon);

          newTaskContainer.appendChild(newTask);
          document.body.appendChild(newTaskContainer);

          taskInput.value = '';
        } else {
          alert('Please enter a task!');
        }
      }

      document.querySelector('.task-container button').addEventListener('click', addTask);
    </script>
</body>

</html>