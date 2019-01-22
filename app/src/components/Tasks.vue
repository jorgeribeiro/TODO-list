<template>
  <div>
    <h1>TASK LIST</h1>
    <ul v-for="task in tasks" :key="task.id">
      <li>
        <b>{{ task.title }}</b> / {{ task.description }}
      </li>
    </ul>
  </div>
</template>

<script>
import axios from 'axios'

export default {
  name: 'tasks',
  data() {
    return {
      tasks: []
    }
  },

  methods: {
    loadTasks() {
      axios
      .get('http://localhost:8000/tasks')
      .then(response => (this.tasks = response.data));
    }
  },

  mounted() {
    this.loadTasks();
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
@import "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";

ul {
  margin: 0;
  padding: 0;
  list-style-type: none;
}

ul li {
  padding: 20px;
  font-size: 1.3em;
  background-color: #e0edf4;
  margin-bottom: 2px;
  color: #3e5252;
}

h1 {
  color: #42b983;
}
</style>
