<template>
  <div class="vue-page">
    <div class="d-flex flex-column justify-content-center align-items-center">
      <div class="text-center">
        <h1 class="section-headline">Projects</h1>
      </div>
      <div class="row">
        <div class="col">
          <ul class="nav justify-content-center" id="projects-tab" role="tablist">
            <li class="nav-item">
              <a
                class="nav-link active"
                id="web-tab"
                data-toggle="tab"
                href="#web"
                role="tab"
                aria-controls="web"
                aria-selected="true"
              >
                <i class="fas fa-globe" aria-hidden="true"></i> Web
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="web" role="tabpanel" aria-labelledby="web-tab">
          <div class="row">
            <card-component
              theme="blue-gradient"
              project="project1"
              v-on:show-project="projectClicked"
            ></card-component>
            <card-component
              theme="mag-gradient"
              project="project2"
              v-on:show-project="projectClicked"
            ></card-component>
            <card-component
              theme="ocean-gradient"
              project="project3"
              v-on:show-project="projectClicked"
            ></card-component>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import card from "../components/card";
export default {
  components: {
    "card-component": card
  },
  methods: {
    projectClicked(value) {
      this.$emit("show-project", value);
    }
  }
};
</script>
