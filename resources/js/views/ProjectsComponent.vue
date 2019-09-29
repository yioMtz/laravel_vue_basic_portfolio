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
            <div class="col-md-4 mt-1 mx-auto">
              <div class="card custom-card">
                <img
                  src="../../img/placeholder.jpg"
                  width="150"
                  height="150"
                  class="img-fluid card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">Card Title</h5>
                  <p class="text-muted">Card description</p>
                  <div class="links">
                    <div class="left-link d-flex">
                      <a
                        type="button"
                        class="btn btn-small btn-secondary"
                        style="background-color:#005959;"
                        href="#"
                        target="_blank"
                      >visit site</a>
                    </div>
                    <div class="right-link d-flex">
                      <button
                        type="button"
                        class="btn btn-small btn-secondary fabs"
                        v-on:click="showProject('project1')"
                      >
                        <i class="fas fa-ellipsis-v"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 mt-1 mx-auto">
              <div class="card custom-card">
                <img
                  src="../../img/placeholder.jpg"
                  width="150"
                  height="150"
                  class="img-fluid card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">Card Tilte</h5>
                  <p class="text-muted">Card description</p>
                  <div class="links">
                    <div class="left-link d-flex">
                      <a
                        type="button"
                        class="btn btn-small btn-secondary"
                        style="background-color:#005959;"
                        href="#"
                        target="_blank"
                      >visit site</a>
                    </div>
                    <div class="right-link d-flex">
                      <button
                        type="button"
                        class="btn btn-small btn-success fabs"
                        v-on:click="showProject('project2')"
                      >
                        <i class="fas fa-ellipsis-v"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 mt-1 mx-auto">
              <div class="card custom-card">
                <img
                  src="../../img/placeholder.jpg"
                  width="150"
                  height="150"
                  class="img-fluid card-img-top"
                  alt="..."
                />
                <div class="card-body">
                  <h5 class="card-title">Card Title</h5>
                  <p class="text-muted">Card Description</p>
                  <div class="links">
                    <div class="left-link d-flex">
                      <a
                        type="button"
                        class="btn btn-small btn-secondary"
                        style="background-color:#005959;"
                        href="#"
                        target="_blank"
                      >visit site</a>
                    </div>
                    <div class="right-link d-flex">
                      <button
                        type="button"
                        class="btn btn-small btn-success fabs"
                        v-on:click="showProject('project3')"
                      >
                        <i class="fas fa-ellipsis-v"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    showProject(event) {
      this.$emit("show-project", event);
    }
  }
};
</script>
