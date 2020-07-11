var login = new Vue({
  el: '#login',
  data: {
    navbarNavclass:"collapse navbar-collapse",    
    navOn:"collapse navbar-collapse",
    navOff:"navbar-collapse",
    navheader:false
  }, 
  methods:{
    allsector:function(){
				inscriptions.display="display-none";
        connexion.display="display-none";
     },
    home:function(){
      this.allsector();  
    },
    connexion:function(){ 
      this.allsector();     
			connexion.display="";
			console.log("connexion");
    },
    inscriptions:function(){
      this.allsector(); 
			inscriptions.display="";
			console.log("inscriptions");
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



var head = new Vue({
  el: '#head',
  data: {
    title:"Login"
  }
})



