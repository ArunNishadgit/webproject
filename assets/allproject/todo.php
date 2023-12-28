 <link rel="stylesheet" href="./projectcss/todo.css">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>mini project</title>

<header>
    <h1>To do List</h1>
  </header>
  <form>
    <input type="text" class='todo-inputs'>
    <button class='todo-button'>
      <i class='fas fa-plus-square'></i>
    </button>
    <div class="select">
      <select name="todos" class='filter-todos'>
        <option value="all">All</option>
        <option value="completed">Completed</option>
        <option value="uncompleted">Uncompleted</option>
      </select>
    </div>
  </form>
  <div class="todo-container">
    <ul class="todo-list"></ul>
  </div>
<script src="./projectscript/todo.js"></script>
</body>
</html>