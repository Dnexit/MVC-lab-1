const PhotoAlbum = {
    data() {
      return {
        index: -1,
        photos: [
          {
            title: "котик в маске",
            photo: "./../_img/gallery/(1).jpg",
            alt: "котик в маске",
            comment: "коментарий к фотографии"
          },
          {
            title: "удивлённый кот",
            photo: "./../_img/gallery/(2).jpg",
            alt: "удивлённый кот",
            comment: "коментарий к фотографии"
          },
          {
            title: "уставший котёнок",
            photo: "./../_img/gallery/(3).jpg",
            alt: "уставший котёнок",
            comment: "коментарий к фотографии"
          },
          {
            title: "котик смотрит вниз",
            photo: "./../_img/gallery/(4).jpg",
            alt: "котик смотрит вниз",
            comment: "коментарий к фотографии"
          },
          {
            title: "задумчивый котик",
            photo: "./../_img/gallery/(5).jpg",
            alt: "задумчивый котик",
            comment: "коментарий к фотографии"
          },
          {
            title: "виноватый котёнок",
            photo: "./../_img/gallery/(6).jpg",
            alt: "виноватый котёнок",
            comment: "коментарий к фотографии"
          },
          {
            title: "злые котики",
            photo: "./../_img/gallery/(7).jpg",
            alt: "злые котики",
            comment: "коментарий к фотографии"
          },
          {
            title: "крутые коты",
            photo: "./../_img/gallery/(8).jpg",
            alt: "крутые коты",
            comment: "коментарий к фотографии"
          },
          {
            title: "кенгуру",
            photo: "./../_img/gallery/(9).jpg",
            alt: "кенгуру",
            comment: "коментарий к фотографии"
          },
          {
            title: "кролик",
            photo: "./../_img/gallery/(10).jpg",
            alt: "кролик",
            comment: "коментарий к фотографии"
          },
          {
            title: "утёнок",
            photo: "./../_img/gallery/(11).jpg",
            alt: "утёнок",
            comment: "коментарий к фотографии"
          },
          {
            title: "слон",
            photo: "./../_img/gallery/(12).jpg",
            alt: "слон",
            comment: "коментарий к фотографии"
          },
          {
            title: "котик в смешной шляпе",
            photo: "./../_img/gallery/(13).jpg",
            alt: "котик в смешной шляпе",
            comment: "коментарий к фотографии"
          },
          {
            title: "котик с радугой",
            photo: "./../_img/gallery/(14).jpg",
            alt: "котик с радугой",
            comment: "коментарий к фотографии"
          },
          {
            title: "белые мишки",
            photo: "./../_img/gallery/(15).jpg",
            alt: "белые мишки",
            comment: "коментарий к фотографии"
          },
          {
            title: "котик на зачёте",
            photo: "./../_img/gallery/(1).png",
            alt: "котик на зачёте",
            comment: "коментарий к фотографии"
          }
        ]
      };
    }
  };
  
  const app = Vue.createApp(PhotoAlbum);
  
  app.component("album-item", {
    props: ["package"],
    emits: ["click"],
    template: `
          <span class="album-item" @click="$emit('click')">
              <img :src="package.photo" :alt="package.alt">
          </span>
      `,
    data() {
      return {
        isOpened: false
      };
    }
  });
  
  app.component("img-popup", {
    props: ["photos", "index"],
    emits: ["close"],
    template: `
          <teleport to="body">
          <div class="img_popup" @click.self="$emit('close')">
              <button type="button" class="to_left" @click="previous">&#8249;</button>
              <div class="content">
                  <img :src="photos[id].photo" :alt="photos.alt">
                  <div class="text">
                      <h2>{{photos[id].title}}</h2>
                      <p>{{photos[id].comment}}</p>
                  </div>
              </div>
              <button type="button" class="to_right" @click="next">&#8250;</button>
          </div>
      </teleport>
      `,
    data() {
      return {
        id: this.$props.index
      };
    },
    methods: {
      previous: function () {
        if (!this.id) {
          this.id = this.$props.photos.length - 1;
        } else {
          this.id--;
        }
      },
      next: function () {
        if (this.id === this.$props.photos.length - 1) {
          this.id = 0;
        } else {
          this.id++;
        }
      }
    }
  });
  
  app.mount("#app");
  