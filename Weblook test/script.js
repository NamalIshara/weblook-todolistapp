function addTask() {
  var taskInput = document.querySelector('.task-container input[type="text"]');
  var taskText = taskInput.value.trim();

  if (taskText !== "") {
    var newTaskContainer = document.createElement("div");
    newTaskContainer.classList.add("task-container");

    var newTask = document.createElement("div");
    newTask.classList.add("task");
    newTask.textContent = taskText;

    var select = document.createElement("select");
    select.innerHTML = "<option>Completed</option><option>Uncompleted</option>";

    var checkIcon = document.createElement("i");
    checkIcon.innerHTML = "&#9989;";
    checkIcon.addEventListener("click", function () {
      newTask.classList.toggle("completed");
    });
  }
}
