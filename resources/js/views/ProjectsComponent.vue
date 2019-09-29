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
            <div class="col-md-4 mx-auto pb-5">
              <div class="card custom-card blue-gradient">
                <div class="card-body">
                  <h4 class="card-title">Card Title</h4>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo</p>
                  <div class="card-image">
                    <img src="../../img/placeholder.jpg" class="img-fluid card-img-top" alt="..." />
                  </div>
                  <div class="card-links">
                    <button type="button" class="btn btn-success card-button">View details</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 mx-auto pb-5">
              <div class="card custom-card mag-gradient">
                <div class="card-body">
                  <h4 class="card-title">Card Title</h4>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo</p>
                  <div class="card-image">
                    <img src="../../img/placeholder.jpg" class="img-fluid card-img-top" alt="..." />
                  </div>
                  <div class="card-links">
                    <button type="button" class="btn btn-success card-button">View details</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 mx-auto pb-5">
              <div class="card custom-card ocean-gradient">
                <div class="card-body">
                  <h4 class="card-title">Card Title</h4>
                  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo</p>
                  <div class="card-image">
                    <img src="../../img/placeholder.jpg" class="img-fluid card-img-top" alt="..." />
                  </div>
                  <div class="card-links">
                    <button type="button" class="btn btn-success card-button">View details</button>
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
