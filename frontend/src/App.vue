<template>
  <body class="hold-transition register-page">
    <div class="register-box">
      <div class="wrapper">
        <Preloader></Preloader>
        <section class="content">
          <Recrutmen></Recrutmen>
        </section>
      </div>
    </div>
  </body>
</template>

<script>
import $ from "jquery";
import "../node_modules/admin-lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css";
import "../node_modules/admin-lte/plugins/select2/css/select2.min.css";

import Preloader from "./dashboard/Preloader.vue";
import Recrutmen from "./components/Recrutmen.vue";

export default {
  name: "App",
  components: {
    Preloader,
    Recrutmen,
  },
  methods: {
    initializeSelect2() {
      //Initialize Select2 Elements
      $(".select2").select2();

      //Initialize Select2 Elements
      $(".select2bs4").select2({
        theme: "bootstrap4",
      });
    },
  },
  mounted() {
    this.initializeSelect2();
  },
};
</script>

<style>
@import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback");
</style>
