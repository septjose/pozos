<template>
  <div>
    <h1>{{ title }}</h1>
    <p>{{ description }}</p>
    <button @click="incrementCount">Aumentar contador</button>
    <p>Contador: {{ count }}</p>
  </div>
</template>

<script>
export default {
  name: 'MyComponent',
  props: {
    title: {
      type: String,
      required: true
    },
    description: {
      type: String,
      default: 'Este es un componente Vue.'
    }
  },
  data () {
    return {
      count: 0
    }
  },
  methods: {
    incrementCount () {
      this.count++
    }
  }
};
</script>