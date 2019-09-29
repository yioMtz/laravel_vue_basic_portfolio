<template>
  <div
    class="modal fade"
    id="pmodal"
    tabindex="-1"
    role="dialog"
    aria-labelledby="projectModal"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <button
          type="button"
          class="close"
          data-dismiss="modal"
          aria-label="Close"
          style="position:absolute;right:20px;top:0;font-size:3rem;z-index:2;"
        >
          <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-body">
          <div id="projectsSlideShow" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
              <li
                v-for="(slide, index) in datos.images"
                :key="index"
                data-target="#projectsSlideShow"
                data-slide-to="index"
                :class="{ 'active': index === 0 }"
              ></li>
            </ol>
            <div class="carousel-inner">
              <div
                class="carousel-item"
                v-for="(slide, index) in datos.images"
                :class="{ 'active': index === 0 }"
                :key="index"
              >
                <img :src="slide" class="d-block w-100" alt="slide" />
              </div>
            </div>
            <a
              class="carousel-control-prev"
              href="#projectsSlideShow"
              role="button"
              data-slide="prev"
            >
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a
              class="carousel-control-next"
              href="#projectsSlideShow"
              role="button"
              data-slide="next"
            >
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div id="desc-container">
            <div style="flex:2">
              <h2 class="section-subTitle">The Project</h2>
              <p>{{ datos.description }}</p>
            </div>
            <div style="flex:1;">
              <h2 class="section-subTitle px-3 text-justify">
                Built with
                <i class="fas fa-laptop-code float-right" style="color:darkGreen"></i>
              </h2>
              <div style="display:inline-block;text-align:left;">
                <ul>
                  <li v-for="tool in datos.tools" :key="tool">{{ tool }}</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import json from "../data.json";
export default {
  props: ["title"],
  data() {
    return {
      myJson: json,
      datos: {}
    };
  },
  methods: {
    setData(val) {
      for (var i = 0; i < this.myJson.length; i++) {
        if (this.myJson[i].name === val) {
          this.datos = this.myJson[i];
          return;
        }
      }
    }
  },
  watch: {
    title: function(newVal, oldVal) {
      this.setData(newVal);
    }
  }
};
</script>