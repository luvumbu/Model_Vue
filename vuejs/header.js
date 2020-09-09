var header = new Vue({
  el: '#header',
  data: {
  envoie:new Information("class/php/data.php"), // création de la classe  php.php  estvla localisation du fichier php
  },
  methods: {
    mousemove: function () {
      // this.envoie.add("login", "root"); // ajout de l'information pour lenvoi 
      // this.envoie.add("password", "root"); // ajout d'une deuxieme information denvoi  
      // //console.log(ok.info()); // demande l'information dans le tableau
      // this.envoie.push(); // envoie l'information au code pkp 
    }
  }
})