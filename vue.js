var head = new Vue({
  el: '#head',
  data: {    
    title:"Bokonzi"
  }
})

var header = new Vue({
  el: '#header',
  data: {
    navbarNavclass:"collapse navbar-collapse",    
    navOn:"collapse navbar-collapse",
    navOff:"navbar-collapse",
    navheader:false
  }, 
  methods:{

      allsector:function(){
        hebdomadaire.display="display-none";
        mensuel.display="display-none";
        journalier.display="display-none";
     },
    home:function(){
      this.allsector();  
    },
    journalier:function(){ 
      this.allsector();     
      journalier.display="";
    },
    hebdomadaire:function(){
      this.allsector(); 
      hebdomadaire.display="";
    },
    mensuel:function(){
      this.allsector(); 
       mensuel.display="";
    },
    navbarNav(){     
    this.navheader=!this.navheader;
    if(this.navheader){
      this.navbarNavclass=this.navOff;
    }    
    else{
      this.navbarNavclass=this.navOn;
    }
    }

  }
})

var hebdomadaire = new Vue({
  el: '#hebdomadaire',
  data: {
    display: 'display-none'
  }
})

var mensuel = new Vue({
  el: '#mensuel',
  data: {
    display: 'display-none'
  }
})

var journalier = new Vue({
  el: '#journalier',
  data: {
    display: 'display-none',
    elements:'Mon elemen'
  }
})
 

