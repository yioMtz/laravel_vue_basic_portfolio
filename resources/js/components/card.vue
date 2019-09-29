<template>
  <div class="col-md-4 mx-auto pb-5">
    <div :class="['card custom-card', theme]">
      <div class="card-body">
        <h4 class="card-title">Card Title</h4>
        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo</p>
        <div class="card-image">
          <img src="../../img/placeholder.jpg" class="img-fluid card-img-top" alt="..." />
        </div>
        <div class="card-links">
          <button
            type="button"
            class="btn btn-success card-button"
            v-on:click="showProject(project)"
          >View details</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "card",
  props: {
    theme: String,
    project: String,
    slug: String,
    title: String,
    image: ""
  },
  methods: {
    showProject(event) {
      this.$emit("show-project", event);
    }
  }
};
</script>